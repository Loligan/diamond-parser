<?php
/**
 * Created by PhpStorm.
 * User: meldon
 * Date: 21.02.18
 * Time: 10:33
 */

namespace AppBundle\Command;


use AppBundle\DataCollector\ServisKamenDataCollector;
use AppBundle\Entity\Page;
use AppBundle\Parser\ConnectProcessor;
use AppBundle\Parser\ServisKamen\ServiceKamenItemPageObject;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ggCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('gg');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $dctr = $this->getContainer()->get('doctrine');
//        $gg = $dctr->getRepository('AppBundle:Page')->findBy(['id'=>871],[],10,0);
        $gg = $dctr->getRepository('AppBundle:Page')->findAll();
        foreach ($gg as $item){
            $this->updateData($item);
        }
    }

    private function updateData(Page $page){
        $html = $page->getHtmlData();
        print 'GET DATA ON PAGE'.PHP_EOL;
        $data = ServiceKamenItemPageObject::getDataOnPage(base64_decode($html));
        $skdc = new ServisKamenDataCollector($this->getContainer()->get('doctrine'));
        print 'UPDATE DATA'.PHP_EOL;
        $skdc->updateData($page,$data);
    }
}