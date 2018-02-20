<?php
/**
 * Created by PhpStorm.
 * User: meldon
 * Date: 19.02.18
 * Time: 15:32
 */

namespace AppBundle\Items\ItemsType;


class NapilnikiItem
{
private $domain;                     // Домен поставщика
private $name;                       // Наименование
private $shape;                      // Форма
private $long;                       // Длина, мм
private $layer_long;                 // Длина алмазного слоя, мм
private $shank;                      // Хвостовик, мм
private $items_count;                // Набор, шт
private $weight;                     // Вес, г
private $diamond_powder;             // Марка алмазного порошка
private $diamond_concentration;      // Концентрация алмазов
private $diamond_carat;              // Масса алмазов, карат
private $diamond_bunch;              // Связка
private $grit_mkm;                   // Зернистость, мкм
private $grit_mesh;                  // Зернистость, MESH
private $grit_grit;                  // Зернистость, grit
private $grit_astm;                  // Зернистость, ASTM
private $description;                // Характеристики
private $description_big;            // Описание товара
private $price;                      // Цена
private $others;                     // Другие параметры
private $brand;                      // Производитель
private $brand_country;              // Страна бренда
private $origin_country;             // Страна производства
private $url;                        // URL страницы товара
private $img_urls;                   // Ссылки на изображения
private $date_add;

    /**
     * NapilnikiItem constructor.
     * @param $domain
     * @param $name
     * @param $price
     * @param $url
     * @param $date_add
     */
    public function __construct($domain, $name, $price, $url, $date_add)
    {
        $this->domain = $domain;
        $this->name = $name;
        $this->price = $price;
        $this->url = $url;
        $this->date_add = $date_add;
    }

    /**
     * @param mixed $domain
     */
    public function setDomain($domain)
    {
        $this->domain = $domain;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param mixed $shape
     */
    public function setShape($shape)
    {
        $this->shape = $shape;
    }

    /**
     * @param mixed $long
     */
    public function setLong($long)
    {
        $this->long = $long;
    }

    /**
     * @param mixed $layer_long
     */
    public function setLayerLong($layer_long)
    {
        $this->layer_long = $layer_long;
    }

    /**
     * @param mixed $shank
     */
    public function setShank($shank)
    {
        $this->shank = $shank;
    }

    /**
     * @param mixed $items_count
     */
    public function setItemsCount($items_count)
    {
        $this->items_count = $items_count;
    }

    /**
     * @param mixed $weight
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    /**
     * @param mixed $diamond_powder
     */
    public function setDiamondPowder($diamond_powder)
    {
        $this->diamond_powder = $diamond_powder;
    }

    /**
     * @param mixed $diamond_concentration
     */
    public function setDiamondConcentration($diamond_concentration)
    {
        $this->diamond_concentration = $diamond_concentration;
    }

    /**
     * @param mixed $diamond_carat
     */
    public function setDiamondCarat($diamond_carat)
    {
        $this->diamond_carat = $diamond_carat;
    }

    /**
     * @param mixed $diamond_bunch
     */
    public function setDiamondBunch($diamond_bunch)
    {
        $this->diamond_bunch = $diamond_bunch;
    }

    /**
     * @param mixed $grit_mkm
     */
    public function setGritMkm($grit_mkm)
    {
        $this->grit_mkm = $grit_mkm;
    }

    /**
     * @param mixed $grit_mesh
     */
    public function setGritMesh($grit_mesh)
    {
        $this->grit_mesh = $grit_mesh;
    }

    /**
     * @param mixed $grit_grit
     */
    public function setGritGrit($grit_grit)
    {
        $this->grit_grit = $grit_grit;
    }

    /**
     * @param mixed $grit_astm
     */
    public function setGritAstm($grit_astm)
    {
        $this->grit_astm = $grit_astm;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @param mixed $description_big
     */
    public function setDescriptionBig($description_big)
    {
        $this->description_big = $description_big;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @param mixed $others
     */
    public function setOthers($others)
    {
        $this->others = $others;
    }

    /**
     * @param mixed $brand
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;
    }

    /**
     * @param mixed $brand_country
     */
    public function setBrandCountry($brand_country)
    {
        $this->brand_country = $brand_country;
    }

    /**
     * @param mixed $origin_country
     */
    public function setOriginCountry($origin_country)
    {
        $this->origin_country = $origin_country;
    }

    /**
     * @param mixed $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * @param mixed $img_urls
     */
    public function setImgUrls($img_urls)
    {
        $this->img_urls = $img_urls;
    }

    /**
     * @param mixed $date_add
     */
    public function setDateAdd($date_add)
    {
        $this->date_add = $date_add;
    }


}