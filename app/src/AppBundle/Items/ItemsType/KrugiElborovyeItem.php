<?php
/**
 * Created by PhpStorm.
 * User: meldon
 * Date: 19.02.18
 * Time: 15:58
 */

namespace AppBundle\Items\ItemsType;


class KrugiElborovyeItem
{
private $domain;                 // Домен поставщика
private $name;                   // Наименование
private $profile;                // Профиль круга
private $diameter;               // Внешний диаметр, мм
private $bore;                   // Посадка, мм
private $width;                  // Ширина корпуса, мм
private $layer_height;           // Высота рабочего слоя, мм
private $layer_width;            // Ширина рабочего слоя, мм
private $layer_thickness;        // Толщина рабочего слоя, мм
private $layer_radius;           // Радиус рабочей части, мм
private $layer_corner;           // Угол рабочей части, град
private $material;               // Обрабатываемый материал
private $weight;                 // Вес, г
private $resource;               // Ресурс, м²
private $cbn_grade;              // Марка эльбора
private $hardness;               // Степень твёрдости
private $cbn_concentration;      // Концентрация
private $cbn_carat;              // Масса cbn, карат
private $cbn_bunch;              // Связка
private $grit_mkm;               // Зернистость, мкм
private $grit_mesh;              // Зернистость, MESH
private $grit_grit;              // Зернистость, grit
private $grit_astm;              // Зернистость, ASTM
private $description;            // Характеристики
private $description_big;        // Описание товара
private $price;                  // Цена
private $others;                 // Другие параметры
private $brand;                  // Производитель
private $brand_country;          // Страна бренда
private $origin_country;         // Страна производства
private $url;                    // URL страницы товара
private $img_urls;               // Ссылки на изображения
private $date_add;

    /**
     * KrugiElborovyeItem constructor.
     * @param $domain
     * @param $name
     * @param $profile
     * @param $diameter
     * @param $bore
     * @param $price
     * @param $url
     * @param $date_add
     */
    public function __construct($domain, $name, $profile, $diameter, $bore, $price, $url, $date_add)
    {
        $this->domain = $domain;
        $this->name = $name;
        $this->profile = $profile;
        $this->diameter = $diameter;
        $this->bore = $bore;
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
     * @param mixed $profile
     */
    public function setProfile($profile)
    {
        $this->profile = $profile;
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
     * @param mixed $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    /**
     * @param mixed $layer_height
     */
    public function setLayerHeight($layer_height)
    {
        $this->layer_height = $layer_height;
    }

    /**
     * @param mixed $layer_width
     */
    public function setLayerWidth($layer_width)
    {
        $this->layer_width = $layer_width;
    }

    /**
     * @param mixed $layer_thickness
     */
    public function setLayerThickness($layer_thickness)
    {
        $this->layer_thickness = $layer_thickness;
    }

    /**
     * @param mixed $layer_radius
     */
    public function setLayerRadius($layer_radius)
    {
        $this->layer_radius = $layer_radius;
    }

    /**
     * @param mixed $layer_corner
     */
    public function setLayerCorner($layer_corner)
    {
        $this->layer_corner = $layer_corner;
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
     * @param mixed $cbn_grade
     */
    public function setCbnGrade($cbn_grade)
    {
        $this->cbn_grade = $cbn_grade;
    }

    /**
     * @param mixed $hardness
     */
    public function setHardness($hardness)
    {
        $this->hardness = $hardness;
    }

    /**
     * @param mixed $cbn_concentration
     */
    public function setCbnConcentration($cbn_concentration)
    {
        $this->cbn_concentration = $cbn_concentration;
    }

    /**
     * @param mixed $cbn_carat
     */
    public function setCbnCarat($cbn_carat)
    {
        $this->cbn_carat = $cbn_carat;
    }

    /**
     * @param mixed $cbn_bunch
     */
    public function setCbnBunch($cbn_bunch)
    {
        $this->cbn_bunch = $cbn_bunch;
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




}