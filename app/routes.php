<?php
// Home page
$app->get('/', "Asrac\Controller\HomeController::indexAction")->bind('home');

// All article
$app->get('/actualite', "Asrac\Controller\HomeController::allArticles")->bind('all_articles');

// Detailed info about an article
$app->match('/article/{id}', "Asrac\Controller\HomeController::articleAction")->bind('article');

// Login form
$app->get('/login', "Asrac\Controller\HomeController::loginAction")->bind('login');

// Admin zone
$app->get('/admin', "Asrac\Controller\AdminController::indexAction")->bind('admin');

// Add a new article
$app->match('/admin/article/add', "Asrac\Controller\AdminController::addArticleAction")->bind('admin_article_add');
