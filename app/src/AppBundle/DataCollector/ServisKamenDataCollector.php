<?php
/**
 * Created by PhpStorm.
 * User: meldon
 * Date: 21.02.18
 * Time: 10:13
 */

namespace AppBundle\DataCollector;


use AppBundle\Entity\Item;
use AppBundle\Entity\Page;
use AppBundle\Entity\Queue;

class ServisKamenDataCollector extends DataCollector
{

    const CRUMBS_CATEGORY = [
        'Алмазные гибкие диски для полировки камня' => 'Алмазные гибкие шлифовальные круги',
        'Фрезы алмазные торцевые (ФАТ) для шлифовки камня' => 'Алмазные шлифовальные фрезы',
        'Алмазный канат' => 'Алмазные канаты',
        'Алмазные напильники ORDG' => 'Алмазные напильники',
        'Отрезные диски для сухой резки камня' => 'Алмазные отрезные диски',
        'Станочный шлифовально-полировальный инструмент'=>'Алмазные шлифовальные фрезы'
    ];

    public function updateData(Page $page, array $data)
    {
        print 'ID: '.$page->getId().PHP_EOL;
        print '1'.PHP_EOL;
        $item = $this->getDoctrine()->getRepository('AppBundle:Item');
        $item = $item->findOneBy(['page' => $page]);
        if (is_null($item)) {
            $item = new Item();
            $item->setPage($page);
        }
        $item->setStatusParse(Item::STAUS_PARSE_OK);

        print '2'.PHP_EOL;

        $catalogCategory = $this->getCatalogCategory($data["crumbs"]);
        $item->setCategory($catalogCategory);
        if (is_null($catalogCategory)) {
            $item->setStatusParse(Item::STAUS_PARSE_NOT_CATEGORY);
        }
        print '3'.PHP_EOL;
        $item->setCollectorInfo(json_encode($data['crumbs']));
        $this->getDoctrine()->getManager()->merge($item);
        print '4'.PHP_EOL;
        $this->getDoctrine()->getManager()->flush();
        print '5'.PHP_EOL;
    }


    private function getCatalogCategory($breadcrumbs)
    {
        var_dump($breadcrumbs);
        var_dump(self::CRUMBS_CATEGORY);
        foreach ($breadcrumbs as $breadcrumb) {

            if (key_exists($breadcrumb, self::CRUMBS_CATEGORY)) {
                return $breadcrumb;
            }
        }
        return null;
    }
}