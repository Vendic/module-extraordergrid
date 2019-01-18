<?php
declare(strict_types=1);

/**
 * @author tjitse (Vendic)
 * Created on 18/01/2019 08:20
 */

namespace Vendic\ExtraOrderGrid\Model;

use Magento\Framework\App\Config\ScopeConfigInterface;

class Settings
{
    const XML_PATH_ALLOWED_STATUSES = 'vendic_extraordergrid/general/allowed_order_statuses';
    const XML_PATH_GRID_NAME = 'vendic_extraordergrid/general/grid_name';

    /**
     * @var ScopeConfigInterface
     */
    protected $scopeConfig;

    public function __construct(
        ScopeConfigInterface $scopeConfig
    ) {
        $this->scopeConfig = $scopeConfig;
    }

    /**
     * @return mixed|null
     */
    public function getGridName()
    {
        return $this->scopeConfig->getValue(self::XML_PATH_GRID_NAME);
    }

    /**
     * @return array
     */
    public function getAllowedStatuses(): array
    {
        $allowedStatuses = $this->scopeConfig->getValue(self::XML_PATH_ALLOWED_STATUSES);

        if (!$allowedStatuses) {
            return [];
        }

        return explode(',', $allowedStatuses);
    }
}
