<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Billings Controller
 *
 * @property \App\Model\Table\BillingsTable $Billings
 *
 * @method \App\Model\Entity\Billing[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BillingsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $billings = $this->paginate($this->Billings);

        $this->set(compact('billings'));
    }

    /**
     * View method
     *
     * @param string|null $id Billing id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $billing = $this->Billings->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('billing', $billing);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $billing = $this->Billings->newEntity();
        if ($this->request->is('post')) {
            $billing = $this->Billings->patchEntity($billing, $this->request->getData());
            if ($this->Billings->save($billing)) {
                $this->Flash->success(__('The billing has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The billing could not be saved. Please, try again.'));
        }
        $users = $this->Billings->Users->find('list', ['limit' => 200]);
        $this->set(compact('billing', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Billing id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $billing = $this->Billings->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $billing = $this->Billings->patchEntity($billing, $this->request->getData());
            if ($this->Billings->save($billing)) {
                $this->Flash->success(__('The billing has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The billing could not be saved. Please, try again.'));
        }
        $users = $this->Billings->Users->find('list', ['limit' => 200]);
        $this->set(compact('billing', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Billing id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $billing = $this->Billings->get($id);
        if ($this->Billings->delete($billing)) {
            $this->Flash->success(__('The billing has been deleted.'));
        } else {
            $this->Flash->error(__('The billing could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
