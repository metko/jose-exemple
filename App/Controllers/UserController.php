<?php

namespace App\Controllers;

class UserController {

    public function archive() {  
        $page = jose('context')->get('page');
        $page->title = ucFirst($page->nickname) . "'s posts";
        view('archive');
    }

    public function single() {      
        view('single');
    }
}
