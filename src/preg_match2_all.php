<?php

if(!function_exists('preg_match2_all')) {
    function preg_match2_all($pattern, $subject, $flags = 0, $offset = 0) {
        $matches = [];
        preg_match_all($pattern, $subject, $matches, $flags = 0, $offset = 0);

        return $matches;
    }
}
