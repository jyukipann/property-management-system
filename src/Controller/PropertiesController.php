<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\EventInterface;
use Cake\Http\Exception\NotFoundException;

class PropertiesController extends AppController
{
    public function index()
    {
        $this->set('properties', $this->Properties->find('all'));
    }

    public function add()
    {
        $property = $this->Properties->newEmptyEntity();
        $this->set('property', $property);
        if ($this->request->is('post')) {
            $property = $this->Properties->patchEntity($property, $this->request->getData());
            // $property->image_1 = file_get_contents($this->request->getData('image_1'));
            $property->image_1 = $this->request->getData('image_1')->getStream();
            if ($this->Properties->save($property)) {
                $this->Flash->success(__('The property has been saved.'));
                return $this->redirect(['action' => 'add']);
            }
            $this->Flash->error(__('Unable to add the property.'));
        }
        $this->set('property', $property);
    }

    public function edit()
    {
        $property = $this->Properties->newEmptyEntity();
        $this->set('property', $property);
        if ($this->request->is('post')) {
            $property = $this->Properties->find('all')
                ->where(['number' => $this->request->getData()['number']])
                ->first();
            if (is_null($property)) {
                $this->Flash->error(__('Unable to edit the property. There is no property with that number.'));
            } else {
                $property = $this->Properties->patchEntity($property, $this->request->getData());
                // $property->image_1 = file_get_contents($this->request->getData('image_1'));
                $property->image_1 = $this->request->getData('image_1')->getStream();
                if ($this->Properties->save($property)) {
                    $this->Flash->success(__('The property has been saved.'));
                    return $this->redirect(['action' => 'edit']);
                }
                $this->Flash->error(__('Unable to edit the property.'));
            }
        }
        $this->set('property', $property);
    }

    public function delete()
    {
        $property = $this->Properties->newEmptyEntity();
        $this->set('property', $property);
        if ($this->request->is('post')) {
            // $this->request->getData();
            $property = $this->Properties->find('all')->where(['number' => $this->request->getData()['number']])->first();
            if (is_null($property)) {
                $this->Flash->error(__('Unable to delete the property. There is no property with that number.'));
            } else {
                $result = $this->Properties->delete($property);
                return $this->redirect(['action' => 'delete']);
            }
        }
        $this->set('property', $property);
    }

    public function beforeFilter(EventInterface $event)
    {
        parent::beforeFilter($event);
        // ログインアクションを認証を必要としないように設定することで、
        // 無限リダイレクトループの問題を防ぐことができます
        $this->Authentication->addUnauthenticatedActions(['login']);
    }

    public function getImage($property_id)
    {
        $this->autoRender = false;
        $property = $this->Properties->get($property_id);
        if (empty($property)) {
            throw new NotFoundException();
        }
        return $this->response->withType("image/jpeg")->withStringBody(stream_get_contents($property->image_1));
    }
}