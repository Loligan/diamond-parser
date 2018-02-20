<?php
/**
 * Created by PhpStorm.
 * User: meldon
 * Date: 19.02.18
 * Time: 11:55
 */

namespace AppBundle\Parser\ServisKamen;


use AppBundle\Parser\ConnectProcessor;

class ServiceKamenSubSubCategoryPageObject
{

    const LINKS_CATEGORY = './/div[./div[@class="shop_cat_img"]]/a';

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
                'text_sub_sub_category'=>$elements->item($i)->textContent
            ];
        }
        return $links;
    }

}