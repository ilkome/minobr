<?php

App::uses('SimplePasswordHasher', 'Controller/Component/Auth');

class User extends AppModel {
    
    public $actsAs = array('Containable');
    
    public $displayField = 'name';
    
    public $validate = array(
        'name' => 'notEmpty',
        'login' => array(
            'unique' => array(
                'rule' => 'isUnique',
                'message' => 'Пользователь с таким логином уже зарегистрирован'
            ),
            'notEmpty' => array(
                'rule' => 'notEmpty',
                'message' => 'Введите логин'
            ),
            'alphaNumeric' => array(
                'rule' => 'alphaNumeric',
                'message' => 'Логин может состоять только из символов латинского алфавита и цифр'
            )
        ),
        'password' => array(
            'alphaNumeric' => array(
                'rule' => 'alphaNumeric',
                'message' => 'Пароль может состоять только из символов латинского алфавита и цифр'
            ),
            'notEmpty' => array(
                'rule' => 'notEmpty',
                'message' => 'Введено пустое поле пароля'
            )
        )
    );
    
    public function beforeSave() {
        parent::beforeSave();
        if (!empty($this->data['User']['password'])) {
            $passwordHasher = new SimplePasswordHasher(array('hashType' => 'sha256'));
            $this->data['User']['password'] = $passwordHasher->hash(
                $this->data['User']['password']
            );
        }
        return true;
    }
}