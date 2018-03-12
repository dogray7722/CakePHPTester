<?php
App::uses('AppController', 'Controller');

class UserAccountsController extends AppController {
    public $uses = array('Sale');
    public function index() {
        $params = array('conditions' => array('Sale.user_id' => 1));
        $salesForUser = $this->Sale->find('all', $params);
        $this->set('sales', $salesForUser);
    }
}