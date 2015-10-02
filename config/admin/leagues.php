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
                'type'  => 'picture',
                'name'  => 'picture',
                'label' => 'Picture',
                'path' =>'leagues',
                'thumb'=>'305w',
                'sizes'=>array(
                    array(
                        'type'=>'fixed_w',
                        'width'=>'594'
                    ),
                    array(
                        'type'=>'fixed_w',
                        'width'=>'305'
                    ),
                ),
            ),
            array(
                'type'  => 'textarea',
                'name'  => 'intro',
                'label' => 'Intro'
            ),
            array(
                'type'  => 'ckeditor',
                'name'  => 'description',
                'label' => 'Description'
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
            'delete',
            'copy'
        ),
        'order'=>array(
            array(
                "column"=>0,
                "direction"=>"desc"
            )
        )
    ),
);