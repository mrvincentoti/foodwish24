<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Openingtimes Controller
 *
 * @property \App\Model\Table\OpeningtimesTable $Openingtimes
 *
 * @method \App\Model\Entity\Openingtime[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OpeningtimesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $openingtimes = $this->paginate($this->Openingtimes);

        $this->set(compact('openingtimes'));
    }

    /**
     * View method
     *
     * @param string|null $id Openingtime id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $openingtime = $this->Openingtimes->get($id, [
            'contain' => []
        ]);

        $this->set('openingtime', $openingtime);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $openingtime = $this->Openingtimes->newEntity();
        if ($this->request->is('post')) {
            $openingtime = $this->Openingtimes->patchEntity($openingtime, $this->request->getData());
            if ($this->Openingtimes->save($openingtime)) {
                $this->Flash->success(__('The openingtime has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The openingtime could not be saved. Please, try again.'));
        }
        $this->set(compact('openingtime'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Openingtime id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $openingtime = $this->Openingtimes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $openingtime = $this->Openingtimes->patchEntity($openingtime, $this->request->getData());
            if ($this->Openingtimes->save($openingtime)) {
                $this->Flash->success(__('The openingtime has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The openingtime could not be saved. Please, try again.'));
        }
        $this->set(compact('openingtime'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Openingtime id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $openingtime = $this->Openingtimes->get($id);
        if ($this->Openingtimes->delete($openingtime)) {
            $this->Flash->success(__('The openingtime has been deleted.'));
        } else {
            $this->Flash->error(__('The openingtime could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
