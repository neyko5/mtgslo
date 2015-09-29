<?php
    return array(
        'form'=>array(
            'fields' => array(
                array(
                    'type'  => 'text',
                    'name'  => 'name',
                    'label' => 'Name'
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