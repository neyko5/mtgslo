<?php
return array(
    'form'=>array(
        'fields' => array(
            array(
                'type'  => 'text',
                'name'  => 'name',
                'label' => 'Name'
            ),
            array(
                'type'  => 'text',
                'name'  => 'level',
                'label' => 'Level'
            ),
            array(
                'type'  => 'text',
                'name'  => 'email',
                'label' => 'Email'
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
            'name' => array(
                'title' => 'Name'
            ),
            'level' => array(
                'title' => 'Level'
            ),
        ),
        'options' => array(
            'edit',
            'delete'
        ),
        'order'=>array(
            array(
                "column"=>0,
                "direction"=>"desc"
            )
        )
    ),
);