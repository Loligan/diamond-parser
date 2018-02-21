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
        'Алмазные гибкие диски (для работы с водой)'=> 'Алмазные гибкие шлифовальные круги',
        'Алмазные гибкие диски (для работы без воды)'=> 'Алмазные гибкие шлифовальные круги',
        'Основы для шлифовально-полировальных дисков'=>'Алмазные шлифовальные круги',
        'Профильные фрезы'=>'Алмазные профильные фрезы',
        'Фрезы алмазные торцевые китайского производства'=>'Алмазные профильные фрезы',
        'Фрезы алмазные торцевые украинского производства'=>'Алмазные профильные фрезы',
        'Фрезы алмазные'=>'Алмазные профильные фрезы',
        'Алмазные коронки'=>'Алмазные коронки, Свёрла',
        'Алмазные напильники'=>'Алмазные напильники',
        'Алмазный канат'=>'Алмазные канаты',
        'Отрезные диски для сухой резки камня'=>'NO',
        'Алмазный шлифовально полировальный инструмент Российского производства '=>'NO',
        'Алмазный шлифовально полировальный инструмент Белорусского производства'=>'NO',
        'Алмазные шлифовальные диски на полимерной основе Украинского производства'=>'NO',
        'Алмазный шлифовально полировальный инструмент Украинского производства'=>'NO',
        'Шлифовально-полировальные диски Китайского производства'=>'NO',
        'Фрезы алмазные торцевые корейского производства (EHWA)'=>'NO',



    ];

    public function updateData(Page $page, array $data)
    {
        print 'ID: ' . $page->getId() . PHP_EOL;
        $item = $this->getDoctrine()->getRepository('AppBundle:Item');
        $item = $item->findOneBy(['page' => $page]);
        if (is_null($item)) {
            $item = new Item();
            $item->setPage($page);
        }
        $item->setStatusParse(Item::STAUS_PARSE_OK);

        $catalogCategory = $this->getCatalogCategory($data["crumbs"]);
        $item->setCategory($catalogCategory);
        if (is_null($catalogCategory)) {
            $item->setStatusParse(Item::STAUS_PARSE_NOT_CATEGORY);
        }
        $item->setCollectorInfo(json_encode($data['crumbs']));
        $this->getDoctrine()->getManager()->merge($item);
        $this->getDoctrine()->getManager()->flush();
    }


    private function getCatalogCategory($breadcrumbs)
    {
        if(count($breadcrumbs)<1){
            return null;
        }
        foreach ($breadcrumbs as $breadcrumb) {
            if (key_exists($breadcrumb, self::CRUMBS_CATEGORY)) {
                return self::CRUMBS_CATEGORY[$breadcrumb];
            }
        }

        var_dump($breadcrumbs);
        die();
        return null;

    }
}