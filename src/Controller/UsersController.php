<?php
namespace App\Controller;

use App\Controller\AppController;

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
            'contain' => []
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
                $this->Flash->success(__('Usuario AGREGADO correctamente :)'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('A pasado un error vuelva a intentarlo'));
        }
        $this->set(compact('user'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('Usuario MODIFICADO correctamente :)'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('A pasado un error vuelva a intentarlo'));
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
            $this->Flash->success(__('Usuario ELIMINADO'));
        } else {
            $this->Flash->error(__('No se aliminado el USUARIO'));
        }

        return $this->redirect(['action' => 'index']);
    }
    public function login()
    {
        if($this->request->is('post'))
        {
           $user = $this->Auth->identify();
           if($user){
               $this->Auth->setUser($user);
               return $this->redirect(['action' => 'index']);
           }
           $this->Flash->error('Credenciales no validar');

        }
    }
    public function logout()
    {
        $this->Flash->Success('Session finalizada');
        return $this->redirect($this->Auth->logout());
    }

    public function search()
    {
        $this->request->allowMethod('ajax');
        $keyword = $this->request->query('keyword');
        $query = $this->Users->find('all',[
            'conditions'=>['usuario LIKE' =>'%'.$keyword.'%'],
            'order'=>['users.id'=>'DESC'],
            'limit'=>10
        ]);
        $this->set('users', $this->paginate($query));
        $this->set('_serialize', ['user']);
    }
}
