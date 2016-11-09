<?php

namespace Asrac\Controller;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

class HomeController {
    public function indexAction(Application $app) {
        $articles = $app['dao.article']->findAll();
        return $app['twig']->render('index.html.twig', array('articles' => $articles));
    }

	public function allArticles(Application $app) {
        $articles = $app['dao.article']->findAll();
        return $app['twig']->render('articles.html.twig', array('articles' => $articles));
    }

	public function articleAction($id, Request $request, Application $app) {
        $article = $app['dao.article']->find($id);
		return $app['twig']->render('article.html.twig', array('article' => $article));
	}
}
