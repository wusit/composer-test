<?php

namespace Wusit\ComposerTest;

use Sco\Bankcard\Bankcard;

class ComposerTest
{
    public static function debug($val)
    {
        echo "update again...".PHP_EOL;
        var_dump($val);
        die;
    }

    public static function getBankInfo($bankNo)
    {
        $bank = new Bankcard();
        try {
            $info = $bank->info($bankNo);
        } catch (\Exception $exception) {
            return false;
        }
        return $info->getBankInfo();
    }
}