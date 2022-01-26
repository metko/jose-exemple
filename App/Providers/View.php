<?php

namespace App\Providers;

class View {

    public function register ($view) {
        $view->directive('dev', function () {
            return 'bonjur';
        });
        $view->if('happy', function () {
            return false;
        });
    }

}