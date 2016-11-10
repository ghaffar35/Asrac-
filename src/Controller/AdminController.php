<?php

namespace Asrac\Controller;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use Asrac\Domain\Article;
use Asrac\Form\Type\ArticleType;
use Asrac\Domain\User;
use Asrac\Form\Type\UserType;

class AdminController {

	public function indexAction(Application $app) {
        $articles = $app['dao.article']->findAll();
		$users = $app['dao.user']->findAll();
        return $app['twig']->render('admin.html.twig', array(
            'articles' => $articles,
			'users' => $users));
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
}

