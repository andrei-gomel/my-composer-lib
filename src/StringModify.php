<?php

namespace Olehandrei\MyComposerLib;

class StringModify
{
    public function convertString($string)
    {
        $string = mb_convert_case(mb_strtolower($string),MB_CASE_TITLE, "UTF-8");

        return $string;
    }
}