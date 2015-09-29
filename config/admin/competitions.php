<?php
return array(
    'form'=>array(
        'fields' => array(
            array(
                'type'  => 'showtable',
                'name'  => 'competitors',
                'label' => 'Competitors',
                'module' => 'competitionanswers',
                'main' => 'name',
                'columns' =>array(
                    array(
                        'name'=>'id',
                        'type'=>'text',
                        'title'=>"ID"
                    ),
                    array(
                        'name'=>'full_name',
                        'type'=>'text',
                        'title'=>"Name"
                    ),
                    array(
                        'name'=>'city',
                        'type'=>'text',
                        'title'=>'City'
                    ),
                    array(
                        'name'=>'email',
                        'type'=>'text',
                        'title'=>'Email'
                    ),
                    array(
                        'name'=>'answer',
                        'type'=>'text',
                        'title'=>'Answer'
                    ),
                ),
                'options' => array(
                    'edit',
                    'delete'
                )
            ),
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
                'path' =>'competitions',
                'thumb'=>'594w',
                'sizes'=>array(
                    array(
                        'type'=>'fixed_w',
                        'width'=>'594'
                    ),
                ),
            ),
            array(
                'type'  => 'ckeditor',
                'name'  => 'text',
                'label' => 'Text'
            ),
            array(
                'type'  => 'ckeditor',
                'name'  => 'prizes',
                'label' => 'Prizes'
            ),
            array(
                'type'  => 'ckeditor',
                'name'  => 'after',
                'label' => 'After text'
            ),
            array(
                'type'  => 'textarea',
                'name'  => 'question',
                'label' => 'Question'
            ),
            array(
                'type'  => 'text',
                'name'  => 'answer1',
                'label' => 'Answer 1'
            ),
            array(
                'type'  => 'text',
                'name'  => 'answer2',
                'label' => 'Answer 2'
            ),
            array(
                'type'  => 'text',
                'name'  => 'answer3',
                'label' => 'Answer 3'
            ),
            array(
                'type'  => 'text',
                'name'  => 'answer4',
                'label' => 'Answer 4'
            ),
            array(
                'type'  => 'text',
                'name'  => 'answer5',
                'label' => 'Answer 5'
            ),
            array(
                'type'  => 'select',
                'name'  => 'correct',
                'label' => 'Correct asnwer',
                'singular'=>'correct answer',
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