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
    const CATEGORY_PASTE = 'Алмазная и эльборовая паста, ГОИ';
    const CATEGORY_GIBKIE_KRUGI = 'Алмазные гибкие шлифовальные круги';
    const CATEGORY_GOLOVKI = 'Алмазные головки';
    const CATEGORY_BRUSKI = 'Алмазные и эльборовые бруски';
    const CATEGORY_KANAT = 'Алмазные канаты';
    const CATEGORY_KARANDASH = 'Алмазные карандаши';
    const CATEGORY_KORONKI_AND_SVERLA = 'Алмазные коронки, Свёрла';
    const CATEGORY_NADFILI = 'Алмазные надфили';
    const CATEGORY_OTREZNIE_DISKI = 'Алмазные отрезные диски';
    const CATEGORY_PALCHIKOVIE_FREZI = 'Алмазные пальчиковые фрезы';
    const CATEGORY_PROFILNIE_FREZI = 'Алмазные профильные фрезы';
    const CATEGORY_SEGMENTI = 'Алмазные сегменты';
    const CATEGORY_SHLIF_KRUGI = 'Алмазные шлифовальные круги';
    const CATEGORY_SHLIF_FREZI = 'Алмазные шлифовальные фрезы';
    const CATEGORY_ALMAZ_V_OPRAVE = 'Алмазы в оправах';
    const CATEGORY_IGLY = 'Иглы алмазные';
    const CATEGORY_KRYGI_DLY_ZATOCHKI = 'Круги для заточки пил';
    const CATEGORY_ELBOROVIE_KRUGI = 'Эльборовые круги';
//        $items = $this->getDoctrine()->getRepository('AppBundle:Item')->createQueryBuilder('x')->select('x')->getQuery()->getResult();

    const STATUS_PARSE_OK = 'OK';
    const STATUS_PARSE_NOT_CATEGORY = 'NOT_CATEGORY';
    const STATUS_PARSE_NOT_BASE_ELEMENT = 'NOT_BASE_ELEMENT';
    const STATUS_PARSE_NOT_REQUIRED_FIELD = 'NOT_REQUIRED_FIELD';
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
     * @ORM\Column(name="category_site", type="string",nullable=true)
     */
    private $categorySite;

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


    public function dataCollectedShow(){
        return json_decode($this->collectorInfo,true);
    }

    public function dataInfoShow(){
        return json_decode($this->dataInfo,true);
    }

    /**
     * @return string
     */
    public function getCategorySite()
    {
        return $this->categorySite;
    }

    /**
     * @param string $categorySite
     */
    public function setCategorySite($categorySite)
    {
        $this->categorySite = $categorySite;
    }


}

