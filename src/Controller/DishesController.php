<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Routing\Router;
use Cake\ORM\TableRegistry;

/**
 * Dishes Controller
 *
 * @property \App\Model\Table\DishesTable $Dishes
 *
 * @method \App\Model\Entity\Dish[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DishesController extends AppController
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
        //base url
        $baseUrl = Router::url('/', true);
        $banners_table = TableRegistry::get('Banners');
        $banner = $banners_table->get(1);
        $dishes = $this->paginate($this->Dishes);

        $this->set(compact('dishes','banner','baseUrl'));
        $this->viewBuilder()->setLayout('userlayout');
    }

    /**
     * View method
     *
     * @param string|null $id Dish id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $dish = $this->Dishes->get($id, [
            'contain' => ['Categories', 'Orders']
        ]);

        $this->set('dish', $dish);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $dish = $this->Dishes->newEntity();
        if ($this->request->is('post')) {
            $imagearray = $this->request->getData('image');
            if (!empty($imagearray['tmp_name'])) {
                $image_name = $this->addimage($imagearray);
            }

            $dish = $this->Dishes->patchEntity($dish, $this->request->getData());
            $dish->image = $image_name;
            if ($this->Dishes->save($dish)) {
                $this->Flash->success(__('The dish has been saved.'));

                return $this->redirect(['action' => 'listdishes']);
            }
            $this->Flash->error(__('The dish could not be saved. Please, try again.'));
        }
        $categories = $this->Dishes->Categories->find('list', ['limit' => 200]);
        $this->set(compact('dish', 'categories'));
        $this->viewBuilder()->setLayout('adminlayout');
    }

    /**
     * Edit method
     *
     * @param string|null $id Dish id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $dish = $this->Dishes->get($id, [
            'contain' => []
        ]);
        $image_name = $dish->image;

        if ($this->request->is(['patch', 'post', 'put'])) {
            $imagearray = $this->request->getData('image');
            if (!empty($imagearray['tmp_name'])) {
                $image_name = $this->addimage($imagearray);
            }

            $dish = $this->Dishes->patchEntity($dish, $this->request->getData());
            $dish->image = $image_name;
            //debug(json_encode( $dish, JSON_PRETTY_PRINT)); exit;
            if ($this->Dishes->save($dish)) {
                $this->Flash->success(__('The dish has been saved.'));

                return $this->redirect(['action' => 'listdishes']);
            }
            $this->Flash->error(__('The dish could not be saved. Please, try again.'));
        }
        $categories = $this->Dishes->Categories->find('list', ['limit' => 200]);
        $this->set(compact('dish', 'categories'));
        $this->viewBuilder()->setLayout('adminlayout');
    }

    /**
     * Delete method
     *
     * @param string|null $id Dish id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $dish = $this->Dishes->get($id);
        if ($this->Dishes->delete($dish)) {
            $this->Flash->success(__('The dish has been deleted.'));
        } else {
            $this->Flash->error(__('The dish could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function menulist(){
        $this->paginate = [
            'contain' => ['Categories']
        ];
        $dishes = $this->paginate($this->Dishes);

        $this->set(compact('dishes'));
        $this->viewBuilder()->setLayout('userlayout');
    }

    public function menudetails($id = null){
        $this->viewBuilder()->setLayout('userlayout');
    }

    public function listdishes(){
        $this->paginate = [
            'contain' => ['Categories']
        ];
        $dishes = $this->paginate($this->Dishes);

        $this->set(compact('dishes'));
        $this->viewBuilder()->setLayout('adminlayout');
    }

     public function changestatus($id, $status) {
        $banner = $this->Dishes->get($id);
        $banner->status = $status;
        
        if ($this->Dishes->save($banner)) {
            $this->Flash->success(__('Banner status changed'));
        } else {
            $this->Flash->error(__('Unable to change Banner status. Please, try again.'));
        }
        return $this->redirect(['controller' => 'Dishes', 'action' => 'listdishes']);
    }

    //function for adding a staff image
    public function addimage($imagearray) {
        $folder_upload = "images/product/";
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


    public function beforeFilter(Event $event) {
        $this->Auth->allow(['index','menulist','menudetails']);
        if (!$this->Auth->user()) {
            $this->Auth->setConfig('authError', false);
        }
    }
}
