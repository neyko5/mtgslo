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
                'type'  => 'date',
                'name'  => 'date',
                'label' => 'Date'
            ),
            array(
                'type'  => 'select',
                'name'  => 'id_judge',
                'label' => 'Judge',
                'singular'=>'judge',
                'options'=>array(
                    'model'=>'\MtgSlo\Judge',
                    'value'=>'id',
                    'description'=>'name'
                )

            ),
            array(
                'type'  => 'select',
                'name'  => 'id_league',
                'label' => 'League',
                'singular'=>'league',
                'options'=>array(
                    'model'=>'\MtgSlo\League',
                    'value'=>'id',
                    'description'=>'title'
                )

            ),
            array(
                'type'  => 'select',
                'name'  => 'id_format',
                'label' => 'Format',
                'singular'=>'format',
                'options'=>array(
                    'model'=>'\MtgSlo\Format',
                    'value'=>'id',
                    'description'=>'name'
                )

            ),
            array(
                'type'  => 'select',
                'name'  => 'id_location',
                'label' => 'Location',
                'singular'=>'location',
                'options'=>array(
                    'model'=>'\MtgSlo\Location',
                    'value'=>'id',
                    'description'=>'name'
                )
            ),
            array(
                'type'  => 'picture',
                'name'  => 'picture',
                'label' => 'Picture',
                'path' =>'tournaments',
                'thumb'=>'594w',
                'sizes'=>array(
                    array(
                        'type'=>'fixed_w',
                        'width'=>'594'
                    ),
                    array(
                        'type'=>'fixed_w',
                        'width'=>'594'
                    ),
                ),
            ),
            array(
                'type'  => 'text',
                'name'  => 'registration',
                'label' => 'Registration'
            ),
            array(
                'type'  => 'text',
                'name'  => 'start',
                'label' => 'Start'
            ),
            array(
                'type'  => 'text',
                'name'  => 'price',
                'label' => 'Price'
            ),
            array(
                'type'  => 'text',
                'name'  => 'prizes',
                'label' => 'Prizes'
            ),
            array(
                'type'  => 'text',
                'name'  => 'pwp',
                'label' => 'PWP'
            ),
            array(
                'type'  => 'ckeditor',
                'name'  => 'text',
                'label' => 'Text'
            ),
            array(
                'type'  => 'showtable',
                'name'  => 'rankings',
                'label' => 'Rankings',
                'module' => 'rankings',
                'main' => 'full_name',
                'columns' =>array(
                    array(
                        'name'=>'place',
                        'type'=>'text',
                        'title'=>'Place'
                    ),
                    array(
                        'name'=>'full_name',
                        'type'=>'text',
                        'title'=>"Name"
                    ),
                    array(
                        'name'=>'dci',
                        'type'=>'text',
                        'title'=>'DCI'
                    ),
                    array(
                        'name'=>'points',
                        'type'=>'text',
                        'title'=>'Points'
                    ),

                ),
                'options' => array(
                    'edit',
                    'delete'
                )
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
            'delete',
            'copy'
        ),
        'order'=>array(
            array(
                "column"=>0,
                "direction"=>"desc"
            )
        ),
        'functions'=>array(
            array(
                'label'=>"Upload results",
                'name'=>"processResults",
                'icon'=>'fa-sign-in',
                'upload'=>true,
                'post'=>true
            ),
        ),
    ),
);