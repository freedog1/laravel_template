<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //ViewComposerディレクトリにあるビューコンポーザーをbladeと紐付け
        // Hoge/TempHogeComposerは「hoge/temp_hoge.blade.php」と紐付けられる
        //https://qiita.com/harunbu/items/8743f3093705c8051c44

        $viewComposersPath = __DIR__.'/../Http/ViewComposers';
        $allFiles = \File::allFiles($viewComposersPath);
        foreach($allFiles as $file){
            $pathInfo = collect(explode(DIRECTORY_SEPARATOR, str_replace('Composer.php', '', $file->getRelativePathname())));
            $viewName = $pathInfo->map(function($path){
                return Str::snake($path);
            })->implode('.');
            $className = '\\App\\Http\\ViewComposers\\' . $pathInfo->map(function($path){
                return Str::studly($path);
            })->implode('\\') . 'Composer';

            //composeメソッドが実装されていて、自動結合の対象外に指定されていなければ結合
            if(method_exists($className, 'compose') &&
                (! method_exists($className, 'isExcludedAutoCompose') || ! $className::isExcludedAutoCompose()))
            {
                View::composer($viewName, $className);
            }

        }
        

        //自動で紐付けられないビューコンポーザーはここで登録

    }
}
