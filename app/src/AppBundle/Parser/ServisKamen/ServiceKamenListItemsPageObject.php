<?php
/**
 * Created by PhpStorm.
 * User: meldon
 * Date: 19.02.18
 * Time: 11:55
 */

namespace AppBundle\Parser\ServisKamen;


use AppBundle\Parser\ConnectProcessor;

class ServiceKamenListItemsPageObject
{

    const LINKS_CATEGORY = './/div[@class="shops-title"]/a';

    /**
     * @param $url
     * @return array
     */
    public static function getAllLinks($url){
        $html = ConnectProcessor::getHtml(ConnectProcessor::getOptions($url));
        $elements = ConnectProcessor::findByXpath($html,self::LINKS_CATEGORY);
        $links = [];
        for ($i=0;$i<$elements->length;$i++){
            $links[]=[
                'link'=>$elements->item($i)->getAttribute('href'),
                'text_item'=>$elements->item($i)->textContent
            ];
        }
        return $links;
    }

}