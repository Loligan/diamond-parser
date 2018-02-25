<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SettingsValues
 *
 * @ORM\Table(name="settings_values")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SettingsValuesRepository")
 */
class SettingsValues
{
    const SETTING_API_KEY = 'API_KEY';
    const SETTING_API_EMAIL = 'API_EMAIL';
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
     * @ORM\Column(name="name_setting", type="string", length=255)
     */
    private $nameSetting;

    /**
     * @var string
     *
     * @ORM\Column(name="value_setting", type="string", length=255)
     */
    private $valueSetting;

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

