<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Pizzainfo Controller
 *
 * @property \App\Model\Table\PizzainfoTable $Pizzainfo
 */
class PizzainfoController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('pizzainfo', $this->paginate($this->Pizzainfo));
        $this->set('_serialize', ['pizzainfo']);
    }

    /**
     * View method
     *
     * @param string|null $id Pizzainfo id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pizzainfo = $this->Pizzainfo->get($id, [
            'contain' => []
        ]);
        $this->set('pizzainfo', $pizzainfo);
        $this->set('_serialize', ['pizzainfo']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pizzainfo = $this->Pizzainfo->newEntity();
        if ($this->request->is('post')) {
            $pizzainfo = $this->Pizzainfo->patchEntity($pizzainfo, $this->request->data);
            if ($this->Pizzainfo->save($pizzainfo)) {
                $this->Flash->success(__('The pizzainfo has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The pizzainfo could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('pizzainfo'));
        $this->set('_serialize', ['pizzainfo']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Pizzainfo id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pizzainfo = $this->Pizzainfo->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pizzainfo = $this->Pizzainfo->patchEntity($pizzainfo, $this->request->data);
            if ($this->Pizzainfo->save($pizzainfo)) {
                $this->Flash->success(__('The pizzainfo has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The pizzainfo could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('pizzainfo'));
        $this->set('_serialize', ['pizzainfo']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Pizzainfo id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pizzainfo = $this->Pizzainfo->get($id);
        if ($this->Pizzainfo->delete($pizzainfo)) {
            $this->Flash->success(__('The pizzainfo has been deleted.'));
        } else {
            $this->Flash->error(__('The pizzainfo could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
