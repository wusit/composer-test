<?php

namespace Wusit\ComposerTest;

class ComposerTest
{
    public static function debug($val)
    {
        echo "更新之后";
        var_dump($val);
        die;
    }
}