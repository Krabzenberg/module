<?php


namespace ALevel\QuickOrder\Model\ResourceModel\Status\Grid;

use Magento\Framework\Api\Search\AggregationInterface;
use Magento\Framework\Api\SearchCriteriaInterface;
use Magento\Framework\Api\Search\SearchResultInterface;
use Magento\Framework\View\Element\UiComponent\DataProvider\Document;
use ALevel\QuickOrder\Model\ResourceModel\Status as ResourceModel;
use ALevel\QuickOrder\Model\ResourceModel\Status\Collection as StatusCollection;

/**
 * Class Collection
 * @package ALevel\QuickOrder\Model\ResourceModel\Status\Grid
 */
class Collection extends StatusCollection implements SearchResultInterface
{
    /** @var AggregationInterface */
    protected $aggregations;

    /** @var SearchCriteriaInterface */
    protected $searchCriteria;

    /** {@inheritdoc} */
    public function _construct()
    {
        $this->_init(Document::class, ResourceModel::class);
    }

    /** {@inheritdoc} */
    public function getAggregations()
    {
        return $this->aggregations;
    }

    /** {@inheritdoc} */
    public function setAggregations($aggregations)
    {
        $this->aggregations = $aggregations;
    }

    /** {@inheritdoc} */
    public function getSearchCriteria()
    {
        return $this->searchCriteria;
    }

    /** {@inheritdoc} */
    public function setSearchCriteria(SearchCriteriaInterface $searchCriteria = null)
    {
        $this->searchCriteria = $searchCriteria;

        return $this;
    }

    /** {@inheritdoc} */
    public function getTotalCount()
    {
        return $this->getSize();
    }

    /** {@inheritdoc} */
    public function setTotalCount($totalCount)
    {
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function setItems(array $items = null)
    {
        return $this;
    }
}
