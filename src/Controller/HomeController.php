<?php

namespace Asrac\Controller;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

class HomeController {
    public function indexAction(Application $app) {
        $articles = $app['dao.article']->findAll();
		$slides = $app['dao.slide']->findAll();
		$events = $app['dao.event']->findByDate();
		$texte = $app['dao.texte']->findAll();
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
			'slides' => $slides,
			'texte' => $texte,
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

	public function eventAction($id, Request $request, Application $app) {
        $event = $app['dao.event']->find($id);
		return $app['twig']->render('event.html.twig', array('event' => $event));
	}

	public function loginAction(Request $request, Application $app) {
        return $app['twig']->render('login.html.twig', array(
            'error'         => $app['security.last_error']($request),
            'last_username' => $app['session']->get('_security.last_username'),
            ));
    }
	
	public function mailAction(Request $request, Application $app) {
		$mail = 'example@example.com';
		$mailEnv = trim($_POST['adresse']);
		$header = 'From:'.$mailEnv. "\r\n" .
		$objet = trim($_POST['name']);
		$message = trim($_POST['msg']);

		if (isset($_POST['envoye'])) {
			if (empty($mailEnv) || empty($header) || empty($objet) || empty($message)) {
				echo "Tout les champs doivent être renseignés<br/>";
			} 
			else if (mail($mail, $objet, $message, $header)) {
				$alert = "E-mail envoyé avec succès";
				setcookie("sent", "1", time() + 120);
			}
			else {
				$alert = "Erreur d\'envoi de l\'e-mail";
			}
		}
		$app['session']->getFlashBag()->add('success', 'E-mail envoyé avec succès');
		return $app->redirect($app['url_generator']->generate('home'));
	}
}
