<?php

class ExampleBlock {

    public $name = 'example-block';

    public $description = 'description';

    public $view = '/example-block';

    public function register($block) {
        $this->name = '';
        $this->assets = '';
        $this->admin_assets = '';
    }

    public function pre_render($fields) {

    }
}