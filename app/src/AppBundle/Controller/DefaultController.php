<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }

    /**
    * @Route("/show", name="show")
     */
    public function showAction(Request $request){
        $items = $this->getDoctrine()->getRepository('AppBundle:Item')->createQueryBuilder('x')->select('x')->where("x.category!='NO'")->andWhere('x.collectorInfo IS NOT NULL')->getQuery()->getResult();
        return $this->render('parser/show.html.twig',[
            'items'=>$items
        ]);
    }
}
