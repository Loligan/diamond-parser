<?php
/**
 * Created by PhpStorm.
 * User: meldon
 * Date: 19.02.18
 * Time: 15:26
 */

namespace AppBundle\Items\ItemsType;


class BruskiItem
{
    private $domain;                     // Домен поставщика
    private $name;                       // Наименование
    private $block;                      // Бруски
    private $label;                      // Маркировка
    private $handheld_type;              // Тип (для ручных)
    private $long;                       // Длина, мм
    private $width;                      // Ширина, мм
    private $height;                     // Высота, мм
    private $layer_thickness;            // Толщина слоя, мм
    private $radius;                     // Радиус, мм
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
     * BruskiItem constructor.
     * @param $domain
     * @param $name
     * @param $block
     * @param $price
     * @param $url
     * @param $date_add
     */
    public function __construct($domain, $name, $block, $price, $url, $date_add)
    {
        $this->domain = $domain;
        $this->name = $name;
        $this->block = $block;
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
     * @param mixed $block
     */
    public function setBlock($block)
    {
        $this->block = $block;
    }

    /**
     * @param mixed $label
     */
    public function setLabel($label)
    {
        $this->label = $label;
    }

    /**
     * @param mixed $handheld_type
     */
    public function setHandheldType($handheld_type)
    {
        $this->handheld_type = $handheld_type;
    }

    /**
     * @param mixed $long
     */
    public function setLong($long)
    {
        $this->long = $long;
    }

    /**
     * @param mixed $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    /**
     * @param mixed $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * @param mixed $layer_thickness
     */
    public function setLayerThickness($layer_thickness)
    {
        $this->layer_thickness = $layer_thickness;
    }

    /**
     * @param mixed $radius
     */
    public function setRadius($radius)
    {
        $this->radius = $radius;
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


}