<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Gallerybanners Controller
 *
 * @property \App\Model\Table\GallerybannersTable $Gallerybanners
 *
 * @method \App\Model\Entity\Gallerybanner[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GallerybannersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $gallerybanners = $this->paginate($this->Gallerybanners);

        $this->set(compact('gallerybanners'));
        $this->viewBuilder()->setLayout('adminlayout');
    }

    /**
     * View method
     *
     * @param string|null $id Gallerybanner id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $gallerybanner = $this->Gallerybanners->get($id, [
            'contain' => []
        ]);

        $this->set('gallerybanner', $gallerybanner);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $gallerybanner = $this->Gallerybanners->newEntity();
        if ($this->request->is('post')) {
            $gallerybanner = $this->Gallerybanners->patchEntity($gallerybanner, $this->request->getData());
            if ($this->Gallerybanners->save($gallerybanner)) {
                $this->Flash->success(__('The gallerybanner has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The gallerybanner could not be saved. Please, try again.'));
        }
        $this->set(compact('gallerybanner'));
        $this->viewBuilder()->setLayout('adminlayout');
    }

    /**
     * Edit method
     *
     * @param string|null $id Gallerybanner id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $gallerybanner = $this->Gallerybanners->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bannerController = new BannersController;
            $imagearray = $this->request->getData('image');
              if (!empty($imagearray['tmp_name'])) {
                  $bannerController->addimage($imagearray,"18.jpg");
            }
            $gallerybanner = $this->Gallerybanners->patchEntity($gallerybanner, $this->request->getData());
            $gallerybanner->image = "18.jpg";
            if ($this->Gallerybanners->save($gallerybanner)) {
                $this->Flash->success(__('The gallerybanner has been saved.'));

                return $this->redirect(['action' => 'edit',1]);
            }
            $this->Flash->error(__('The gallerybanner could not be saved. Please, try again.'));
        }
        $this->set(compact('gallerybanner'));
        $this->viewBuilder()->setLayout('adminlayout');
    }

    /**
     * Delete method
     *
     * @param string|null $id Gallerybanner id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $gallerybanner = $this->Gallerybanners->get($id);
        if ($this->Gallerybanners->delete($gallerybanner)) {
            $this->Flash->success(__('The gallerybanner has been deleted.'));
        } else {
            $this->Flash->error(__('The gallerybanner could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
