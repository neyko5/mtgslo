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
                'type'  => 'text',
                'name'  => 'dci',
                'label' => 'DCI'
            ),
            array(
                'type'  => 'select',
                'name'  => 'id_tournament',
                'label' => 'Tournament',
                'singular'=>'tournament',
                'options'=>array(
                    'model'=>'\MtgSlo\Tournament',
                    'value'=>'id',
                    'description'=>'name'
                )
            ),
            array(
                'type'  => 'text',
                'name'  => 'place',
                'label' => 'Place'
            ),
            array(
                'type'  => 'text',
                'name'  => 'points',
                'label' => 'Points'
            ),
            array(
                'type'  => 'text',
                'name'  => 'leaguepoints',
                'label' => 'League points'
            ),
            array(
                'type'  => 'textarea',
                'name'  => 'decklist',
                'label' => 'Decklist'
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
            'tournament' => array(
                'title' => 'Tournament'
            ),
            'place' => array(
                'title' => 'Place'
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