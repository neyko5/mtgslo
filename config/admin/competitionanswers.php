<?php
return array(
    'form'=>array(
        'fields' => array(

            array(
                'type'  => 'text',
                'name'  => 'full_name',
                'label' => 'Full name'
            ),
            array(
                'type'  => 'select',
                'name'  => 'id_competition',
                'label' => 'Competition',
                'singular'=>'competition',
                'options'=>array(
                    'model'=>'\MtgSlo\Competition',
                    'value'=>'id',
                    'description'=>'title'
                )
            ),
            array(
                'type'  => 'text',
                'name'  => 'city',
                'label' => 'City'
            ),
            array(
                'type'  => 'date',
                'name'  => 'date',
                'label' => 'Date'
            ),
            array(
                'type'  => 'select',
                'name'  => 'answer',
                'label' => 'Asnwer',
                'singular'=>'answer',
                'options' => array(
                    'predefined'=>array(
                        '1'=>"1",
                        '2'=>"2",
                        '3'=>"3",
                        '4'=>"4",
                        '5'=>"5"
                    )
                )
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
            'full_name' => array(
                'title' => 'Name'
            ),
            'competition' => array(
                'title' => 'Competition'
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