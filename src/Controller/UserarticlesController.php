<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Userarticles Controller
 *
 * @property \App\Model\Table\UserarticlesTable $Userarticles
 */
class UserarticlesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Articles', 'Users']
        ];
        $this->set('userarticles', $this->paginate($this->Userarticles));
        $this->set('_serialize', ['userarticles']);
    }

    /**
     * View method
     *
     * @param string|null $id Userarticle id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $userarticle = $this->Userarticles->get($id, [
            'contain' => ['Articles', 'Users']
        ]);
        $this->set('userarticle', $userarticle);
        $this->set('_serialize', ['userarticle']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $userarticle = $this->Userarticles->newEntity();
        if ($this->request->is('post')) {
            $userarticle = $this->Userarticles->patchEntity($userarticle, $this->request->data);
            if ($this->Userarticles->save($userarticle)) {
                $this->Flash->success(__('The userarticle has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The userarticle could not be saved. Please, try again.'));
            }
        }
        $articles = $this->Userarticles->Articles->find('list', ['limit' => 200]);
        $users = $this->Userarticles->Users->find('list', ['limit' => 200]);
        $this->set(compact('userarticle', 'articles', 'users'));
        $this->set('_serialize', ['userarticle']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Userarticle id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $userarticle = $this->Userarticles->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $userarticle = $this->Userarticles->patchEntity($userarticle, $this->request->data);
            if ($this->Userarticles->save($userarticle)) {
                $this->Flash->success(__('The userarticle has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The userarticle could not be saved. Please, try again.'));
            }
        }
        $articles = $this->Userarticles->Articles->find('list', ['limit' => 200]);
        $users = $this->Userarticles->Users->find('list', ['limit' => 200]);
        $this->set(compact('userarticle', 'articles', 'users'));
        $this->set('_serialize', ['userarticle']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Userarticle id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $userarticle = $this->Userarticles->get($id);
        if ($this->Userarticles->delete($userarticle)) {
            $this->Flash->success(__('The userarticle has been deleted.'));
        } else {
            $this->Flash->error(__('The userarticle could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
