<?php

class UsersController extends AppController {
    
    public $uses = array('User');
    
    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('login', 'add');
    }
    
    public function login() {
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Auth->login()) {
                $this->redirect($this->Auth->redirectUrl());
            } else {
                $this->Session->setFlash('Комбинация логина и пароля неверна');
                $this->set("error", "Комбинация логина и пароля неверна");
            }
            $this->request->data['User']['password'] = '';
        }
        
        $this->set('title_for_layout', "Форма входа");
    }
    
    public function logout() {
        $this->redirect($this->Auth->logout());
    }
    
    public function add() {
        if ($this->request->is('post') || $this->request->is('put')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash('Новый пользователь зарегистрирован');
                $this->redirect('/users/login');
            } else {
                $this->Session->setFlash('Ошибка сохранения');
            }
        }
    }
}

