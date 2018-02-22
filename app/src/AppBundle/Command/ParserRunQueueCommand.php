<?php

namespace AppBundle\Command;

use AppBundle\Entity\Queue;
use AppBundle\Parser\QueueRunner;
use AppBundle\Parser\ServisKamen\ServiceKamenParser;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class ParserRunQueueCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('parser:run:queue')
            ->setDescription('...')
            ->addArgument('argument', InputArgument::OPTIONAL, 'Argument description')
            ->addOption('option', null, InputOption::VALUE_NONE, 'Option description');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $qr = $this->getContainer()->get('queue_runer');

//        $qr->runQueue(new Queue(ServiceKamenParser::SERVICE_NAME, ServiceKamenParser::QUEUE_CATEGORY,json_encode(['link'=>'https://www.servis-kamen.ru/shop/almaznyy-instrument-dlya-obrabotki-kamnya/'])));
//
        foreach ($queue = $this->getContainer()->get('doctrine')->getRepository('AppBundle:Queue')
            ->findBy([
                'service' => ServiceKamenParser::SERVICE_NAME,
                'nameQueue' => ServiceKamenParser::QUEUE_CATEGORY,
                'status' => Queue::STATUS_IN_PROGRESS
            ]) as $queue) {
            $qr->runQueue($queue);
        }

//        foreach ($queue = $this->getContainer()->get('doctrine')->getRepository('AppBundle:Queue')
//            ->findBy([
//                'service' => ServiceKamenParser::SERVICE_NAME,
//                'nameQueue' => ServiceKamenParser::QUEUE_LIST_SUB_SUB_CATEGORIES,
//                'status' => Queue::STATUS_IN_PROGRESS
//            ]) as $queue) {
//            $qr->runQueue($queue);
//        }


//        foreach ($queue = $this->getContainer()->get('doctrine')->getRepository('AppBundle:Queue')
//            ->findBy([
//                'service' => ServiceKamenParser::SERVICE_NAME,
//                'nameQueue' => ServiceKamenParser::QUEUE_LIST_ITEMS,
//                'status' => Queue::STATUS_IN_PROGRESS
//            ]) as $queue) {
//            $qr->runQueue($queue);
//        }

//        foreach ($queue = $this->getContainer()->get('doctrine')->getRepository('AppBundle:Queue')
//            ->findBy([
//                'service' => ServiceKamenParser::SERVICE_NAME,
//                'nameQueue' => ServiceKamenParser::QUEUE_ITEMS_PAGE_HTML,
//                'status' => Queue::STATUS_IN_PROGRESS
//            ]) as $queue) {
//            $qr->runQueue($queue);
//        }


    }

}
