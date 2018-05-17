<?php

// Load library

$this->load->library('parser');


// Into a Action member function Controller

$data = array(
    'titulo_web' => 'Tutoriales',
    'titulo_pagina' => 'PHP 7.2',
    'contexto' => array(
        array('titulo' => 'Introduccion', 'texto' => '<lorem ipsum>'),
        array('titulo' => 'Primer ejemplo', 'texto' => '<lorem ipsum>')
        //...
    )
);

$this->parser->parse('template_parsed', $data);