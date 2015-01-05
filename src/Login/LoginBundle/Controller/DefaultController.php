<?php

namespace Login\LoginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $Username ='Username';
        $Password ='Password';
        $em = $this->getDoctrine()->getEntityManager();
        $repository = $em ->getRepository('LoginLoginBundle:test');        
        
        
        $test = $repository->findOneBy(array('Username'=>$username,'Password'=>$Password));
        if ($test){
        return $this->render('LoginLoginBundle:Default:index.html.twig', array('name' => $test-> getFirstname()));
            }
 else {
     return $this->render('LoginLoginBundle:Default:index.html.twig', array('name' =>'login failed'));
      }
                   }     
        
      
    }
    

