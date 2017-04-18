<?php

namespace   XL\UserBundle\Controller;

use         Symfony\Bundle\FrameworkBundle\Controller\Controller;
use         Symfony\Component\HttpFoundation\Request;
use         Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class       FriendController extends Controller
{
    public function indexAction()
    {
        return $this->render('XLUserBundle:Friend:index.html.twig');
    }

    public function addFriendAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository("XLUserBundle:User")->find($id);
        if (!$this->getUser()->getFriends()->contains($user))
        {
            $this->getUser()->getFriends()->add($user);
            $em->persist($this->getUser());
            $em->flush();
        }
        return $this->redirect($this->generateUrl('xl_friend_home'));
    }

    public function deleteFriendAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository("XLUserBundle:User")->find($id);
        if ($this->getUser()->getFriends()->contains($user))
        {
            $this->getUser()->getFriends()->removeElement($user);
            $em->persist($this->getUser());
            $em->flush();
        }
        return $this->redirect($this->generateUrl('xl_friend_home'));
    }
}