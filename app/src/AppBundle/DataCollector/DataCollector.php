<?php
/**
 * Created by PhpStorm.
 * User: meldon
 * Date: 21.02.18
 * Time: 10:14
 */

namespace AppBundle\DataCollector;


use AppBundle\Entity\Page;
use AppBundle\Entity\Queue;
use Doctrine\Bundle\DoctrineBundle\Registry;

abstract class DataCollector
{
    private $doctrine;
    const ALL_CATEGORY = [
        'Алмазные гибкие шлифовальные круги',
        'Алмазы в оправах',
        'Алмазные и эльборовые бруски',
        'Алмазные пальчиковые фрезы',
        'Алмазные профильные фрезы',
        'Алмазные шлифовальные фрезы',
        'Алмазные головки',
        'Иглы алмазные',
        'Алмазные канаты',
        'Алмазные карандаши',
        'Алмазные коронки, Свёрла',
        'Эльборовые круги',
        'Алмазные шлифовальные круги',
        'Круги для заточки пил',
        'Алмазные надфили',
        'Алмазные напильники',
        'Алмазные отрезные диски',
        'Алмазная и эльборовая паста, ГОИ',
        'Алмазные сегменты'
    ];

    /**
     * DataCollector constructor.
     * @param $doctrine
     */
    public function __construct($doctrine)
    {
        $this->doctrine = $doctrine;
    }


    abstract public function updateData(Page $page, array $data);


    /**
     * @return Registry
     */
    protected function getDoctrine()
    {
        return $this->doctrine;
    }

    protected function setDoctrine(Registry $doctrine)
    {
        $this->doctrine = $doctrine;
    }
}