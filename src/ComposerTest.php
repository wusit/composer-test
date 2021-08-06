<?php

namespace Wusit\ComposerTest;

class ComposerTest
{
    public static function debug($val)
    {
        echo "再次更新之后";
        var_dump($val);
        die;
    }
}