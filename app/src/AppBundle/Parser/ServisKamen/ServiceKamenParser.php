<?php

namespace AppBundle\Parser\ServisKamen;

use AppBundle\Entity\Page;
use AppBundle\Entity\Queue;
use AppBundle\Parser\ConnectProcessor;
use AppBundle\Parser\Parser;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\DomCrawler\Link;

class ServiceKamenParser extends Parser
{
    const SERVICE_NAME = 'SERVIS_KAMEN';

    const URL = 'https://www.servis-kamen.ru/';


    const QUEUE_CATEGORY = 'CATEGORY';
    const QUEUE_SUB_CATEGORY = 'SUB_CATEGORY';
    const QUEUE_LIST_SUB_SUB_CATEGORIES = 'LIST_SUB_SUB_CATEGORIES';
    const QUEUE_LIST_ITEMS = 'LIST_ITEMS';
    const QUEUE_ITEMS_PAGE_HTML = 'ITEMS_PAGE_HTML';

    public function runParser()
    {
        switch ($this->getQueue()->getNameQueue()) {
            case self::QUEUE_CATEGORY:
                $this->getCategoryAndMakeQueue();
                break;
            default:
                throw new \Exception('Queue with name "' . $this->getQueue()->getNameQueue() . '" not found');
        }
    }

    private function getCategoryAndMakeQueue()
    {
        $data = json_decode($this->getQueue()->getData(), true);
        $url = $data['link'];
        $html = ConnectProcessor::getHtml(ConnectProcessor::getOptions($url));
        if (ServiceKamenCategoryPageObject::checkIsCategoryPage($html)) {
            $links = ServiceKamenCategoryPageObject::getAllLinks($html);
            foreach ($links as $link) {
                $this->getEntityManager()->merge(
                    new Queue(self::SERVICE_NAME, self::QUEUE_CATEGORY, json_encode($link))
                );
            }
        } else {
            $pageEntity = $this->getDoctrine()->getRepository('AppBundle:Page')->findOneBy(["linkPage" => $url]);
            if ($pageEntity != null) {
                $pageEntity->setHtmlData(base64_encode($html));
                $pageEntity->setDateUpdate(new \DateTime('now'));
            } else {
                $pageEntity = new Page(
                    base64_encode($html),
                    self::SERVICE_NAME,
                    $url
                );
            }
            print $pageEntity->getLinkPage() . PHP_EOL;
            $this->getEntityManager()->merge($pageEntity);
        }


        $this->getEntityManager()->flush();
    }

    public function getDataFromItemPage($html)
    {

    }


}