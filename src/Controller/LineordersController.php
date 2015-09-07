<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Lineorders Controller
 *
 * @property \App\Model\Table\LineordersTable $Lineorders
 */
class LineordersController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Orders', 'Articles']
        ];
        $this->set('lineorders', $this->paginate($this->Lineorders));
        $this->set('_serialize', ['lineorders']);
    }

    /**
     * View method
     *
     * @param string|null $id Lineorder id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $lineorder = $this->Lineorders->get($id, [
            'contain' => ['Orders', 'Articles']
        ]);
        $this->set('lineorder', $lineorder);
        $this->set('_serialize', ['lineorder']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $lineorder = $this->Lineorders->newEntity();
        if ($this->request->is('post')) {
            $lineorder = $this->Lineorders->patchEntity($lineorder, $this->request->data);
            if ($this->Lineorders->save($lineorder)) {
                $this->Flash->success(__('The lineorder has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The lineorder could not be saved. Please, try again.'));
            }
        }
        $orders = $this->Lineorders->Orders->find('list', ['limit' => 200]);
        $articles = $this->Lineorders->Articles->find('list', ['limit' => 200]);
        $this->set(compact('lineorder', 'orders', 'articles'));
        $this->set('_serialize', ['lineorder']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Lineorder id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $lineorder = $this->Lineorders->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $lineorder = $this->Lineorders->patchEntity($lineorder, $this->request->data);
            if ($this->Lineorders->save($lineorder)) {
                $this->Flash->success(__('The lineorder has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The lineorder could not be saved. Please, try again.'));
            }
        }
        $orders = $this->Lineorders->Orders->find('list', ['limit' => 200]);
        $articles = $this->Lineorders->Articles->find('list', ['limit' => 200]);
        $this->set(compact('lineorder', 'orders', 'articles'));
        $this->set('_serialize', ['lineorder']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Lineorder id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $lineorder = $this->Lineorders->get($id);
        if ($this->Lineorders->delete($lineorder)) {
            $this->Flash->success(__('The lineorder has been deleted.'));
        } else {
            $this->Flash->error(__('The lineorder could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
