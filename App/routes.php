<?php
use \Jose\Router;

Router::single('post', 'PostController@single');
Router::archive('post', 'PostController@single');

Router::single('page', 'PageController@archive');
Router::archive('author:toto', 'sssss@archive');

// Router::single('page:33', 'PagssssseController@archive');

Router::single('book', 'BookController@single');
Router::archive('book', 'BookController@archive');

Router::frontpage('WelcomeController@index');
Router::home('HomeController@index');

Router::taxonomy('category', 'TaxCategoryController@hello');
Router::taxonomy('author_book', 'TaxAuthorController@hello');

Router::e_404('YoupsController@index');

// dd(Router::routes());
Router::template('metko', 'MetkoController@index');