<?php
/**
 * Created by PhpStorm.
 * User: meldon
 * Date: 19.02.18
 * Time: 15:20
 */

namespace AppBundle\Items\ItemsType;


class AgshkItem
{
    private $domain;               // Домен поставщика
    private $name;                 // Наименование
    private $diameter;             // Внешний диаметр, мм
    private $grit_agshk;           // Зернистость
    private $type_number;          // Номер
    private $segments_height;      // Высота рабочего слоя, мм
    private $work_mode;            // Режим работы
    private $material = '';             // Обрабатываемый материал
    private $line;                 // Серия
    private $fasteners;            // Крепление
    private $surface;              // Свойства поверхности диска
    private $items_count;          // Набор, шт
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
     * AgshkItem constructor.
     * @param $domain
     * @param $name
     * @param $diameter
     * @param $price
     * @param $url
     * @param $date_add
     */
    public function __construct($domain, $name, $diameter, $price, $url, $date_add)
    {
        $this->domain = $domain;
        $this->name = $name;
        $this->diameter = $diameter;
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
     * @param mixed $grit_agshk
     */
    public function setGritAgshk($grit_agshk)
    {
        $this->grit_agshk = $grit_agshk;
    }

    /**
     * @param mixed $type_number
     */
    public function setTypeNumber($type_number)
    {
        $this->type_number = $type_number;
    }

    /**
     * @param mixed $segments_height
     */
    public function setSegmentsHeight($segments_height)
    {
        $this->segments_height = $segments_height;
    }

    /**
     * @param mixed $work_mode
     */
    public function setWorkMode($work_mode)
    {
        $this->work_mode = $work_mode;
    }

    /**
     * @param string $material
     */
    public function setMaterial($material)
    {
        $this->material = $material;
    }

    /**
     * @param mixed $line
     */
    public function setLine($line)
    {
        $this->line = $line;
    }

    /**
     * @param mixed $fasteners
     */
    public function setFasteners($fasteners)
    {
        $this->fasteners = $fasteners;
    }

    /**
     * @param mixed $surface
     */
    public function setSurface($surface)
    {
        $this->surface = $surface;
    }

    /**
     * @param mixed $items_count
     */
    public function setItemsCount($items_count)
    {
        $this->items_count = $items_count;
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

    public function compileToArray()
    {
        $arrData = [
            'domain' => $this->domain,
            'name' => $this->name,
            'diameter' => $this->diameter,
            'grit_agshk' => $this->grit_agshk,
            'type_number' => $this->type_number,
            'segments_height' => $this->segments_height,
            'work_mode' => $this->work_mode,
            'material' => $this->material,
            'line' => $this->line,
            'fasteners' => $this->fasteners,
            'surface' => $this->surface,
            'items_count' => $this->items_count,
            'description' => $this->description,
            'description_big' => $this->description_big,
            'price' => $this->price,
            'others' => $this->others,
            'brand' => $this->brand,
            'brand_country' => $this->brand_country,
            'origin_country' => $this->origin_country,
            'url' => $this->url,
            'img_urls' => $this->img_urls,
            'date_add' => $this->date_add
        ];
        $resultArray = [];
        foreach ($arrData as $key => $value) {
            if (!is_null($value) || trim($value)!='') {
                $resultArray[$key] = $value;
            }
        }
        return $resultArray;

    }


}