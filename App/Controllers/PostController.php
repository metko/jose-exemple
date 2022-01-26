<?php

namespace App\Controllers;


class PostController {

    public function single() {
        // dd(jose('context')->get('post'));
        view('single');
    }

    public function customSingle() {
        // dd(jose('context')->get('post'));
        view('single-custom');
    }

    public function archive() {
        view('archive');
    }
}

// /books/book1
// /livres/book1

// books
// livres

// books/horror/
// livres/horreur
