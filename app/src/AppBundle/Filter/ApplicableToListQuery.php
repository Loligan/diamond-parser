<?php
/**
 * Created by PhpStorm.
 * User: meldon
 * Date: 23.02.18
 * Time: 12:33
 */

namespace AppBundle\Filter;

use Doctrine\ORM\QueryBuilder;

interface ApplicableToListQuery
{

    public function apply(QueryBuilder $queryBuilder);

}