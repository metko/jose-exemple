<?php

namespace App\Controllers;


class PageController {

    public function show() {
        view('homepage');
    }

    public function frontpage() {
        dd('frontpage');
        view('homepage');
    }

    public function home() {
        dd('home');
        view('homepage');
    }

    public function e_404() {
        dd('404');
        view('homepage');
    }
    public function archive() {
        view('page');
    }
}

// /books/book1
// /livres/book1

// books
// livres

// books/horror/
// livres/horreur