<?php

    function convertToLink($link){
        $replace = array(
            '�' => 'S',
            '�' => 's',
            '�' => 'C',
            '�' => 'c',
            '�' => 'Z',
            '�' => 'z'
        );

        $link = str_replace(array_keys($replace), $replace, $link);

        return strtolower(preg_replace("/[^a-z0-9-]{1}/iu", '-', $link));
    }