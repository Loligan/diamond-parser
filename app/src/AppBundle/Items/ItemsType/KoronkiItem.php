<?php
/**
 * Created by PhpStorm.
 * User: meldon
 * Date: 19.02.18
 * Time: 15:30
 */

namespace AppBundle\Items\ItemsType;


class KoronkiItem
{
    private $domain;                     // Домен поставщика
    private $name;                       // Наименование
    private $edge_type;                  // Тип режущей кромки
    private $segments_quantity;          // Количество сегментов
    private $diameter;                   // Внешний диаметр, мм
    private $diameter2;                  // Внутренний диаметр, мм
    private $shank;                      // Хвостовик
    private $material;                   // Обрабатываемый материал
    private $work_long;                  // Рабочая длина, мм
    private $long;                       // Длина сверла, мм
    private $weight;                     // Вес, г
    private $segments_height;            // Высота сегмента, мм
    private $segments_thickness;         // Толщина сегмента, мм
    private $mark;                       // Марка сверла
    private $equipment;                  // Тип оборудования
    private $equipment_capacity;         // Мощность оборудования, кВт
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
     * KoronkiItem constructor.
     * @param $domain
     * @param $name
     * @param $edge_type
     * @param $diameter
     * @param $shank
     * @param $material
     * @param $price
     * @param $url
     * @param $date_add
     */
    public function __construct($domain, $name, $edge_type, $diameter, $shank, $material, $price, $url, $date_add)
    {
        $this->domain = $domain;
        $this->name = $name;
        $this->edge_type = $edge_type;
        $this->diameter = $diameter;
        $this->shank = $shank;
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
     * @param mixed $edge_type
     */
    public function setEdgeType($edge_type)
    {
        $this->edge_type = $edge_type;
    }

    /**
     * @param mixed $segments_quantity
     */
    public function setSegmentsQuantity($segments_quantity)
    {
        $this->segments_quantity = $segments_quantity;
    }

    /**
     * @param mixed $diameter
     */
    public function setDiameter($diameter)
    {
        $this->diameter = $diameter;
    }

    /**
     * @param mixed $diameter2
     */
    public function setDiameter2($diameter2)
    {
        $this->diameter2 = $diameter2;
    }

    /**
     * @param mixed $shank
     */
    public function setShank($shank)
    {
        $this->shank = $shank;
    }

    /**
     * @param mixed $material
     */
    public function setMaterial($material)
    {
        $this->material = $material;
    }

    /**
     * @param mixed $work_long
     */
    public function setWorkLong($work_long)
    {
        $this->work_long = $work_long;
    }

    /**
     * @param mixed $long
     */
    public function setLong($long)
    {
        $this->long = $long;
    }

    /**
     * @param mixed $weight
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
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
     * @param mixed $mark
     */
    public function setMark($mark)
    {
        $this->mark = $mark;
    }

    /**
     * @param mixed $equipment
     */
    public function setEquipment($equipment)
    {
        $this->equipment = $equipment;
    }

    /**
     * @param mixed $equipment_capacity
     */
    public function setEquipmentCapacity($equipment_capacity)
    {
        $this->equipment_capacity = $equipment_capacity;
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
            'edge_type' => $this->edge_type,
            'segments_quantity' => $this->segments_quantity,
            'diameter' => $this->diameter,
            'diameter2' => $this->diameter2,
            'shank' => $this->shank,
            'material' => $this->material,
            'work_long' => $this->work_long,
            'long' => $this->long,
            'weight' => $this->weight,
            'segments_height' => $this->segments_height,
            'segments_thickness' => $this->segments_thickness,
            'mark' => $this->mark,
            'equipment' => $this->equipment,
            'equipment_capacity' => $this->equipment_capacity,
            'work_mode' => $this->work_mode,
            'diamond_powder' => $this->diamond_powder,
            'diamond_concentration' => $this->diamond_concentration,
            'diamond_carat' => $this->diamond_carat,
            'diamond_bunch' => $this->diamond_bunch,
            'grit_mkm' => $this->grit_mkm,
            'grit_mesh' => $this->grit_mesh,
            'grit_grit' => $this->grit_grit,
            'grit_astm' => $this->grit_astm,
            'description' => $this->description,
            'description_big' => $this->description_big,
            'price' => $this->price,
            'others' => $this->others,
            'brand' => $this->brand,
            'brand_country' => $this->brand_country,
            'origin_country' => $this->origin_country,
            'url' => $this->url,
            'img_urls' => $this->img_urls,
            'date_add' => $this->date_add,
        ];
        $resultArray = [];
        foreach ($arrData as $key => $value) {
            if (!is_null($value) || trim($value) != '') {
                $resultArray[$key] = $value;
            }
        }
        return $resultArray;

    }

}