<?php
return array(
    'main'=>'username',
    'form'=>array(
        'fields' => array(
            array(
                'type'  => 'text',
                'name'  => 'username',
                'label' => 'Name'
            ),
            array(
                'type'  => 'text',
                'name'  => 'email',
                'label' => 'Email'
            ),
            array(
                'type'  => 'admin',
                'name'  => 'admin',
                'label' => 'Privileges'
            ),

        ),
        'controls' => array(
            'save',
        )
    ),
    "list"=>array(
        'fields' => array(
            'id' => array(
                'title' => '#'
            ),
            'username' => array(
                'title' => 'Username'
            ),
            'email' => array(
                'title' => 'Email'
            ),
        ),
        'options' => array(
            'edit',
            'delete'
        ),

    ),
);