<?php

namespace App\Controllers;

class TaxCategoryController {

    public function hello() { 
        view('archive');
    }

}

// /books/book1
// /livres/book1

// books
// livres

// books/horror/
// livres/horreur

/*
$blade->if('env', function () {
    return false;
});
$blade->directive('asset_path', function ($expression) {
    dd($expression);
    return "<?php echo with({$expression})->format('F d, Y g:i a'); ?>";
});
$blade->directive('css', function ($expression) {
    dd($expression);
    return "<?php echo with({$expression})->format('F d, Y g:i a'); ?>";
});
$blade->directive('js', function ($expression) {
    dd($expression);
    return "<?php echo with({$expression})->format('F d, Y g:i a'); ?>";
});
*/