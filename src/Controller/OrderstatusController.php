<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Orderstatus Controller
 *
 * @property \App\Model\Table\OrderstatusTable $Orderstatus
 */
class OrderstatusController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('orderstatus', $this->paginate($this->Orderstatus));
        $this->set('_serialize', ['orderstatus']);
    }

    /**
     * View method
     *
     * @param string|null $id Orderstatus id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $orderstatus = $this->Orderstatus->get($id, [
            'contain' => []
        ]);
        $this->set('orderstatus', $orderstatus);
        $this->set('_serialize', ['orderstatus']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $orderstatus = $this->Orderstatus->newEntity();
        if ($this->request->is('post')) {
            $orderstatus = $this->Orderstatus->patchEntity($orderstatus, $this->request->data);
            if ($this->Orderstatus->save($orderstatus)) {
                $this->Flash->success(__('The orderstatus has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The orderstatus could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('orderstatus'));
        $this->set('_serialize', ['orderstatus']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Orderstatus id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $orderstatus = $this->Orderstatus->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $orderstatus = $this->Orderstatus->patchEntity($orderstatus, $this->request->data);
            if ($this->Orderstatus->save($orderstatus)) {
                $this->Flash->success(__('The orderstatus has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The orderstatus could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('orderstatus'));
        $this->set('_serialize', ['orderstatus']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Orderstatus id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $orderstatus = $this->Orderstatus->get($id);
        if ($this->Orderstatus->delete($orderstatus)) {
            $this->Flash->success(__('The orderstatus has been deleted.'));
        } else {
            $this->Flash->error(__('The orderstatus could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
