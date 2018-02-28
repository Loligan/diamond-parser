<?php
/**
 * Created by PhpStorm.
 * User: meldon
 * Date: 26.02.18
 * Time: 14:17
 */

namespace AppBundle\Command;


use AppBundle\Entity\Queue;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class SendInRabbitCommand  extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('parser:queue:send');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $result = $this->checkQueueParseSite();
        $queue = $this->getContainer()->get('doctrine')->getRepository('AppBundle:Queue');
        if (!$result) {
            $queues = $queue->findBy(['status'=>Queue::STATUS_IN_PROGRESS],[],400);
            $ids= [];
            foreach ($queues as $queue){
                $ids[]=$queue->getId();
            }
            $this->sendInParseSite(['ids'=>$ids]);
            print 'SEND IN QUEUE: '.count($ids).PHP_EOL;
        }

    }

    private function checkQueueParseSite()
    {
        /** @var \OldSound\RabbitMqBundle\RabbitMq\Producer $rabbit */
        $rabbit = $this->getContainer()->get('old_sound_rabbit_mq.parse_site_consumer_producer');
        if($rabbit->getChannel()->queue_declare('parse_site_consumer', false, true, false, false)[1]){
            return true;
        };
    }

    public function sendInParseSite($ids){
        $rabbit = $this->getContainer()->get('old_sound_rabbit_mq.parse_site_consumer_producer');
        $rabbit->publish(json_encode($ids));
    }

}