<?php

//setting a custom message for error validation

$this->form_validation->set_message('required', 'Este campo no puede estar vacio');


//insert near in the controller form validator

$this->form_validation->set_rules('skype_account', 'Skype Account', 'callback_skype_validation');


//insert as a member function in the controller class
public function skype_validation($account)
{
    if ($account == 'root' || $account == 'empresa')
    {
        $this->form_validation->set_message('skype_validation', 'El campo {field} no puede ser "root" o empresa');
        return false;
    }

    return true;
}