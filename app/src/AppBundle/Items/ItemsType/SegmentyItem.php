<?php
/**
 * Created by PhpStorm.
 * User: meldon
 * Date: 19.02.18
 * Time: 15:38
 */

namespace AppBundle\Items\ItemsType;


class SegmentyItem
{
private $domain;                     // Домен поставщика
private $name;                       // Наименование
private $segment_diameter_min;       // Минимальный диаметр, мм
private $segment_diameter_max;       // Максимальный диаметр, мм
private $segments_type;              // Тип сегментов
private $segment_length;             // Длина сегмента, мм
private $segment_thickness;          // Толщина сегмента, мм
private $segment_height;             // Высота сегмента, мм
private $segment_radius;             // Радиус сегмента, мм
private $material;                   // Обрабатываемый материал
private $work_mode;                  // Режим работы
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
     * SegmentyItem constructor.
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
     * @param mixed $segment_diameter_min
     */
    public function setSegmentDiameterMin($segment_diameter_min)
    {
        $this->segment_diameter_min = $segment_diameter_min;
    }

    /**
     * @param mixed $segment_diameter_max
     */
    public function setSegmentDiameterMax($segment_diameter_max)
    {
        $this->segment_diameter_max = $segment_diameter_max;
    }

    /**
     * @param mixed $segments_type
     */
    public function setSegmentsType($segments_type)
    {
        $this->segments_type = $segments_type;
    }

    /**
     * @param mixed $segment_length
     */
    public function setSegmentLength($segment_length)
    {
        $this->segment_length = $segment_length;
    }

    /**
     * @param mixed $segment_thickness
     */
    public function setSegmentThickness($segment_thickness)
    {
        $this->segment_thickness = $segment_thickness;
    }

    /**
     * @param mixed $segment_height
     */
    public function setSegmentHeight($segment_height)
    {
        $this->segment_height = $segment_height;
    }

    /**
     * @param mixed $segment_radius
     */
    public function setSegmentRadius($segment_radius)
    {
        $this->segment_radius = $segment_radius;
    }

    /**
     * @param mixed $material
     */
    public function setMaterial($material)
    {
        $this->material = $material;
    }

    /**
     * @param mixed $work_mode
     */
    public function setWorkMode($work_mode)
    {
        $this->work_mode = $work_mode;
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



}