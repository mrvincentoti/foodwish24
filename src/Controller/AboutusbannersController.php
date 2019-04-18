<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Aboutusbanners Controller
 *
 * @property \App\Model\Table\AboutusbannersTable $Aboutusbanners
 *
 * @method \App\Model\Entity\Aboutusbanner[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AboutusbannersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $aboutusbanners = $this->paginate($this->Aboutusbanners);

        $this->set(compact('aboutusbanners'));
        $this->viewBuilder()->setLayout('adminlayout');
    }

    /**
     * View method
     *
     * @param string|null $id Aboutusbanner id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $aboutusbanner = $this->Aboutusbanners->get($id, [
            'contain' => []
        ]);

        $this->set('aboutusbanner', $aboutusbanner);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $aboutusbanner = $this->Aboutusbanners->newEntity();
        if ($this->request->is('post')) {
            $aboutusbanner = $this->Aboutusbanners->patchEntity($aboutusbanner, $this->request->getData());
            if ($this->Aboutusbanners->save($aboutusbanner)) {
                $this->Flash->success(__('The aboutusbanner has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The aboutusbanner could not be saved. Please, try again.'));
        }
        $this->set(compact('aboutusbanner'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Aboutusbanner id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $aboutusbanner = $this->Aboutusbanners->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $bannerscontroller = new BannersController();
            $imagearray = $this->request->getData('image');
            if (!empty($imagearray['tmp_name'])) {
                  $bannerscontroller->addimage($imagearray,"20.jpg");
            }
            $aboutusbanner = $this->Aboutusbanners->patchEntity($aboutusbanner, $this->request->getData());
            $aboutusbanner->image = "20.jpg";
            if ($this->Aboutusbanners->save($aboutusbanner)) {
                $this->Flash->success(__('The aboutusbanner has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The aboutusbanner could not be saved. Please, try again.'));
        }
        $this->set(compact('aboutusbanner'));
        $this->viewBuilder()->setLayout('adminlayout');
    }

    /**
     * Delete method
     *
     * @param string|null $id Aboutusbanner id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $aboutusbanner = $this->Aboutusbanners->get($id);
        if ($this->Aboutusbanners->delete($aboutusbanner)) {
            $this->Flash->success(__('The aboutusbanner has been deleted.'));
        } else {
            $this->Flash->error(__('The aboutusbanner could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function changestatus($id, $status) {
        $aboutusbanner = $this->Aboutusbanners->get($id);
        $aboutusbanner->status = $status;
        
        if ($this->Aboutusbanners->save($aboutusbanner)) {
            $this->Flash->success(__('Banner status changed'));
        } else {
            $this->Flash->error(__('Unable to change Banner status. Please, try again.'));
        }
        return $this->redirect(['controller' => 'Aboutusbanners', 'action' => 'index']);
    }
}
