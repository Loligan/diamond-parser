<?php
/**
 * Created by PhpStorm.
 * User: meldon
 * Date: 19.02.18
 * Time: 15:07
 */

namespace AppBundle\Items\ItemsType;


class PastyItem
{
    private $domain;
    private $name;
    private $price;
    private $url;
    private $dateAdd;
    private $paste;
    private $paste_type;
    private $label;
    private $concentration;
    private $washability;
    private $consistency;
    private $weight;
    private $goi_number;
    private $items_count;
    private $carat;
    private $grit_mkm;
    private $grit_mesh;
    private $grit_grit;
    private $grit_astm;
    private $description;
    private $description_big;
    private $others;
    private $brand;
    private $brand_country;
    private $origin_country;
    private $img_urls;

    /**
     * PastyItem constructor.
     * @param $domain
     * @param $name
     * @param $price
     * @param $url
     * @param $dateAdd
     * @param $paste
     */
    public function __construct($domain, $name, $price, $url, $dateAdd, $paste)
    {
        $this->domain = $domain;
        $this->name = $name;
        $this->price = $price;
        $this->url = $url;
        $this->dateAdd = $dateAdd;
        $this->paste = $paste;
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
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @param mixed $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * @param mixed $dateAdd
     */
    public function setDateAdd($dateAdd)
    {
        $this->dateAdd = $dateAdd;
    }

    /**
     * @param mixed $paste
     */
    public function setPaste($paste)
    {
        $this->paste = $paste;
    }

    /**
     * @param mixed $paste_type
     */
    public function setPasteType($paste_type)
    {
        $this->paste_type = $paste_type;
    }

    /**
     * @param mixed $label
     */
    public function setLabel($label)
    {
        $this->label = $label;
    }

    /**
     * @param mixed $concentration
     */
    public function setConcentration($concentration)
    {
        $this->concentration = $concentration;
    }

    /**
     * @param mixed $washability
     */
    public function setWashability($washability)
    {
        $this->washability = $washability;
    }

    /**
     * @param mixed $consistency
     */
    public function setConsistency($consistency)
    {
        $this->consistency = $consistency;
    }

    /**
     * @param mixed $weight
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    /**
     * @param mixed $goi_number
     */
    public function setGoiNumber($goi_number)
    {
        $this->goi_number = $goi_number;
    }

    /**
     * @param mixed $items_count
     */
    public function setItemsCount($items_count)
    {
        $this->items_count = $items_count;
    }

    /**
     * @param mixed $carat
     */
    public function setCarat($carat)
    {
        $this->carat = $carat;
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
     * @param mixed $img_urls
     */
    public function setImgUrls($img_urls)
    {
        $this->img_urls = $img_urls;
    }






}