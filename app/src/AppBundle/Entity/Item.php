<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Item
 *
 * @ORM\Table(name="item")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ItemRepository")
 */
class Item
{
    const CATEGORY_PASTE = 'PASTA';
    const CATEGORY_GOLOVKI = 'GOLOVKI';
    const CATEGORY_BRUSKI = 'BRUSKI';
    const CATEGORY_KANAT = 'KANAT';
    const CATEGORY_KARANDASH = 'KARANDASH';
    const CATEGORY_KORONKI_AND_SVERLA = 'KORONKI_AND_SVERLA';
    const CATEGORY_NADFILI = 'NADFILI';
    const CATEGORY_OTREZNIE_DISKI = 'OTREZNIE_DISKI';
    const CATEGORY_PALCHIKOVIE_FREZI = 'PALCHIKOVIE_FREZI';
    const CATEGORY_PROFILNIE_FREZI = 'PROFILNIE_FREZI';
    const CATEGORY_SEGMENTI = 'SEGMENTI';
    const CATEGORY_SHLIF_KRUGI = 'SHLIF_KRUGI';
    const CATEGORY_SHLIF_FREZI = 'SHLIF_FREZI';
    const CATEGORY_ALMAZ_V_OPRAVE = 'ALMAZ_V_OPRAVE';
    const CATEGORY_IGLY = 'IGLY';
    const CATEGORY_KRYGI_DLY_ZATOCHKI = 'KRYGI_DLY_ZATOCHKI';
    const CATEGORY_ELBOROVIE_KRUGI = 'ELBOROVIE_KRUGI';

    const STAUS_PARSE_OK = 'OK';
    const STAUS_PARSE_NOT_CATEGORY = 'NOT_CATEGORY';
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="category", type="string",nullable=true)
     */
    private $category;

    /**
     * @var string
     *
     * @ORM\Column(name="data_info", type="text",nullable=true)
     */
    private $dataInfo;


    /**
     * @var string
     *
     * @ORM\Column(name="status_parse", type="text",nullable=true)
     */
    private $statusParse;


    /**
     * @var string
     *
     * @ORM\Column(name="collector_info", type="text",nullable=true)
     */
    private $collectorInfo;

    /**
     * @var Page
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Page")
     * @ORM\JoinColumn(name="pageId", referencedColumnName="id",onDelete="CASCADE")
     */
    private $page;



    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param string $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * @return Page
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * @param Page $page
     */
    public function setPage($page)
    {
        $this->page = $page;
    }

    /**
     * @return string
     */
    public function getDataInfo()
    {
        return $this->dataInfo;
    }

    /**
     * @param string $dataInfo
     */
    public function setDataInfo($dataInfo)
    {
        $this->dataInfo = $dataInfo;
    }

    /**
     * @return string
     */
    public function getStatusParse()
    {
        return $this->statusParse;
    }

    /**
     * @param string $statusParse
     */
    public function setStatusParse($statusParse)
    {
        $this->statusParse = $statusParse;
    }

    /**
     * @return string
     */
    public function getCollectorInfo()
    {
        return $this->collectorInfo;
    }

    /**
     * @param string $collectorInfo
     */
    public function setCollectorInfo($collectorInfo)
    {
        $this->collectorInfo = $collectorInfo;
    }


    public function dataShow(){
        return json_decode($this->collectorInfo,true);
    }


}

