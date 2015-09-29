<?php

    function convertToLink($link){
        $replace = array(
            'Š' => 'S',
            'š' => 's',
            'È' => 'C',
            'è' => 'c',
            '' => 'Z',
            '' => 'z'
        );

        $link = str_replace(array_keys($replace), $replace, $link);

        return strtolower(preg_replace("/[^a-z0-9-]{1}/iu", '-', $link));
    }