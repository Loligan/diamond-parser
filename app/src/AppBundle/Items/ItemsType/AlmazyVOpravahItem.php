<?php
/**
 * Created by PhpStorm.
 * User: meldon
 * Date: 19.02.18
 * Time: 15:42
 */

namespace AppBundle\Items\ItemsType;


class AlmazyVOpravahItem
{
private $domain;               // Домен поставщика
private $name;                 // Наименование
private $shank_type;           // Тип хвостовика
private $shank_diameter;       // Диаметр хвостовика, мм
private $frame_diameter;       // Диаметр оправы, мм
private $holder_corner;        // Угол державки
private $long;                 // Общая длина, мм
private $designation;          // Обозначение
private $diamond_carat;        // Масса алмаза, карат
private $description;          // Характеристики
private $description_big;      // Описание товара
private $price;                // Цена
private $others;               // Другие параметры
private $brand;                // Производитель
private $brand_country;        // Страна бренда
private $origin_country;       // Страна производства
private $url;                  // URL страницы товара
private $img_urls;             // Ссылки на изображения
private $date_add;

    /**
     * AlmazyVOpravahItem constructor.
     * @param $domain
     * @param $name
     * @param $shank_type
     * @param $price
     * @param $url
     * @param $date_add
     */
    public function __construct($domain, $name, $shank_type, $price, $url, $date_add)
    {
        $this->domain = $domain;
        $this->name = $name;
        $this->shank_type = $shank_type;
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
     * @param mixed $shank_type
     */
    public function setShankType($shank_type)
    {
        $this->shank_type = $shank_type;
    }

    /**
     * @param mixed $shank_diameter
     */
    public function setShankDiameter($shank_diameter)
    {
        $this->shank_diameter = $shank_diameter;
    }

    /**
     * @param mixed $frame_diameter
     */
    public function setFrameDiameter($frame_diameter)
    {
        $this->frame_diameter = $frame_diameter;
    }

    /**
     * @param mixed $holder_corner
     */
    public function setHolderCorner($holder_corner)
    {
        $this->holder_corner = $holder_corner;
    }

    /**
     * @param mixed $long
     */
    public function setLong($long)
    {
        $this->long = $long;
    }

    /**
     * @param mixed $designation
     */
    public function setDesignation($designation)
    {
        $this->designation = $designation;
    }

    /**
     * @param mixed $diamond_carat
     */
    public function setDiamondCarat($diamond_carat)
    {
        $this->diamond_carat = $diamond_carat;
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