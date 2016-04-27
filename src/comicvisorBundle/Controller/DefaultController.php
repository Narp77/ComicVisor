<?php

namespace comicvisorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $datos = $em->createQueryBuilder()
             ->select('v.nombre, c.numero, c.titulo')
             ->from('comicvisorBundle:comic', 'v')
             ->innerJoin('comicvisorBundle:capitulo', 'c', 'WITH', 'v.id = c.idcomic')
             ->setFirstResult(0)
             ->setMaxResults(6);
        $datos2 =  $datos->getQuery()->getResult();
        
        $em = $this->getDoctrine()->getManager();
        $datos = $em->createQueryBuilder()
             ->select('v.nombre, c.numero, c.titulo')
             ->from('comicvisorBundle:comic', 'v')
             ->innerJoin('comicvisorBundle:capitulo', 'c', 'WITH', 'v.id = c.idcomic')
             ->setFirstResult(6)
             ->setMaxResults(6);
        $datos3 =  $datos->getQuery()->getResult();
        
        /*$datos2 = $this->getDoctrine()
					  ->getRepository('comicvisorBundle:capitulo')
					  ->findAll();*/
        
        return $this->render('comicvisorBundle:Default:index.html.twig',array('datos' => $datos2, 'datos2' => $datos3, ));
    }
}
