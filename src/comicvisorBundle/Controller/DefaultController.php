<?php

namespace comicvisorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use comicvisorBundle\Entity\usuario;
use comicvisorBundle\Form\usuarioType;



class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $datos = $em->createQueryBuilder()
             ->select('v.nombre,v.portadaNombre, c.numero, c.titulo, v.portada, avg(u.voto) as voto')
             ->from('comicvisorBundle:comic', 'v')
             ->innerJoin('comicvisorBundle:capitulo', 'c', 'WITH', 'v.id = c.idcomic')
             ->innerJoin('comicvisorBundle:usuarioVotaComic', 'u', 'WITH', 'v.id = u.idcomic')
             ->groupBy('c.id')
             ->orderBy('c.id', 'DESC')
             ->setFirstResult(0);
             $datos->setMaxResults(6);
        $datos2 =  $datos->getQuery()->getResult();
        
        $em = $this->getDoctrine()->getManager();
        $datos = $em->createQueryBuilder()
             ->select('v.nombre,v.portadaNombre, c.numero, c.titulo,  v.portada, avg(u.voto) as voto')
             ->from('comicvisorBundle:comic', 'v')
             ->innerJoin('comicvisorBundle:capitulo', 'c', 'WITH', 'v.id = c.idcomic')
             ->innerJoin('comicvisorBundle:usuarioVotaComic', 'u', 'WITH', 'v.id = u.idcomic')
             ->groupBy('c.id')
             ->orderBy('c.id', 'DESC')
             ->setFirstResult(6)
             ->setMaxResults(6);
        $datos3 =  $datos->getQuery()->getResult();
        
        $em = $this->getDoctrine()->getManager();
        $datos = $em->createQueryBuilder()
             ->select('c.nombre,c.portadaNombre,  c.portada, avg(u.voto) as voto')
             ->from('comicvisorBundle:comic', 'c')
             ->innerJoin('comicvisorBundle:usuarioVotaComic', 'u', 'WITH', 'c.id = u.idcomic')
             ->groupBy('c.id')
             ->orderBy('c.id', 'DESC')
             ->setFirstResult(0)
             ->setMaxResults(6);
        $datos4 =  $datos->getQuery()->getResult();
        
        $em = $this->getDoctrine()->getManager();
        $datos = $em->createQueryBuilder()
             ->select('c.nombre, c.portadaNombre, c.portada, avg(u.voto) as voto')
             ->from('comicvisorBundle:comic','c')
             ->innerJoin('comicvisorBundle:usuarioVotaComic', 'u', 'WITH', 'c.id = u.idcomic')
             ->groupBy('c.id')
             ->orderBy('c.id', 'DESC')
             ->setFirstResult(6)
             ->setMaxResults(6);
        $datos5 =  $datos->getQuery()->getResult();
        
        /*$datos2 = $this->getDoctrine()
					  ->getRepository('comicvisorBundle:capitulo')
					  ->findAll();*/
        
         $session=$request->getSession();
         if($session->has("id"))
         {
              $subquery = $em->createQueryBuilder()
             ->select('v.id')
             ->from('comicvisorBundle:comic', 'v')
             ->innerJoin('comicvisorBundle:usuarioSigueComic', 'c', 'WITH', 'v.id = c.idcomic')
             ->where('c.idusuario = :id')
             ->setParameter('id', $session->get('id'));
             
             if(count($subquery->getQuery()->getResult()) <= 0)
             {
                 $bandera =0;
             }
             else{
                 $bandera=1;
             }
             
             $ids = $subquery->getQuery()->getResult();
             
             $em = $this->getDoctrine()->getManager();
             $datos = $em->createQueryBuilder()
                 ->select('v.nombre,v.portadaNombre, c.numero, c.titulo, v.portada, avg(u.voto) as voto')
                 ->from('comicvisorBundle:comic', 'v')
                 ->innerJoin('comicvisorBundle:capitulo', 'c', 'WITH', 'v.id = c.idcomic')
                 ->innerJoin('comicvisorBundle:usuarioVotaComic', 'u', 'WITH', 'v.id = u.idcomic')
                 ->where('v.id IN (:ids)')
                 ->setParameter('ids', array_values($ids))
                 ->groupBy('c.id')
                 ->orderBy('c.id', 'DESC')
                 ->setFirstResult(0);
                 $datos->setMaxResults(6);
             $datos6 =  $datos->getQuery()->getResult();
            
             $em = $this->getDoctrine()->getManager();
             $datos = $em->createQueryBuilder()
                 ->select('v.nombre,v.portadaNombre, c.numero, c.titulo,  v.portada, avg(u.voto) as voto')
                 ->from('comicvisorBundle:comic', 'v')
                 ->innerJoin('comicvisorBundle:capitulo', 'c', 'WITH', 'v.id = c.idcomic')
                 ->innerJoin('comicvisorBundle:usuarioVotaComic', 'u', 'WITH', 'v.id = u.idcomic')
                 ->where('v.id IN (:ids)')
                 ->setParameter('ids', array_values($ids))
                 ->groupBy('c.id')
                 ->orderBy('c.id', 'DESC')
                 ->setFirstResult(6)
                 ->setMaxResults(6);
             $datos7 =  $datos->getQuery()->getResult();
             
            if($session->get('tipo')=='admin')
            {
                return $this->render('comicvisorBundle:Default:index_admin.html.twig',array('datos' => $datos2, 'datos2' => $datos3,'datos3' => $datos4,'datos4' => $datos5,'datos5' => $datos6,'datos6' => $datos7, 'bandera' => $bandera ));
            }
            else{
                return $this->render('comicvisorBundle:Default:index_user.html.twig',array('datos' => $datos2, 'datos2' => $datos3,'datos3' => $datos4,'datos4' => $datos5,'datos5' => $datos6,'datos6' => $datos7, 'bandera' => $bandera ));
            }
             
         }else
         {
            return $this->render('comicvisorBundle:Default:index.html.twig',array('datos' => $datos2, 'datos2' => $datos3,'datos3' => $datos4,'datos4' => $datos5 ));
         }
        
        
        
        
    }
    
    public function comicAction(Request $request, $portadaNombre)
    {
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQueryBuilder()
           ->select('c')
           ->from('comicvisorBundle:comic','c')
           ->where('c.portadaNombre = :portadaNombre')
           ->setParameter('portadaNombre', $portadaNombre);
         
        $datos = $query->getQuery()->getSingleResult();
        
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQueryBuilder()
           ->select('c, avg(u.voto) as voto')
           ->from('comicvisorBundle:comic','c')
           ->where('c.portadaNombre = :portadaNombre')
           ->innerJoin('comicvisorBundle:usuarioVotaComic', 'u', 'WITH', 'c.id = u.idcomic')
           ->groupBy('c.id')
           ->setParameter('portadaNombre', $portadaNombre);
         
        $datos4 = $query->getQuery()->getSingleResult();
        
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQueryBuilder()
           ->select('c3.tipo')
           ->from('comicvisorBundle:comic','c')
           ->innerJoin('comicvisorBundle:comicTieneCategoria', 'c2', 'WITH', 'c2.idcomic = c.id')
           ->innerJoin('comicvisorBundle:categoria', 'c3', 'WITH', 'c3.id = c2.idcategoria')
           ->where('c.portadaNombre = :portadaNombre')
           ->setParameter('portadaNombre', $portadaNombre);
         
        $datos3 = $query->getQuery()->getResult();
        
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
        
         $session=$request->getSession();
         if($session->has("id"))
         {
             $em = $this->getDoctrine()->getManager();
             $query = $em->createQueryBuilder()
               ->select('count(c2.idusuario) as tiene')
               ->from('comicvisorBundle:comic','c')
               ->innerJoin('comicvisorBundle:usuarioSigueComic', 'c2', 'WITH', 'c2.idcomic = c.id')
               ->where('c.portadaNombre = :portadaNombre')
               ->andWhere('c2.idusuario = :id')
               ->setParameter('id', $session->get('id'))
               ->setParameter('portadaNombre', $portadaNombre);
             
             $sigue = $query->getQuery()->getOneOrNullResult();
             
             $em = $this->getDoctrine()->getManager();
             $query = $em->createQueryBuilder()
               ->select('c2.voto')
               ->from('comicvisorBundle:comic','c')
               ->innerJoin('comicvisorBundle:usuarioVotaComic', 'c2', 'WITH', 'c2.idcomic = c.id')
               ->where('c.portadaNombre = :portadaNombre')
               ->andWhere('c2.idusuario = :id')
               ->setParameter('id', $session->get('id'))
               ->setParameter('portadaNombre', $portadaNombre);
             
             $voto = $query->getQuery()->getOneOrNullResult();
               
               if($session->get('tipo')=='admin')
                {
                    return $this->render('comicvisorBundle:Default:comic_admin.html.twig',array('datos' => $datos, 'datos2' => $datos2, 'datos3' => $datos3, 'datos4' => $datos4, 'sigue' => $sigue, 'voto' => $voto));
                }
                else{
                    return $this->render('comicvisorBundle:Default:comic_user.html.twig',array('datos' => $datos, 'datos2' => $datos2, 'datos3' => $datos3, 'datos4' => $datos4, 'sigue' => $sigue, 'voto' => $voto));
                }
               
         }
         else{
            return $this->render('comicvisorBundle:Default:comic.html.twig',array('datos' => $datos, 'datos2' => $datos2, 'datos3' => $datos3, 'datos4' => $datos4));
        }
    }
    
    public function capituloAction($portadaNombre,$numero, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQueryBuilder()
           ->select('c')
           ->from('comicvisorBundle:comic','c')
           ->where('c.portadaNombre = :portadaNombre')
           ->setParameter('portadaNombre', $portadaNombre);
         
        $datos = $query->getQuery()->getSingleResult();
        
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQueryBuilder()
           ->select('c, avg(u.voto) as voto')
           ->from('comicvisorBundle:comic','c')
           ->where('c.portadaNombre = :portadaNombre')
           ->innerJoin('comicvisorBundle:usuarioVotaComic', 'u', 'WITH', 'c.id = u.idcomic')
           ->groupBy('c.id')
           ->setParameter('portadaNombre', $portadaNombre);
         
        $datos4 = $query->getQuery()->getSingleResult();
        
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQueryBuilder()
           ->select('c3.tipo')
           ->from('comicvisorBundle:comic','c')
           ->innerJoin('comicvisorBundle:comicTieneCategoria', 'c2', 'WITH', 'c2.idcomic = c.id')
           ->innerJoin('comicvisorBundle:categoria', 'c3', 'WITH', 'c3.id = c2.idcategoria')
           ->where('c.portadaNombre = :portadaNombre')
           ->setParameter('portadaNombre', $portadaNombre);
         
        $datos3 = $query->getQuery()->getResult();
        
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
        
         $subquery2 = $em->createQueryBuilder()
             ->select('c.numero')
             ->from('comicvisorBundle:comic', 'v')
             ->innerJoin('comicvisorBundle:capitulo', 'c', 'WITH', 'v.id = c.idcomic')
             ->where('v.portadaNombre = :portadaNombre')
             ->setParameter('portadaNombre', $portadaNombre)
             ->setMaxResults(1)
             ->orderBy('c.numero', 'DESC');
             
             $maximo = $subquery2->getQuery()->getSingleResult();
        
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
         if($numero < 1 || $numero > $maximo['numero'])
        {
            return $this ->redirect($this -> generateUrl('comicvisor_comicpage',array('portadaNombre' => $portadaNombre)));
        }
        else{
        
        $session=$request->getSession();
         if($session->has("id"))
         {
             
               
               if($session->get('tipo')=='admin')
                {
                    return $this->render('comicvisorBundle:Default:capitulo_admin.html.twig',array('datos' => $datos, 'datos2' => $datos2, 'datos3' => $datos3,'datos4' => $datos4, 'portada' => $portadaNombre,'numero' => $numero));
                }
                else{
                    return $this->render('comicvisorBundle:Default:capitulo_user.html.twig',array('datos' => $datos, 'datos2' => $datos2, 'datos3' => $datos3,'datos4' => $datos4, 'portada' => $portadaNombre,'numero' => $numero));
                }
               
         }
         else{
            return $this->render('comicvisorBundle:Default:capitulo.html.twig',array('datos' => $datos, 'datos2' => $datos2, 'datos3' => $datos3,'datos4' => $datos4, 'portada' => $portadaNombre,'numero' => $numero));
        }
        
        
        }
    }
    
    public function versionAction($portadaNombre,$numero,$idversion,$pagina, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQueryBuilder()
           ->select('v.numeroPag')
           ->from('comicvisorBundle:version','v')
           ->where('v.id = :id')
           ->setParameter('id', $idversion);
         
        $paginas = $query->getQuery()->getSingleResult();
        
        $session=$request->getSession();
         if($session->has("id"))
         {
             
               
               if($session->get('tipo')=='admin')
                {
                    if($pagina < 1 || $pagina > $paginas['numeroPag'])
                    {
                        return $this ->redirect($this -> generateUrl('comicvisor_versionpage',array('portadaNombre' => $portadaNombre,
                             'numero' => $numero,
                             'pagina' => 1,
                             'idversion' => $idversion)));
                    }
                    else
                    {
                       return $this->render('comicvisorBundle:Default:version_admin.html.twig',
                       array('portada' => $portadaNombre,
                             'numero' => $numero,
                             'pagina' => $pagina,
                             'paginas' => $paginas,
                             'id' => $idversion
                             ));
                    }
                }
                else{
                    if($pagina < 1 || $pagina > $paginas['numeroPag'])
                        {
                            return $this ->redirect($this -> generateUrl('comicvisor_versionpage',array('portadaNombre' => $portadaNombre,
                                 'numero' => $numero,
                                 'pagina' => 1,
                                 'idversion' => $idversion)));
                        }
                        else
                        {
                           return $this->render('comicvisorBundle:Default:version_user.html.twig',
                           array('portada' => $portadaNombre,
                                 'numero' => $numero,
                                 'pagina' => $pagina,
                                 'paginas' => $paginas,
                                 'id' => $idversion
                                 ));
                        }
                }
               
         }
         else{
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
    
    public function popularAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $datos = $em->createQueryBuilder()
             ->select('c.nombre, c.portadaNombre, c.portada, avg(u.voto) as voto, count(u.voto) as total')
             ->from('comicvisorBundle:comic','c')
             ->innerJoin('comicvisorBundle:usuarioVotaComic', 'u', 'WITH', 'c.id = u.idcomic')
             ->groupBy('c.id')
             ->orderBy('total', 'DESC')
             ->setMaxResults(60);

        $datos1 =  $datos->getQuery()->getResult();
        
        $em = $this->getDoctrine()->getManager();
        $datos = $em->createQueryBuilder()
             ->select('c.nombre, c.portadaNombre, c.portada, avg(u.voto) as voto, count(u.voto) as total')
             ->from('comicvisorBundle:comic','c')
             ->innerJoin('comicvisorBundle:usuarioVotaComic', 'u', 'WITH', 'c.id = u.idcomic')
             ->groupBy('c.id')
             ->orderBy('voto', 'DESC')
             ->setMaxResults(60);

        $datos2 =  $datos->getQuery()->getResult();
        
         $session=$request->getSession();
         if($session->has("id"))
         {
             
               
               if($session->get('tipo')=='admin')
                {
                    return $this->render('comicvisorBundle:Default:popular_admin.html.twig', array('datos' => $datos1,'datos2' => $datos2));
                }
                else{
                    return $this->render('comicvisorBundle:Default:popular_user.html.twig', array('datos' => $datos1,'datos2' => $datos2));
                }
               
         }
         else{
        return $this->render('comicvisorBundle:Default:popular.html.twig', array('datos' => $datos1,'datos2' => $datos2));
         }    
    }
   
    public function busquedaAction($pagina=1, $categoria1=0,$categoria2=0,$categoria3=0,$filtro='',$orden='',$nombre="")
    {
            if($nombre=="@@@")
            {
                $nombre="";
            }
             $arraycategoria= [$categoria1,$categoria2,$categoria3];
             
             $em = $this->getDoctrine()->getManager();
             $datos = $em->createQueryBuilder()
             ->select('c.nombre,c.portadaNombre,  c.portada, avg(u.voto) as voto, count(u.voto) as total')
             ->from('comicvisorBundle:comic', 'c')
             ->innerJoin('comicvisorBundle:usuarioVotaComic', 'u', 'WITH', 'c.id = u.idcomic')
             ->innerJoin('comicvisorBundle:comicTieneCategoria', 'c2', 'WITH', 'c2.idcomic = c.id')
             ->where('c.nombre LIKE :nombre');
             $datos->setParameter('nombre', "%$nombre%");
             
             if($categoria1>0 || $categoria2>0 || $categoria3>0)
             {
                 
                 $datos->andwhere('c2.idcategoria IN (:categorias)');
                 $datos->setParameter('categorias', array_values($arraycategoria));
             }
             
             if($filtro!="")
             {
                 if($filtro == "ALF")
                 {
                     if($orden == "ASC")
                     {
                         $datos->orderBy('c.nombre', 'ASC');
                     }
                     else
                     {
                         $datos->orderBy('c.nombre', 'DESC');
                     }
                 }
                 if($filtro == "FEC")
                 {
                     if($orden == "ASC")
                     {
                         $datos->orderBy('c.fechaSalida', 'ASC');
                     }
                     else
                     {
                         $datos->orderBy('c.fechaSalida', 'DESC');
                     }
                 }
                 if($filtro == "VOT")
                 {
                     if($orden == "ASC")
                     {
                         $datos->orderBy('voto', 'ASC');
                     }
                     else
                     {
                         $datos->orderBy('voto', 'DESC');
                     }
                 }
                 if($filtro == "POP")
                 {
                     if($orden == "ASC")
                     {
                         $datos->orderBy('total', 'ASC');
                     }
                     else
                     {
                         $datos->orderBy('total', 'DESC');
                     }
                 }
             }
             
             $datos->groupBy('c.id');
             $count = ceil(count($datos->getQuery()->getResult())/24);
             $franja = (24*$pagina)-24;
             $datos->setFirstResult($franja);
             $datos->setMaxResults(24);
             $resultado =$datos->getQuery()->getResult();
             
        return $this->render('comicvisorBundle:Default:busqueda.html.twig', array('datos' => $resultado,'count' => $count, 'pagina' => $pagina));
        
    }
    
    public function bibliotecaAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQueryBuilder()
           ->select('c')
           ->from('comicvisorBundle:categoria','c');
         
        $resultado = $query->getQuery()->getResult();
        
         $session=$request->getSession();
         if($session->has("id"))
         {
             
               
               if($session->get('tipo')=='admin')
                {
                    return $this->render('comicvisorBundle:Default:biblioteca_admin.html.twig', array('datos' => $resultado));
                }
                else{
                    return $this->render('comicvisorBundle:Default:biblioteca_user.html.twig', array('datos' => $resultado));
                }
               
         }
         else{
        return $this->render('comicvisorBundle:Default:biblioteca.html.twig', array('datos' => $resultado));
         }    
        
        
        
    }
    
    public function loginAction(Request $request)
    {
        $session=$request->getSession();
        $session->clear();
        
        if($request->getMethod()=='POST')
        {
            $nick =$request->get('nick');
            $pass =$request->get('pass');
            
             $user=$this->getDoctrine()->getRepository('comicvisorBundle:usuario')->findOneBy(array("nick"=>$nick,"pass"=>$pass));
            if($user)
            {
               $session=$request->getSession();
               $session->set("id",$user->getId());
               $session->set("nick",$user->getNick());
               $session->set("tipo",$user->getTipo());
               
               return $this->redirect($this->generateUrl('comicvisor_homepage'));
            }else
            {
                 $this->get('session')->getFlashBag()->add(
                                'mensaje',
                                'El nombre de usuario y la contraseña no coinciden'
                            );
                    return $this->redirect($this->generateUrl('comicvisor_loginpage'));
            }
            
        }
             
             
        return $this->render('comicvisorBundle:Default:login.html.twig');
        
    }
    
     public function logoutAction(Request $request)
    {
        $session=$request->getSession();
        $session->clear();
        return $this->redirect($this->generateUrl('comicvisor_homepage'));
    }
    
    public function registroAction(Request $request)
    {
        $p=new usuario();
         $form=$this->createForm(new usuarioType(),$p);
          $form->handleRequest($request);
         if($form->isValid())
         {
            $em=$this->getDoctrine()->getManager();
            $em->persist($p);
            $em->flush();
            return $this->redirect($this->generateUrl('comicvisor_homepage'));
         }
         
        return $this->render('comicvisorBundle:Default:registro.html.twig',array("form"=>$form->createView()));
    }
    

    
    public function subidaAction(Request $request)
    {
         $session=$request->getSession();
         if($session->has("id"))
         {
             
               
               if($session->get('tipo')=='admin')
                {
                    return $this->render('comicvisorBundle:Default:subida.html.twig', array('datos' => $datos1,'datos2' => $datos2));
                }
                else{
                    return $this->render('comicvisorBundle:Default:subida.html.twig', array('datos' => $datos1,'datos2' => $datos2));
                }
               
         }
         else{
             return $this->redirect($this->generateUrl('comicvisor_loginpage'));
         }    
    }
    
    public function cdatosAction()
    {
            
             
             $em = $this->getDoctrine()->getManager();
             $datos = $em->createQueryBuilder()
             ->select('c.nombre,c.id')
             ->from('comicvisorBundle:comic', 'c')
             ->orderBy('c.nombre', 'ASC');
             $resultado =$datos->getQuery()->getResult();
             
            
             
        return $this->render('comicvisorBundle:Default:cdatos.html.twig', array('datos' => $resultado));
        
    }
    
     public function cdatos3Action()
    {
            
             
             $em = $this->getDoctrine()->getManager();
             $datos = $em->createQueryBuilder()
             ->select('c.tipo,c.id')
             ->from('comicvisorBundle:categoria', 'c')
             ->orderBy('c.tipo', 'ASC');
             $resultado =$datos->getQuery()->getResult();
             
            
             
        return $this->render('comicvisorBundle:Default:cdatos3.html.twig', array('datos' => $resultado));
        
    }
    
    public function cdatos2Action($id)
    {
            
             
             $em = $this->getDoctrine()->getManager();
             $datos = $em->createQueryBuilder()
             ->select('c.numero,c.id')
             ->from('comicvisorBundle:capitulo', 'c')
             ->where('c.idcomic = :id')
             ->setParameter('id', $id)
             ->orderBy('c.numero', 'ASC');
             $resultado =$datos->getQuery()->getResult();
             
            
             
        return $this->render('comicvisorBundle:Default:cdatos2.html.twig', array('datos' => $resultado));
        
    }
    
    public function errorAction()
    {
        return $this->render('comicvisorBundle:Default:error.html.twig');
    }
    
    public function correctoAction()
    {
        return $this->render('comicvisorBundle:Default:correcto.html.twig');
    }
    
    public function modificarAction(Request $request)
    {
         $session=$request->getSession();
         if($session->has("id"))
         {
            $em = $this->getDoctrine()->getManager();
            $subquery = $em->createQueryBuilder()
             ->select('v.id')
             ->from('comicvisorBundle:comic', 'v')
             ->innerJoin('comicvisorBundle:usuarioSigueComic', 'c', 'WITH', 'v.id = c.idcomic')
             ->where('c.idusuario = :id')
             ->setParameter('id', $session->get('id'));
             
             $ids = $subquery->getQuery()->getResult();
             
             $em = $this->getDoctrine()->getManager();
             $datos = $em->createQueryBuilder()
                 ->select('v.nombre,v.portadaNombre, v.portada, avg(u.voto) as voto')
                 ->from('comicvisorBundle:comic', 'v')
                 ->innerJoin('comicvisorBundle:usuarioVotaComic', 'u', 'WITH', 'v.id = u.idcomic')
                 ->where('v.id IN (:ids)')
                 ->setParameter('ids', array_values($ids))
                 ->groupBy('v.id');
             $datos1 =  $datos->getQuery()->getResult();
             
               return $this->render('comicvisorBundle:Default:modificar.html.twig',array('datos' => $datos1));
         }else
         {
              return $this->redirect($this->generateUrl('comicvisor_loginpage'));
         }
        
        
      
    }
    
}
