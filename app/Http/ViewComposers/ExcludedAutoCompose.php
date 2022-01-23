<?php

namespace App\Http\ViewComposers;

//自動結合から除外したいviewComposerはここで登録
trait ExcludedAutoCompose
{
    public static function isExcludedAutoCompose()
    {
        return true;
    }
}