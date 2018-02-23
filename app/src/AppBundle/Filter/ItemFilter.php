<?php

namespace AppBundle\Filter;


use Doctrine\ORM\QueryBuilder;

class ItemFilter implements ApplicableToListQuery
{
    public $id;
    public $statusParse;
    public $category;

    public function apply(QueryBuilder $queryBuilder)
{

    if (!is_null($this->id)) {
        $this->applyId($queryBuilder);
    }

    if (!is_null($this->statusParse)) {
        $this->applyStatusParse($queryBuilder);
    }

    if (!is_null($this->category)) {
        $this->applyCategory($queryBuilder);
    }

}

    private function applyId(QueryBuilder $queryBuilder)
{
    $alias = $queryBuilder->getRootAliases()[0];
    $queryBuilder->andWhere($alias.'.id =:ids')
        ->setParameter('ids', $this->id);
}

    private function applyStatusParse(QueryBuilder $queryBuilder)
{
    $alias = $queryBuilder->getRootAliases()[0];
    $queryBuilder->andWhere($alias.'.statusParse = :statusParse')
        ->setParameter('statusParse', $this->statusParse);
}

    private function applyCategory(QueryBuilder $queryBuilder)
{
    $alias = $queryBuilder->getRootAliases()[0];
    $queryBuilder->andWhere($alias.'.category = :category')
        ->setParameter('category', $this->category);
}

}