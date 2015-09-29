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
                'name'  => 'address',
                'label' => 'Address'
            ),
            array(
                'type'  => 'text',
                'name'  => 'city',
                'label' => 'City'
            ),
            array(
                'type'  => 'picture',
                'name'  => 'picture',
                'label' => 'Picture',
                'path' =>'locations',
                'thumb'=>'640w',
                'sizes'=>array(
                    array(
                        'type'=>'fixed_w',
                        'width'=>'640'
                    ),
                ),
            ),
            array(
                'type'  => 'text',
                'name'  => 'link',
                'label' => 'Link'
            ),
            array(
                'type'  => 'switch',
                'name'  => 'store',
                'label' => 'Store?'
            ),
            array(
                'type'  => 'ckeditor',
                'name'  => 'description',
                'label' => 'Description'
            ),
            array(
                'type'  => 'text',
                'name'  => 'coorX',
                'label' => 'Coordinate X'
            ),
            array(
                'type'  => 'text',
                'name'  => 'coorY',
                'label' => 'Coordinate Y'
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