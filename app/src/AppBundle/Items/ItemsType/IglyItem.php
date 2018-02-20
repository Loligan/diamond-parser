<?php
/**
 * Created by PhpStorm.
 * User: meldon
 * Date: 19.02.18
 * Time: 15:44
 */

namespace AppBundle\Items\ItemsType;


class IglyItem
{
private $domain;               // Домен поставщика
private $name;                 // Наименование
private $diameter;             // Диаметр, мм
private $long;                 // Общая длина, мм
private $foruse;               // Применение
private $corner_alfa;          // Угол конуса (α), град.
private $corner_beta;          // Угол конуса (β), град.
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
     * IglyItem constructor.
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
     * @param mixed $diameter
     */
    public function setDiameter($diameter)
    {
        $this->diameter = $diameter;
    }

    /**
     * @param mixed $long
     */
    public function setLong($long)
    {
        $this->long = $long;
    }

    /**
     * @param mixed $foruse
     */
    public function setForuse($foruse)
    {
        $this->foruse = $foruse;
    }

    /**
     * @param mixed $corner_alfa
     */
    public function setCornerAlfa($corner_alfa)
    {
        $this->corner_alfa = $corner_alfa;
    }

    /**
     * @param mixed $corner_beta
     */
    public function setCornerBeta($corner_beta)
    {
        $this->corner_beta = $corner_beta;
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