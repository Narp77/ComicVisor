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
             ->select('v.nombre,v.portadaNombre, c.numero, c.titulo, u.nick, b.id')
             ->from('comicvisorBundle:comic', 'v')
             ->innerJoin('comicvisorBundle:capitulo', 'c', 'WITH', 'v.id = c.idcomic')
             ->innerJoin('comicvisorBundle:version', 'b', 'WITH', 'b.idcapitulo = c.id')
             ->innerJoin('comicvisorBundle:usuario', 'u', 'WITH', 'b.idusuario = u.id')
             ->where('v.portadaNombre = :portadaNombre')
             ->setParameter('portadaNombre', $portadaNombre)
             ->orderBy('c.numero', 'DESC');
              
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
    
    public function capituloAction($portadaNombre,$numero)
    {
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQueryBuilder()
           ->select('c')
           ->from('comicvisorBundle:comic','c')
           ->where('c.portadaNombre = :portadaNombre')
           ->setParameter('portadaNombre', $portadaNombre);
         
        $datos = $query->getQuery()->getSingleResult();
        
        $parameters = array(
            'portadaNombre' => $portadaNombre, 
            'numero' => $numero
        );
        
        $subquery = $em->createQueryBuilder()
             ->select('c.id')
             ->from('comicvisorBundle:comic', 'v')
             ->innerJoin('comicvisorBundle:capitulo', 'c', 'WITH', 'v.id = c.idcomic')
             ->where('v.portadaNombre = :portadaNombre')
             ->andWhere('c.numero = :numero')
             ->setParameters($parameters)
             ->getQuery()
             ->getResult();

        
       $query = $em->createQueryBuilder()
               ->select('v2.id, u.nick ')
               ->from('comicvisorBundle:version', 'v2')
               ->innerJoin('comicvisorBundle:usuario', 'u', 'WITH', 'v2.idusuario = u.id')
               ->where('v2.idcapitulo IN (:ids)')
               ->setParameter('ids', array_values($subquery));
            
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
        
        return $this->render('comicvisorBundle:Default:capitulo.html.twig',array('datos' => $datos, 'datos2' => $datos2, 'portada' => $portadaNombre,'numero' => $numero));
    }
    
    public function versionAction($portadaNombre,$numero,$idversion,$pagina)
    {
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQueryBuilder()
           ->select('v.numeroPag')
           ->from('comicvisorBundle:version','v')
           ->where('v.id = :id')
           ->setParameter('id', $idversion);
         
        $paginas = $query->getQuery()->getSingleResult();
        if($pagina < 1 || $pagina > $paginas['numeroPag'])
        {
            return $this ->redirect($this -> generateUrl('comicvisor_versionpage',array('portadaNombre' => $portadaNombre,
                 'numero' => $numero,
                 'pagina' => 1,
                 'idversion' => $idversion)));
        }
        else
        {
           return $this->render('comicvisorBundle:Default:version.html.twig',
           array('portada' => $portadaNombre,
                 'numero' => $numero,
                 'pagina' => $pagina,
                 'paginas' => $paginas,
                 'id' => $idversion
                 ));
        }
    }
}
