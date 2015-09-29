<?php
return array(
    'form'=>array(
        'fields' => array(
            array(
                'type'  => 'text',
                'name'  => 'title',
                'label' => 'Title'
            ),
            array(
                'type'  => 'date',
                'name'  => 'date',
                'label' => 'Date'
            ),
            array(
                'type'  => 'picture',
                'name'  => 'picture',
                'label' => 'Picture',
                'path' =>'news',
                'thumb'=>'305w',
                'sizes'=>array(
                    array(
                        'type'=>'fixed_w',
                        'width'=>'305'
                    ),
                ),
            ),
            array(
                'type'  => 'ckeditor',
                'name'  => 'text',
                'label' => 'Text'
            ),
            array(
                'type'  => 'text',
                'name'  => 'link',
                'label' => 'Link'
            ),
            array(
                'type'  => 'text',
                'name'  => 'linktext',
                'label' => 'Link text'
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
            'title' => array(
                'title' => 'Title'
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