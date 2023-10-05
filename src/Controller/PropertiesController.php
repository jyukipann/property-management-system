<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\EventInterface;

class PropertiesController extends AppController
{
    public function index()
    {
        $this->set('properties', $this->Properties->find('all'));
    }

    public function add()
    {
        $property = $this->Properties->newEmptyEntity();
        if ($this->request->is('post')) {
            $property = $this->Properties->patchEntity($property, $this->request->getData());
            if ($this->Properties->save($property)) {
                $this->Flash->success(__('The property has been saved.'));
                return $this->redirect(['action' => 'add']);
            }
            $this->Flash->error(__('Unable to add the property.'));
        }
        $this->set('property', $property);
    }

    public function delete(){
        $property = $this->Properties->newEmptyEntity();
        if ($this->request->is('post')) {
            // $this->request->getData();
            $property =  $this->Properties->find('all')->where(['number' => $this->request->getData()['number']])->first();
            if( is_null($property)){
                $this->Flash->error(__('Unable to delete the property. There is no property with that number.'));
            }else{
                $result = $this->Articles->delete($property);
                return $this->redirect(['action' => 'delete']);
            }
        }
        $this->set('property', $property);
    }

    public function edit(){

    }

    public function beforeFilter(EventInterface $event)
    {
        parent::beforeFilter($event);
        // ログインアクションを認証を必要としないように設定することで、
        // 無限リダイレクトループの問題を防ぐことができます
        $this->Authentication->addUnauthenticatedActions(['login']);
    }
}