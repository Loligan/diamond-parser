<?php

namespace AppBundle\Controller;

use AppBundle\Filter\ItemFilter;
use AppBundle\Filter\ItemFilterType;
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
        $repItem = $this->getDoctrine()->getRepository('AppBundle:Item');
        $filter = new ItemFilter();
        $filterForm = $this->createForm(ItemFilterType::class, $filter, []);
        $filterForm->handleRequest($request);
        $list = $repItem->getList($filter);
        $pagination = $this->get('knp_paginator')->paginate(
            $list,
            $request->query->get('page', 1),
            $request->query->get('per_page', 150)
        );

        return $this->render('parser/show.html.twig',[
            'form' => $filterForm->createView(),
            'pagination' => $pagination,
            'stats'=>$repItem->getStats()
        ]);
    }
}
