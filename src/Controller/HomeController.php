<?php

namespace Asrac\Controller;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

class HomeController {
    public function indexAction(Application $app) {
        $articles = $app['dao.article']->findAll();
		$events = $app['dao.event']->findByDate();
		$result = [];
		$date = new \DateTime();
		foreach($events as $event){
			$month = $event->getDateEv()->format('m');
			if(!array_key_exists($month, $result)){
				$result[$month] = [];
			}
			array_push($result[$month], $event);
		}

        return $app['twig']->render('index.html.twig', array('articles' => $articles,
			'events' => $result,
			'months' => ['01'=> 'Janvier', 
						 '02'=>'Fevrier', 
						 '03'=>'Mars',
						 '04'=>'Avril', 
						 '05'=>'Mai',
						 '06'=>'Juin', 
						 '07'=>'Juillet',
						 '08'=>'Aout',
						 '09'=>'Septembre',
						 '10'=>'Octobre',
						 '11'=>'Novembre', 
						 '12'=>'Décembre']												
			));
		
    }

	public function allArticles(Application $app) {
        $articles = $app['dao.article']->findAll();
        return $app['twig']->render('actualite.html.twig', array('articles' => $articles));
    }

	public function articleAction($id, Request $request, Application $app) {
        $article = $app['dao.article']->find($id);
		return $app['twig']->render('article.html.twig', array('article' => $article));
	}

	public function loginAction(Request $request, Application $app) {
        return $app['twig']->render('login.html.twig', array(
            'error'         => $app['security.last_error']($request),
            'last_username' => $app['session']->get('_security.last_username'),
            ));
    }
}
