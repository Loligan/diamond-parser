<?php
/**
 * Created by PhpStorm.
 * User: meldon
 * Date: 19.02.18
 * Time: 11:55
 */

namespace AppBundle\Parser\ServisKamen;


use AppBundle\Parser\ConnectProcessor;

class ServiceKamenCategoryPageObject
{
    const URL_CATEGORY = 'shop/almaznyy-instrument-dlya-obrabotki-kamnya/';

    const LINKS_CATEGORY = './/div[./div[@class="shop_cat_img"]]/a';

    public static function getAllLinks(){
        $html = ConnectProcessor::getHtml(ConnectProcessor::getOptions(ServiceKamenParser::URL.self::URL_CATEGORY));
        $elements = ConnectProcessor::findByXpath($html,self::LINKS_CATEGORY);
        $links = [];
        for ($i=0;$i<$elements->length;$i++){
            $links[]=[
                'link'=>$elements->item($i)->getAttribute('href'),
                'text_category'=>$elements->item($i)->textContent
            ];
        }

        return $links;
    }

}