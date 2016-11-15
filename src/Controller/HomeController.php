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
		$mail = 'youness.chetoui@gmail.com';
		$mailEnv = trim($_POST['adresse']);
		$header = 'From:'.$mailEnv. "\r\n" .
		$objet = trim($_POST['name']);
		$message = trim($_POST['msg']);

		if (isset($_POST['envoye']))
		{
			if (empty($mailEnv) || empty($header) || empty($objet) || empty($message)) //verifie si il y a quelque chose dans les input
			{  
				echo "Tout les champs doivent être renseignés<br/>";
			} 
			else if (mail($mail, $objet, $message, $header)) //envoie le mail et met en place un cookie
			{
				$alert = "E-mail envoyé avec succès";
				setcookie("sent", "1", time() + 120);
			}
			else //affiche un message d'erreur si sa ne s'envoi pas
			{
				$alert = "Erreur d\'envoi de l\'e-mail";
			}

			echo $alert;
		}
		return $app->redirect($app['url_generator']->generate('home'));
	}
}
