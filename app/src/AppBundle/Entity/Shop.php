<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Shop
 *
 * @ORM\Table(name="shop")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ShopRepository")
 */
class Shop
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
     * @ORM\Column(name="domain", type="string", length=255)
     */
    private $domain;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;


    /**
     * @var string
     *
     * @ORM\Column(name="c_type", type="string", length=255)
     */
    private $cType;


    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=255)
     */
    private $country;


    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string")
     */
    private $city;


    /**
     * @var string
     *
     * @ORM\Column(name="address", type="text")
     */
    private $address;


    /**
     * @var string
     *
     * @ORM\Column(name="phones", type="text")
     */
    private $phones;


    /**
     * @var string
     *
     * @ORM\Column(name="emails", type="text")
     */
    private $emails;


    /**
     * @var string
     *
     * @ORM\Column(name="brand", type="string", length=255)
     */
    private $brand;


    /**
     * @var string
     *
     * @ORM\Column(name="logo", type="text")
     */
    private $logo;


    /**
     * @var string
     *
     * @ORM\Column(name="about", type="text")
     */
    private $about;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}

