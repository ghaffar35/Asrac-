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

// Edit an existing article
$app->match('/admin/article/{id}/edit', "Asrac\Controller\AdminController::editArticleAction")->bind('admin_article_edit');

// Remove an article
$app->get('/admin/article/{id}/delete', "Asrac\Controller\AdminController::deleteArticleAction")->bind('admin_article_delete');

// Add a user
$app->match('/admin/user/add', "Asrac\Controller\AdminController::addUserAction")->bind('admin_user_add');

// Edit an existing user
$app->match('/admin/user/{id}/edit', "Asrac\Controller\AdminController::editUserAction")->bind('admin_user_edit');

// Remove a user
$app->get('/admin/user/{id}/delete', "Asrac\Controller\AdminController::deleteUserAction")->bind('admin_user_delete');

