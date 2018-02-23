<?php
/**
 * Created by PhpStorm.
 * User: meldon
 * Date: 19.02.18
 * Time: 15:27
 */

namespace AppBundle\Items\ItemsType;


class KanatyItem
{
    private $domain;                     // Домен поставщика
    private $name;                       // Наименование
    private $segment_diameter;           // Диаметр сегмента, мм
    private $material;                   // Обрабатываемый материал
    private $segments_quantity;          // Количество сегментов на 1 м, шт
    private $segment_height;             // Высота сегмента, мм
    private $segment_length;             // Длина сегмента, мм
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
     * KanatyItem constructor.
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
     * @param mixed $segment_diameter
     */
    public function setSegmentDiameter($segment_diameter)
    {
        $this->segment_diameter = $segment_diameter;
    }

    /**
     * @param mixed $material
     */
    public function setMaterial($material)
    {
        $this->material = $material;
    }

    /**
     * @param mixed $segments_quantity
     */
    public function setSegmentsQuantity($segments_quantity)
    {
        $this->segments_quantity = $segments_quantity;
    }

    /**
     * @param mixed $segment_height
     */
    public function setSegmentHeight($segment_height)
    {
        $this->segment_height = $segment_height;
    }

    /**
     * @param mixed $segment_length
     */
    public function setSegmentLength($segment_length)
    {
        $this->segment_length = $segment_length;
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

    public function compileToArray(){
        $arrData = [
        'domain'=>$this->domain,
        'name'=>$this->name,
        'segment_diameter'=>$this->segment_diameter,
        'material'=>$this->material,
        'segments_quantity'=>$this->segments_quantity,
        'segment_height'=>$this->segment_height,
        'segment_length'=>$this->segment_length,
        'diamond_powder'=>$this->diamond_powder,
        'diamond_concentration'=>$this->diamond_concentration,
        'diamond_carat'=>$this->diamond_carat,
        'diamond_bunch'=>$this->diamond_bunch,
        'grit_mkm'=>$this->grit_mkm,
        'grit_mesh'=>$this->grit_mesh,
        'grit_grit'=>$this->grit_grit,
        'grit_astm'=>$this->grit_astm,
        'description'=>$this->description,
        'description_big'=>$this->description_big,
        'price'=>$this->price,
        'others'=>$this->others,
        'brand'=>$this->brand,
        'brand_country'=>$this->brand_country,
        'origin_country'=>$this->origin_country,
        'url'=>$this->url,
        'img_urls'=>$this->img_urls,
        'date_add'=>$this->date_add,
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