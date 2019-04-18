<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;

/**
 * Galleries Controller
 *
 * @property \App\Model\Table\GalleriesTable $Galleries
 *
 * @method \App\Model\Entity\Gallery[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GalleriesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Categories']
        ];
        $galleries = $this->paginate($this->Galleries);

        $this->set(compact('galleries'));
        $this->viewBuilder()->setLayout('userlayout');
    }

    public function photolist()
    {
        $this->paginate = [
            'contain' => ['Categories']
        ];
        $galleries = $this->paginate($this->Galleries);

        $this->set(compact('galleries'));
        $this->viewBuilder()->setLayout('adminlayout');
    }

    /**
     * View method
     *
     * @param string|null $id Gallery id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $gallery = $this->Galleries->get($id, [
            'contain' => ['Categories']
        ]);

        $this->set('gallery', $gallery);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $gallery = $this->Galleries->newEntity();
        if ($this->request->is('post')) {

            $imagearray = $this->request->getData('image');
            if (!empty($imagearray['tmp_name'])) {
                $image_name = $this->addimage($imagearray);
            }

            $gallery = $this->Galleries->patchEntity($gallery, $this->request->getData());
            $gallery->image = $image_name;

            if ($this->Galleries->save($gallery)) {
                $this->Flash->success(__('The gallery has been saved.'));

                return $this->redirect(['action' => 'photolist']);
            }
            $this->Flash->error(__('The gallery could not be saved. Please, try again.'));
        }
        $categories = $this->Galleries->Categories->find('list', ['limit' => 200]);
        $this->set(compact('gallery', 'categories'));
        $this->viewBuilder()->setLayout('adminlayout');
    }

    /**
     * Edit method
     *
     * @param string|null $id Gallery id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {

        $gallery = $this->Galleries->get($id, [
            'contain' => []
        ]);
        $image_name = $gallery->image;

        if ($this->request->is(['patch', 'post', 'put'])) {
            $imagearray = $this->request->getData('image');
            if (!empty($imagearray['tmp_name'])) {
                $image_name = $this->addimage($imagearray);
                //$galleriesTable->save($gal);
            }

            $gallery = $this->Galleries->patchEntity($gallery, $this->request->getData());
            $gallery->image = $image_name;
            //debug(json_encode( $gallery, JSON_PRETTY_PRINT)); exit;
            if ($this->Galleries->save($gallery)) {
                $this->Flash->success(__('The gallery has been saved.'));

                return $this->redirect(['action' => 'photolist']);
            }
            $this->Flash->error(__('The gallery could not be saved. Please, try again.'));
        }
        $categories = $this->Galleries->Categories->find('list', ['limit' => 200]);
        $this->set(compact('gallery', 'categories'));
        $this->viewBuilder()->setLayout('adminlayout');
    }

    /**
     * Delete method
     *
     * @param string|null $id Gallery id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $gallery = $this->Galleries->get($id);
        if ($this->Galleries->delete($gallery)) {
            $this->Flash->success(__('The gallery has been deleted.'));
        } else {
            $this->Flash->error(__('The gallery could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function changestatus($id, $status) {
        $gallery = $this->Galleries->get($id);
        $gallery->status = $status;
        
        if ($this->Galleries->save($gallery)) {
            $this->Flash->success(__('Banner status changed'));
        } else {
            $this->Flash->error(__('Unable to change Banner status. Please, try again.'));
        }
        return $this->redirect(['controller' => 'Galleries', 'action' => 'photolist']);
    }

    //function for adding a staff image
    public function addimage($imagearray) {
        $folder_upload = "images/gallery/portfolio/";
        $extension = array("jpeg", "jpg", "png", "gif");
        if (empty($imagearray['tmp_name'])) {
            return;
        }
       
        $size = \getimagesize($imagearray['tmp_name']);
   
        if ((empty($size) || ($size[0] === 0) || ($size[1] === 0))) {
            throw new \Exception('This is unacceptable!. image must be of type : gif, jpeg, png or jpg and less than 2mb.');
        }
        $finfo = new \finfo(FILEINFO_MIME_TYPE);

        $file_type = $finfo->file(h($imagearray['tmp_name']), FILEINFO_MIME_TYPE);

        if (!(($file_type == "image/gif") || ($file_type == "image/png") || ($file_type == "image/jpeg") ||
                ($file_type == "image/pjpeg") || ($file_type == "image/x-png"))) {
            throw new \Exception('This is unacceptable!. image must be of type : gif, jpeg, png or jpg and less than 2mb .');
        }

        $file_name = $imagearray['name'];
        $ext = pathinfo($file_name, PATHINFO_EXTENSION);

        if (in_array($ext, $extension)) {
            $file_name = md5(uniqid($imagearray['name'], true)) . time();

            if (!file_exists($folder_upload . $file_name . '.' . $ext)) {
                $file_name = $file_name . '.' . $ext;
                move_uploaded_file($imagearray["tmp_name"], $folder_upload . $file_name);

                chmod($folder_upload . $file_name, 0644);
                return $message = $file_name;
            } else {
                $filename = basename($file_name, $ext);
                $newFileName = crypt($filename . time()) . "." . $ext;
                
                move_uploaded_file($imagearray["tmp_name"], $folder_upload . $newFileName);
                chmod($folder_upload . $newFileName, 0644);
              
                unlink($folder_upload . $file_name);
                return $message = $newFileName;
            }
        } else {
            return $message = 'Unable to upload image, please ensure you are uploading a jpg,png,gif or Jpeg file. ';
            // debug(json_encode( $error, JSON_PRETTY_PRINT)); exit;
        }


        return $message = "images upload successful";
    }

    //functionn for deleting a file
    public function deletefile($filename) {
        $folder_upload = "img/";
        if (file_exists($folder_upload . $filename)) {
            unlink($folder_upload . $filename);
            return;
        }
        return;
    }

    public function beforeFilter(Event $event) {
        $this->Auth->allow(['index']);
        if (!$this->Auth->user()) {
            $this->Auth->config('authError', false);
        }
    }
}
