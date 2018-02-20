<?php
/**
 * Created by PhpStorm.
 * User: meldon
 * Date: 19.02.18
 * Time: 11:47
 */

namespace AppBundle\Parser;


use AppBundle\Entity\Queue;
use AppBundle\Parser\ServisKamen\ServiceKamenParser;
use Doctrine\Bundle\DoctrineBundle\Registry;

class QueueRunner
{
    /**@var Registry $doctrine */
    private $doctrine;

    /**
     * QueueRunner constructor.
     * @param $doctrine
     */
    public function __construct(Registry $doctrine)
    {
        $this->doctrine = $doctrine;
    }


    public function runQueue(Queue $queue)
    {
        try {
            switch ($queue->getService()) {
                case ServiceKamenParser::SERVICE_NAME:
                    $skp = new ServiceKamenParser($queue, $this->doctrine);
                    $skp->runParser();
            }
            $queue->setStatus(Queue::STATUS_PASS);
        } catch (\Exception $e) {
            $queue->setStatus(Queue::STATUS_FAIL);
        }
        $this->doctrine->getManager()->merge($queue);
        $this->doctrine->getManager()->flush();
    }
}