<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
        $this->viewBuilder()->setLayout('adminlayout');
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Billings', 'Orders', 'Transactions']
        ]);

        $this->set('user', $user);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    

    public function login(){
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            //debug(json_encode($this->request->getData(), JSON_PRETTY_PRINT)); exit;
            if ($user && $user['status'] != 0) {
                //debug(json_encode($this->request->getData(), JSON_PRETTY_PRINT)); exit;
                $this->Auth->setUser($user);
                $this->request->getSession()->write('usersinfo', $user);
              
                if($user['roleid'] == 1){
                    
                    return $this->redirect(['controller' => 'Users', 'action' => 'admindashboard']);
                }
                //debug(json_encode($user, JSON_PRETTY_PRINT)); exit;
            }else{
                $this->Flash->error('Bad Credentials or account disabled. Please check your credentials or contact admin for assistance');
            }
        }
        $this->viewBuilder()->setLayout('regloglayout');
    }

    //the logout function
    public function logout($user_id) {
        $this->request->getSession()->destroy();
        return $this->redirect(['controller' => 'Users', 'action' => 'login']);
    }

    public function admindashboard(){
        $this->viewBuilder()->setLayout('adminlayout');
    }

    public function beforeFilter(Event $event) {
        $this->Auth->allow(['login','add']);
        if (!$this->Auth->user()) {
            $this->Auth->config('authError', false);
        }
    }
}
