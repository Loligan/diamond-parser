<?php
/**
 * Created by PhpStorm.
 * User: meldon
 * Date: 19.02.18
 * Time: 15:41
 */

namespace AppBundle\Items\ItemsType;


class FrezyShlifovalnyeItem
{
private $domain;                     // Домен поставщика
private $name;                       // Наименование
private $cutter_type;                // Тип фрезы
private $diameter;                   // Внешний диаметр/длинна, мм
private $bore;                       // Посадка, мм
private $segments_quantity;          // Количество сегментов
private $segments_height;            // Высота сегмента, мм
private $segments_thickness;         // Толщина сегмента, мм
private $segments_type;              // Тип сегментов
private $material;                   // Обрабатываемый материал
private $weight;                     // Вес, г
private $resource;                   // Ресурс, м²
private $type_number;                // Номер фрезы
private $equipment;                  // Тип оборудования
private $foruse;                     // Тип шлифовки
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
     * FrezyShlifovalnyeItem constructor.
     * @param $domain
     * @param $name
     * @param $diameter
     * @param $bore
     * @param $material
     * @param $price
     * @param $url
     * @param $date_add
     */
    public function __construct($domain, $name, $diameter, $bore, $material, $price, $url, $date_add)
    {
        $this->domain = $domain;
        $this->name = $name;
        $this->diameter = $diameter;
        $this->bore = $bore;
        $this->material = $material;
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
     * @param mixed $cutter_type
     */
    public function setCutterType($cutter_type)
    {
        $this->cutter_type = $cutter_type;
    }

    /**
     * @param mixed $diameter
     */
    public function setDiameter($diameter)
    {
        $this->diameter = $diameter;
    }

    /**
     * @param mixed $bore
     */
    public function setBore($bore)
    {
        $this->bore = $bore;
    }

    /**
     * @param mixed $segments_quantity
     */
    public function setSegmentsQuantity($segments_quantity)
    {
        $this->segments_quantity = $segments_quantity;
    }

    /**
     * @param mixed $segments_height
     */
    public function setSegmentsHeight($segments_height)
    {
        $this->segments_height = $segments_height;
    }

    /**
     * @param mixed $segments_thickness
     */
    public function setSegmentsThickness($segments_thickness)
    {
        $this->segments_thickness = $segments_thickness;
    }

    /**
     * @param mixed $segments_type
     */
    public function setSegmentsType($segments_type)
    {
        $this->segments_type = $segments_type;
    }

    /**
     * @param mixed $material
     */
    public function setMaterial($material)
    {
        $this->material = $material;
    }

    /**
     * @param mixed $weight
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    /**
     * @param mixed $resource
     */
    public function setResource($resource)
    {
        $this->resource = $resource;
    }

    /**
     * @param mixed $type_number
     */
    public function setTypeNumber($type_number)
    {
        $this->type_number = $type_number;
    }

    /**
     * @param mixed $equipment
     */
    public function setEquipment($equipment)
    {
        $this->equipment = $equipment;
    }

    /**
     * @param mixed $foruse
     */
    public function setForuse($foruse)
    {
        $this->foruse = $foruse;
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



}