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
                case self::QUEUE_SUB_CATEGORY:
                    $this->getSubCategoryAndMakeQueue();
                    break;
                case self::QUEUE_LIST_SUB_SUB_CATEGORIES:
                    $this->getSubSubCategoryAndMakeQueue();
                    break;
                case self::QUEUE_LIST_ITEMS:
                    $this->getItemsAndMakeQueue();
                    break;
                case self::QUEUE_ITEMS_PAGE_HTML:
                    $this->getItemHtmlAndSave();
                    break;
                default:
                    throw new \Exception('Queue with name "' . $this->getQueue()->getNameQueue() . '" not found');
            }
    }

    private function getCategoryAndMakeQueue()
    {
        $links = ServiceKamenCategoryPageObject::getAllLinks();
        foreach ($links as $link) {
            $this->getEntityManager()->merge(
                new Queue(self::SERVICE_NAME, self::QUEUE_SUB_CATEGORY, json_encode($link))
            );
        }
        $this->getEntityManager()->flush();
    }

    public function getSubCategoryAndMakeQueue()
    {
        $data = json_decode($this->getQueue()->getData(), true);

        $links = ServiceKamenSubCategoryPageObject::getAllLinks($data['link']);
        foreach ($links as $link) {
            $this->getEntityManager()->merge(new Queue(self::SERVICE_NAME, self::QUEUE_LIST_SUB_SUB_CATEGORIES, json_encode($link)));
        }
        $this->getEntityManager()->flush();
    }

    public function getSubSubCategoryAndMakeQueue()
    {
        $data = json_decode($this->getQueue()->getData(), true);
        $links = ServiceKamenSubCategoryPageObject::getAllLinks($data['link']);
        foreach ($links as $link) {
            $this->getEntityManager()->merge(new Queue(self::SERVICE_NAME, self::QUEUE_LIST_ITEMS, json_encode($link)));
        }
        $this->getEntityManager()->flush();
    }

    public function getItemsAndMakeQueue()
    {
        $data = json_decode($this->getQueue()->getData(), true);
        $links = ServiceKamenListItemsPageObject::getAllLinks($data['link']);
        foreach ($links as $link) {
            $this->getEntityManager()->merge(new Queue(self::SERVICE_NAME, self::QUEUE_ITEMS_PAGE_HTML, json_encode($link)));
        }
        $this->getEntityManager()->flush();
    }

    public function getItemHtmlAndSave()
    {
        $data = json_decode($this->getQueue()->getData(), true);
        $url = $data['link'];
        $html = ConnectProcessor::getHtml(ConnectProcessor::getOptions($url));
        $pageEntity = $this->getDoctrine()->getRepository('AppBundle:Page')->findOneBy(["linkPage"=>$url]);
        if($pageEntity!=null){
            $pageEntity->setHtmlData( base64_encode($html));
            $pageEntity->setDateUpdate(new \DateTime('now'));
        }else{
            $pageEntity = new Page(
                base64_encode($html),
                self::SERVICE_NAME,
                $url
            );
        }
        print $pageEntity->getLinkPage().PHP_EOL;
        $this->getEntityManager()->merge($pageEntity);
        $this->getEntityManager()->flush();
    }


}