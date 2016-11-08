<?php
// Home page
$app->get('/', "Asrac\Controller\HomeController::indexAction")->bind('home');

// All article
//$app->get('/articles', "Asrac\Controller\HomeController::allArticles")->bind('all_articles');

// Detailed info about an article
//$app->match('/article/{id}', "Asrac\Controller\HomeController::articleAction")->bind('article');
