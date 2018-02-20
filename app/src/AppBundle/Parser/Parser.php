<?php

namespace AppBundle\Parser;


use AppBundle\Entity\Queue;
use Doctrine\Bundle\DoctrineBundle\Registry;

abstract class Parser
{
    /**@var Queue $queue */
    private $queue;
    /**@var Registry $doctrine */
    private $doctrine;

    /**
     * Parser constructor.
     * @param Queue $queue
     */
    public function __construct(Queue $queue, Registry $doctrine)
    {
        $this->queue = $queue;
        $this->doctrine = $doctrine;
    }

    /**
     * @return Queue
     */
    public function getQueue()
    {
        return $this->queue;
    }

    /**
     * @return Registry
     */
    public function getDoctrine()
    {
        return $this->doctrine;
    }

    /**
     * @return \Doctrine\Common\Persistence\ObjectManager
     */
    public function getEntityManager(){
        return $this->doctrine->getManager();
    }


    public abstract function runParser();

}