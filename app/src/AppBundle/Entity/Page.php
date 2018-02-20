<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\DateTime;

/**
 * Page
 *
 * @ORM\Table(name="page")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PageRepository")
 */
class Page
{
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
     * @ORM\Column(name="html_data", type="text")
     */
    private $htmlData;

    /**
     * @var string
     *
     * @ORM\Column(name="link_page", type="text")
     */
    private $linkPage;

    /**
     * @var Item
     * @ORM\OneToMany(targetEntity="Item", mappedBy="pageId")
     */
    private $item;

    /**
     * @var string
     *
     * @ORM\Column(name="service", type="string")
     */
    private $service;


    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_create", type="date")
     */
    private $dateCreate;


    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_update", type="date")
     */
    private $dateUpdate;

    /**
     * Page constructor.
     * @param string $htmlData
     * @param string $service
     * @param $url
     * @internal param \DateTime $dateCreate
     */
    public function __construct($htmlData, $service, $url)
    {
        $this->htmlData = $htmlData;
        $this->service = $service;
        $this->linkPage= $url;
        $this->dateCreate = new \DateTime('now');
        $this->dateUpdate = new \DateTime('now');
    }

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
     * Set htmlData
     *
     * @param string $htmlData
     *
     * @return Page
     */
    public function setHtmlData($htmlData)
    {
        $this->htmlData = $htmlData;

        return $this;
    }

    /**
     * Get htmlData
     *
     * @return string
     */
    public function getHtmlData()
    {
        return $this->htmlData;
    }

    /**
     * @return string
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * @param string $service
     */
    public function setService($service)
    {
        $this->service = $service;
    }

    /**
     * @return \DateTime
     */
    public function getDateCreate()
    {
        return $this->dateCreate;
    }

    /**
     * @param \DateTime $dateCreate
     */
    public function setDateCreate($dateCreate)
    {
        $this->dateCreate = $dateCreate;
    }

    /**
     * @return string
     */
    public function getLinkPage()
    {
        return $this->linkPage;
    }

    /**
     * @return \DateTime
     */
    public function getDateUpdate()
    {
        return $this->dateUpdate;
    }

    /**
     * @param \DateTime $dateUpdate
     */
    public function setDateUpdate($dateUpdate)
    {
        $this->dateUpdate = $dateUpdate;
    }


}

