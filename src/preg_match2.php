<?php

if(!function_exists('preg_match2')) {
    function preg_match2($pattern, $subject, $flags = 0, $offset = 0) {
        $matches = [];
        preg_match($pattern, $subject, $matches, $flags, $offset);

        return $matches;
    }
}
