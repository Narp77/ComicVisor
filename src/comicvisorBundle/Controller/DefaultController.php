<?php

namespace comicvisorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $datos = $em->createQueryBuilder()
             ->select('v.nombre,v.portadaNombre, c.numero, c.titulo')
             ->from('comicvisorBundle:comic', 'v')
             ->innerJoin('comicvisorBundle:capitulo', 'c', 'WITH', 'v.id = c.idcomic')
             ->setFirstResult(0)
             ->setMaxResults(6);
        $datos2 =  $datos->getQuery()->getResult();
        
        $em = $this->getDoctrine()->getManager();
        $datos = $em->createQueryBuilder()
             ->select('v.nombre,v.portadaNombre, c.numero, c.titulo')
             ->from('comicvisorBundle:comic', 'v')
             ->innerJoin('comicvisorBundle:capitulo', 'c', 'WITH', 'v.id = c.idcomic')
             ->setFirstResult(6)
             ->setMaxResults(6);
        $datos3 =  $datos->getQuery()->getResult();
        
        $em = $this->getDoctrine()->getManager();
        $datos = $em->createQueryBuilder()
             ->select('c.nombre,c.portadaNombre')
             ->from('comicvisorBundle:comic', 'c')
             ->setFirstResult(0)
             ->setMaxResults(6);
        $datos4 =  $datos->getQuery()->getResult();
        
         $em = $this->getDoctrine()->getManager();
        $datos = $em->createQueryBuilder()
             ->select('c.nombre, c.portadaNombre')
             ->from('comicvisorBundle:comic','c')
             ->setFirstResult(6)
             ->setMaxResults(6);
        $datos5 =  $datos->getQuery()->getResult();
        
        /*$datos2 = $this->getDoctrine()
					  ->getRepository('comicvisorBundle:capitulo')
					  ->findAll();*/
        
        return $this->render('comicvisorBundle:Default:index.html.twig',array('datos' => $datos2, 'datos2' => $datos3,'datos3' => $datos4,'datos4' => $datos5 ));
    }
    
    public function comicAction($portadaNombre)
    {
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQueryBuilder()
           ->select('c')
           ->from('comicvisorBundle:comic','c')
           ->where('c.portadaNombre = :portadaNombre')
           ->setParameter('portadaNombre', $portadaNombre);
         
        $datos = $query->getQuery()->getSingleResult();
        
        $query = $em->createQueryBuilder()
             ->select('v.nombre,v.portadaNombre, c.numero, c.titulo')
             ->from('comicvisorBundle:comic', 'v')
             ->innerJoin('comicvisorBundle:capitulo', 'c', 'WITH', 'v.id = c.idcomic')
             ->where('v.portadaNombre = :portadaNombre')
             ->setParameter('portadaNombre', $portadaNombre)
             ->setFirstResult(0)
             ->setMaxResults(6);
              
        $datos2 = $query->getQuery()->getResult();
        
        /*
        $parameters = array(
            'thread' => $thread_array['thread'], 
            'type' => '%'.$thread_array['type'].'%'
        );
        
        $dql = 'SELECT p.type,AVG(p.value) 
            FROM TrackerMembersBundle:Rating p 
            WHERE p.thread=:thread 
            AND type LIKE :type 
            GROUP BY p.thread,p.type';
        
        $query = $this->em->createQuery($dql)
            ->setParameters($parameters);
        */
        
        return $this->render('comicvisorBundle:Default:comic.html.twig',array('datos' => $datos, 'datos2' => $datos2));
    }
}
