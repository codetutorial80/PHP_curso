<?php

// Set this file into application/config/

$config = array(

    'register' => array(
        array(
            'field' => 'name',
            'label' => 'Name',
            'rules' => 'required'
        ),
        array(
            'field' => 'surname',
            'label' => 'Surname',
            'rules' => 'required'
        ),
        array(
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'required'
        ),
        array(
            'field' => 'password',
            'label' => 'Password',
            'rules' => 'required'
        ),
        array(
            'field' => 'cpassword',
            'label' => 'Password Confirmation',
            'rules' => 'required'
        )
    ),
    'login' => array(
        array(
            'field' => 'email',
            'label' => 'Email',
            'rules' => 'required|valid_email'
        ),
        array(
            'field' => 'password',
            'label' => 'Password',
            'rules' => 'required'
        )
    )
);


// Must call into:
//
// if ($this->form_validation->run('register') === FALSE)
