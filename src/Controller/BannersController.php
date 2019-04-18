<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Banners Controller
 *
 * @property \App\Model\Table\BannersTable $Banners
 *
 * @method \App\Model\Entity\Banner[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BannersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $banners = $this->paginate($this->Banners);
        //debug(json_encode($banners, JSON_PRETTY_PRINT)); exit;
        $this->set(compact('banners'));
        $this->viewBuilder()->setLayout('adminlayout');
    }

    /**
     * View method
     *
     * @param string|null $id Banner id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $banner = $this->Banners->get($id, [
            'contain' => []
        ]);

        $this->set('banner', $banner);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $banner = $this->Banners->newEntity();
        if ($this->request->is('post')) {
            $banner = $this->Banners->patchEntity($banner, $this->request->getData());
            if ($this->Banners->save($banner)) {
                $this->Flash->success(__('The banner has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The banner could not be saved. Please, try again.'));
        }
        $this->set(compact('banner'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Banner id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $banner = $this->Banners->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $imagearray = $this->request->getData('image');
              if (!empty($imagearray['tmp_name'])) {
                  $this->addimage($imagearray,"1.jpg");
            }

            $banner = $this->Banners->patchEntity($banner, $this->request->getData());
            $banner->image = "1.jpg";
            if ($this->Banners->save($banner)) {
                $this->Flash->success(__('The banner has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The banner could not be saved. Please, try again.'));
        }
        $this->set(compact('banner'));
        $this->viewBuilder()->setLayout('adminlayout');
    }

    /**
     * Delete method
     *
     * @param string|null $id Banner id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $banner = $this->Banners->get($id);
        if ($this->Banners->delete($banner)) {
            $this->Flash->success(__('The banner has been deleted.'));
        } else {
            $this->Flash->error(__('The banner could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function changestatus($id, $status) {
        $banner = $this->Banners->get($id);
        $banner->status = $status;
        
        if ($this->Banners->save($banner)) {
            $this->Flash->success(__('Banner status changed'));
        } else {
            $this->Flash->error(__('Unable to change Banner status. Please, try again.'));
        }
        return $this->redirect(['controller' => 'Banners', 'action' => 'index']);
    }

    //function for adding a staff image
    public function addimage($imagearray, $fn) {
        //debug(json_encode($imagearray, JSON_PRETTY_PRINT)); exit;
        $folder_upload = "images/bg/";
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
            //$file_name = md5(uniqid($imagearray['name'], true)) . time();
            $file_name = $fn;

            if (!file_exists($folder_upload . $file_name)) {
               // $file_name = $file_name . '.' . $ext;
                move_uploaded_file($imagearray["tmp_name"], $folder_upload . $file_name);
                chmod($folder_upload . $file_name, 0644);
                return $message = $file_name;

            } else {
                unlink($folder_upload . $file_name);
                move_uploaded_file($imagearray["tmp_name"], $folder_upload . $file_name);
                chmod($folder_upload . $file_name, 0644);
            
                return $message = $file_name;
            }
        } else {
            return $message = 'Unable to upload image, please ensure you are uploading a jpg,png,gif or Jpeg file. ';
            // debug(json_encode( $error, JSON_PRETTY_PRINT)); exit;
        }


        return $message = "images upload successful";
    }

}
