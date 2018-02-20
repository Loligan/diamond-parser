<?php
/**
 * Created by PhpStorm.
 * User: meldon
 * Date: 19.02.18
 * Time: 15:37
 */

namespace AppBundle\Items\ItemsType;


class FrezyProfilnyeItem
{
private $domain;                     // Домен поставщика
private $name;                       // Наименование
private $profile;                    // Профиль фрезы
private $profile_height;             // Высота профиля, мм
private $shank;                      // Крепление
private $diameter;                   // Диаметр, мм
private $type_number;                // Номер фрезы
private $segment_type;               // Спрособ изготовления
private $material;                   // Обрабатываемый материал
private $equipment;                  // Тип оборудования
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
     * FrezyProfilnyeItem constructor.
     * @param $domain
     * @param $name
     * @param $profile
     * @param $shank
     * @param $material
     * @param $price
     * @param $url
     * @param $date_add
     */
    public function __construct($domain, $name, $profile, $shank, $material, $price, $url, $date_add)
    {
        $this->domain = $domain;
        $this->name = $name;
        $this->profile = $profile;
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
     * @param mixed $profile
     */
    public function setProfile($profile)
    {
        $this->profile = $profile;
    }

    /**
     * @param mixed $profile_height
     */
    public function setProfileHeight($profile_height)
    {
        $this->profile_height = $profile_height;
    }

    /**
     * @param mixed $shank
     */
    public function setShank($shank)
    {
        $this->shank = $shank;
    }

    /**
     * @param mixed $diameter
     */
    public function setDiameter($diameter)
    {
        $this->diameter = $diameter;
    }

    /**
     * @param mixed $type_number
     */
    public function setTypeNumber($type_number)
    {
        $this->type_number = $type_number;
    }

    /**
     * @param mixed $segment_type
     */
    public function setSegmentType($segment_type)
    {
        $this->segment_type = $segment_type;
    }

    /**
     * @param mixed $material
     */
    public function setMaterial($material)
    {
        $this->material = $material;
    }

    /**
     * @param mixed $equipment
     */
    public function setEquipment($equipment)
    {
        $this->equipment = $equipment;
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