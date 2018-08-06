<?php
/**
 * Created by PhpStorm.
 * User: eschlegel
 * Date: 06/08/2018
 * Time: 17:15
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\View\View;
use Entity\User;

class UsersController
{
    /**
     * Create user.
     * @FOSRest\Post("/user")
     *
     * @return array
     */
    public function postArticleAction(Request $request)
    {
        $user = new User();
        $user->setlogin($request->get('login'));
        $user->setPassword($request->get('password'));
        $user->setTitle($request->get('title'));
        $user->setLastname($request->get('lastname'));
        $user->setFirstname($request->get('firstname'));
        $user->setGender($request->get('gender'));
        $user->setEmail($request->get('email'));
        $user->setAddress($request->get('address'));
        $user->setPicture($request->get('picture'));
        $em = $this->getDoctrine()->getManager();
        $em->persist($user);
        $em->flush();
        return View::create($user, Response::HTTP_CREATED , []);

    }

    /**
     * Lists all user.
     * @FOSRest\Get("/users")
     *
     * @return array
     */
    public function getArticleAction()
    {
        $repository = $this->getDoctrine()->getRepository(User::class);

        // query for a single Product by its primary key (usually "id")
        $article = $repository->findall();

        return View::create($article, Response::HTTP_OK , []);
    }
}