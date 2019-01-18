<?php
declare(strict_types=1);

/**
 * @author tjitse (Vendic)
 * Created on 18/01/2019 08:23
 */

namespace Vendic\ExtraOrderGrid\Model\Config\Source;

use Magento\Sales\Model\ResourceModel\Order\Status\CollectionFactory;

class OrderStatuses implements \Magento\Framework\Option\ArrayInterface
{

    /**
     * @var CollectionFactory
     */
    protected $statusCollectionFactory;

    public function __construct(
        CollectionFactory $statusCollectionFactory
    ) {
        $this->statusCollectionFactory = $statusCollectionFactory;
    }

    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return $this->statusCollectionFactory->create()->toOptionArray();
    }
}
