<?php

namespace Asrac\Controller;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use Asrac\Domain\Article;
use Asrac\Form\Type\ArticleType;
use Asrac\Domain\User;
use Asrac\Form\Type\UserType;
use Asrac\Domain\Event;
use Asrac\Form\Type\EventType;
use Asrac\Domain\Slide;
use Asrac\Form\Type\SlideType;
use Asrac\Domain\Texte;
use Asrac\Form\Type\TexteType;

class AdminController {

	public function indexAction(Application $app) {
        $articles = $app['dao.article']->findAll();
		$slides = $app['dao.slide']->findAll();
		$users = $app['dao.user']->findAll();
		$events = $app['dao.event']->findAll();
		$texte = $app['dao.texte']->findAll();
        return $app['twig']->render('admin.html.twig', array(
			'slides' => $slides,
            'articles' => $articles,
			'users' => $users,
			'events' => $events,
			'texte' => $texte));
    }

	public function addArticleAction(Request $request, Application $app) {
			$article = new Article();
			$articleForm = $app['form.factory']->create(new ArticleType(), $article);
			$articleForm->handleRequest($request);
			if ($request->isMethod('POST')) {
				if ($articleForm->isValid()) {
					$image = $request->files->get($articleForm->getName());
					/* Make sure that Upload Directory is properly configured and writable */
					$path = __DIR__.'/../../web/images';
					$filename = $image['image']->getClientOriginalName();
					$image['image']->move($path,$filename);
					$article->setImage($filename);

					$message = 'File was successfully uploaded!';

				}
			}
			if ($articleForm->isSubmitted() && $articleForm->isValid()) {
				$app['dao.article']->save($article);
				$app['session']->getFlashBag()->add('success', 'The article was successfully created.');
			}
			return $app['twig']->render('article_form.html.twig', array(
				'title' => 'New article',
				'articleForm' => $articleForm->createView()));
	}

	public function editArticleAction($id, Request $request, Application $app) {
        $article = $app['dao.article']->find($id);
        $articleForm = $app['form.factory']->create(new ArticleType(), $article);
        $articleForm->handleRequest($request);
		if ($request->isMethod('POST')) {
			if ($articleForm->isValid()) {
				$files = $request->files->get($articleForm->getName());
				// Make sure that Upload Directory is properly configured and writable 
				$path = __DIR__.'/../../web/images';
				$filename = $files['image']->getClientOriginalName();
				$files['image']->move($path,$filename);
				$article->setImage($filename);
				$message = 'File was successfully uploaded!';
			}
    	}
        if ($articleForm->isSubmitted() && $articleForm->isValid()) {
            $app['dao.article']->save($article);
            $app['session']->getFlashBag()->add('success', 'The article was succesfully updated.');
        }
        return $app['twig']->render('article_form.html.twig', array(
            'title' => 'Edit article',
            'articleForm' => $articleForm->createView()));
   }

	public function deleteArticleAction($id, Application $app) {
        // Delete the article
        $app['dao.article']->delete($id);
        $app['session']->getFlashBag()->add('success', 'The article was succesfully removed.');
        // Redirect to admin home page
        return $app->redirect($app['url_generator']->generate('admin'));
    }

	public function addUserAction(Request $request, Application $app) {
        $user = new User();
        $userForm = $app['form.factory']->create(new UserType(), $user);
        $userForm->handleRequest($request);
        if ($userForm->isSubmitted() && $userForm->isValid()) {
            // generate a random salt value
            $salt = substr(md5(time()), 0, 23);
            $user->setSalt($salt);
            $plainPassword = $user->getPassword();
            // find the default encoder
            $encoder = $app['security.encoder.digest'];
            // compute the encoded password
            $password = $encoder->encodePassword($plainPassword, $user->getSalt());
            $user->setPassword($password);
            $app['dao.user']->save($user);
            $app['session']->getFlashBag()->add('success', 'The user was successfully created.');
        }
        return $app['twig']->render('user_form.html.twig', array(
            'title' => 'New user',
            'userForm' => $userForm->createView()));
    }
	
	public function editUserAction($id, Request $request, Application $app) {
        $user = $app['dao.user']->find($id);
        $userForm = $app['form.factory']->create(new UserType(), $user);
        $userForm->handleRequest($request);
        if ($userForm->isSubmitted() && $userForm->isValid()) {
            $plainPassword = $user->getPassword();
            // find the encoder for the user
            $encoder = $app['security.encoder_factory']->getEncoder($user);
            // compute the encoded password
            $password = $encoder->encodePassword($plainPassword, $user->getSalt());
            $user->setPassword($password); 
            $app['dao.user']->save($user);
            $app['session']->getFlashBag()->add('success', 'The user was succesfully updated.');
        }
        return $app['twig']->render('user_form.html.twig', array(
            'title' => 'Edit user',
            'userForm' => $userForm->createView()));
    }
	
