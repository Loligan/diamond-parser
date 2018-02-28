<?php
/**
 * Created by PhpStorm.
 * User: meldon
 * Date: 26.02.18
 * Time: 13:30
 */

namespace AppBundle\Consumer;


use AppBundle\Entity\Queue;
use AppBundle\Parser\QueueRunner;
use AppBundle\Parser\ServisKamen\ServiceKamenParser;
use Doctrine\Bundle\DoctrineBundle\Registry;
use OldSound\RabbitMqBundle\RabbitMq\ConsumerInterface;
use PhpAmqpLib\Message\AMQPMessage;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ParseSiteConsumer extends Controller implements ConsumerInterface
{

    private $doctrine;
    private $queueRunner;

    public function __construct(Registry $doctrine, QueueRunner $queueRunner)
    {
        $this->doctrine = $doctrine;
        $this->queueRunner = $queueRunner;
    }

    /**
     * @param AMQPMessage $msg The message
     * @return mixed false to reject and requeue, any other value to acknowledge
     */
    public function execute(AMQPMessage $msg)
    {
        $body = json_decode($msg->getBody(), true);
        $ids = $body['ids'];
        foreach ($ids as $id){
            $queue = $this->doctrine->getRepository('AppBundle:Queue')->find($id);
            $this->queueRunner->runQueue($queue);
        }
    }
}