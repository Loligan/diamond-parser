<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Queue
 *
 * @ORM\Table(name="queue")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\QueueRepository")
 */
class Queue
{

    const STATUS_IN_PROGRESS = 'IN_PROGRESS';
    const STATUS_PASS = 'PASS';
    const STATUS_FAIL = 'FAIL';
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
     * @ORM\Column(name="service", type="string", length=255)
     */
    private $service;

    /**
     * @var string
     *
     * @ORM\Column(name="name_queue", type="string", length=255)
     */
    private $nameQueue;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string")
     */
    private $status;


    /**
     * @var string
     *
     * @ORM\Column(name="data", type="text")
     */
    private $data;

    /**
     * Queue constructor.
     * @param string $service
     * @param string $nameQueue
     * @param string $data
     */
    public function __construct($service, $nameQueue, $data)
    {
        $this->service = $service;
        $this->nameQueue = $nameQueue;
        $this->data = $data;
        $this->status = self::STATUS_IN_PROGRESS;
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
     * Set nameQueue
     *
     * @param string $nameQueue
     *
     * @return Queue
     */
    public function setNameQueue($nameQueue)
    {
        $this->nameQueue = $nameQueue;

        return $this;
    }

    /**
     * Get nameQueue
     *
     * @return string
     */
    public function getNameQueue()
    {
        return $this->nameQueue;
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
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param string $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }


}