	public function deleteUserAction($id, Application $app) {
        // Delete the user
        $app['dao.user']->delete($id);
        $app['session']->getFlashBag()->add('success', 'The user was succesfully removed.');
        // Redirect to admin home page
        return $app->redirect($app['url_generator']->generate('admin'));
    }
	
	public function addEventAction(Request $request, Application $app) {
			$event = new Event();
			$eventForm = $app['form.factory']->create(new EventType(), $event);
			$eventForm->handleRequest($request);
			if ($request->isMethod('POST')) {
				if ($eventForm->isValid()) {
					$image = $request->files->get($eventForm->getName());
					/* Make sure that Upload Directory is properly configured and writable */
					$path = __DIR__.'/../../web/images';
					$filename = $image['image']->getClientOriginalName();
					$image['image']->move($path,$filename);
					$event->setImage($filename);
					$message = 'File was successfully uploaded!';
				}
			}
			
			if ($eventForm->isSubmitted() && $eventForm->isValid()) {
				$app['dao.event']->save($event);
				$app['session']->getFlashBag()->add('success', 'The event was successfully created.');
			}
			return $app['twig']->render('event_form.html.twig', array(
				'title' => 'New event',
				'eventForm' => $eventForm->createView()));
	}
	
	public function editEventAction($id, Request $request, Application $app) {
        $event = $app['dao.event']->find($id);
        $eventForm = $app['form.factory']->create(new EventType(), $event);
        $eventForm->handleRequest($request);
		if ($request->isMethod('POST')) {
				if ($eventForm->isValid()) {
					$image = $request->files->get($eventForm->getName());
					/* Make sure that Upload Directory is properly configured and writable */
					$path = __DIR__.'/../../web/images';
					$filename = $image['image']->getClientOriginalName();
					$image['image']->move($path,$filename);
					$event->setImage($filename);
					$message = 'File was successfully uploaded!';
				}
			}
        if ($eventForm->isSubmitted() && $eventForm->isValid()) {
            $app['dao.event']->save($event);
            $app['session']->getFlashBag()->add('success', 'The event was succesfully updated.');
        }
        return $app['twig']->render('event_form.html.twig', array(
            'title' => 'Edit event',
            'eventForm' => $eventForm->createView()));
    }
	
	public function deleteEventAction($id, Application $app) {
        // Delete the event
        $app['dao.event']->delete($id);
        $app['session']->getFlashBag()->add('success', 'The event was succesfully removed.');
        // Redirect to admin home page
        return $app->redirect($app['url_generator']->generate('admin'));
    }

	public function editSlideAction($id, Request $request, Application $app) {
        $slide = $app['dao.slide']->find($id);
        $slideForm = $app['form.factory']->create(new SlideType(), $slide);
        $slideForm->handleRequest($request);
		if ($request->isMethod('POST')) {
				if ($slideForm->isValid()) {
					$image = $request->files->get($slideForm->getName());
					/* Make sure that Upload Directory is properly configured and writable */
					$path = __DIR__.'/../../web/images';
					$filename = $image['image']->getClientOriginalName();
					$image['image']->move($path,$filename);
					$slide->setImage($filename);
					$message = 'File was successfully uploaded!';
				}
			}
        if ($slideForm->isSubmitted() && $slideForm->isValid()) {
            $app['dao.slide']->save($slide);
            $app['session']->getFlashBag()->add('success', 'The event was succesfully updated.');
        }
        return $app['twig']->render('slide_form.html.twig', array(
            'title' => 'Edit slide',
            'slideForm' => $slideForm->createView()));
    }
	
	public function editTexteAction($id, Request $request, Application $app) {
        $texte = $app['dao.texte']->find($id);
        $texteForm = $app['form.factory']->create(new TexteType(), $texte);
        $texteForm->handleRequest($request);
		
        if ($texteForm->isSubmitted() && $texteForm->isValid()) {
            $app['dao.texte']->save($texte);
            $app['session']->getFlashBag()->add('success', 'The texte was succesfully updated.');
        }
        return $app['twig']->render('texte_form.html.twig', array(
            'title' => 'Edit texte',
            'texteForm' => $texteForm->createView()));
    }
}

