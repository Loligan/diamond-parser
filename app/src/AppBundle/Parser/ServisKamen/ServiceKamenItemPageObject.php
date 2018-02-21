<?php
/**
 * Created by PhpStorm.
 * User: meldon
 * Date: 19.02.18
 * Time: 11:55
 */

namespace AppBundle\Parser\ServisKamen;


use AppBundle\Parser\ConnectProcessor;

class ServiceKamenItemPageObject
{
    const BREAD_CRUMB = './/li[@itemprop="itemListElement"]/a/span';
    const TITLE = './/div[@class="container"]//h1';
    const IMAGES = './/div[@class="item"]/a[@image_id]/img';
    const ARTICLE = './/h4[@class="shop-item-artikul"]';
    const BRAND = './/div[@class="shop_brand"]//a';
    const PRICE = './/span[@summ]';
    const CHARACTERISTICS_NAME = './/div[@class="shop-item-info1"]//strong[@class]';
    const CHARACTERISTICS_VALUE = './/div[@class="shop-item-info1"]';
    const DESCRIPTION = './/div[@id="home"]';


    const IGNORE_CRUMBS = ['Главная', 'Продукция'];
    const CONVERTER_WORD = [
        'Алм.' => 'Алмазный',
        'Артикул:' => '',
    ];


    public static function getDataOnPage($html)
    {
        return [
            'crumbs' => self::getCrumbs($html),
            'title' => self::getTitle($html),
            'article' => self::getArticle($html),
            'brand' => self::getBrand($html),
            'price' => self::getPrice($html),
            'characteristics' => self::getCharacteristics($html),
            'images' => self::getImages($html),
            'description' => self::getDescription($html),
        ];
    }

    private static function getCrumbs($html)
    {
        $crumbs = ConnectProcessor::findByXpath($html, self::BREAD_CRUMB);
        $textCrumbs = [];
        for ($i = 0; $i < $crumbs->length; $i++) {
            $text = $crumbs->item($i)->textContent;
            if (!in_array($text, self::IGNORE_CRUMBS)) {
                $textCrumbs[] = $text;
            }
        }
        return $textCrumbs;
    }

    private static function getTitle($html)
    {
        $title = ConnectProcessor::findByXpath($html, self::TITLE);
        if($title->length==0){
            return null;
        }
        $text = $title->item(0)->textContent;
        $text = self::convertWords($text);
        return $text;
    }

    private static function getArticle($html)
    {
        $article = ConnectProcessor::findByXpath($html, self::ARTICLE);
        if($article->length==0){
            return null;
        }
        $text = $article->item(0)->textContent;
        $text = self::convertWords($text);
        return $text;
    }

    private static function getBrand($html)
    {
        $article = ConnectProcessor::findByXpath($html, self::BRAND);
        if($article->length==0){
            return null;
        }
        $text = $article->item(0)->textContent;
        $text = self::convertWords($text);
        return $text;
    }

    private static function getPrice($html)
    {
        $article = ConnectProcessor::findByXpath($html, self::PRICE);
        if($article->length==0){
            return null;
        }
        $text = $article->item(0)->textContent;
        $text = self::convertWords($text);
        return $text;
    }

    private static function getCharacteristics($html)
    {
        $names = self::getCharacteristicsNames($html);
        $values = self::getCharacteristicsValues($html);
        if(is_null($names) || is_null($values)){
            return null;
        }
        $compileData = [];
        foreach ($names as $key => $name) {
            $compileData[$name] = $values[$key];
        }
        return $compileData;
    }

    private static function getCharacteristicsNames($html)
    {
        $names = [];
        $nodes = ConnectProcessor::findByXpath($html, self::CHARACTERISTICS_NAME);
        for ($i = 0; $i < $nodes->length; $i++) {
            $names[] = $nodes->item($i)->textContent;

        }

        return $names;
    }

    private static function getCharacteristicsValues($html)
    {
        $values = [];
        $nodes = ConnectProcessor::findByXpath($html, self::CHARACTERISTICS_VALUE);
        if($nodes->length==0){
            return null;
        }
        for ($i = 0; $i < $nodes->item(0)->childNodes->length; $i++) {
            if ($nodes->item(0)->childNodes->item($i)->nodeName == "#text") {
                $text = $nodes->item(0)->childNodes->item($i)->textContent;
                if (preg_match('/^:.*/', $text)) {
                    $values[] = trim(str_replace(':', '', $text));
                }
            };
        }
        return $values;
    }

    private static function getImages($html)
    {
        $links = [];
        $nodes = ConnectProcessor::findByXpath($html, self::IMAGES);
        for ($i = 0; $i < $nodes->length; $i++) {
            $src = $nodes->item($i)->getAttribute('src');
            $links[] = str_replace('/preview/', '/large/', $src);

        }
        return $links;
    }

    private static function getDescription($html)
    {
        return '';
    }


    private static function convertWords($text)
    {
        foreach (self::CONVERTER_WORD as $oldWord => $newWord) {
            $text = str_replace($oldWord, $newWord, $text);
        }
        return trim($text);
    }


}