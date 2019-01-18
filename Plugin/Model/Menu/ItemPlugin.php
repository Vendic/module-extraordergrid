<?php
/**
 * @author tjitse (Vendic)
 * Created on 18/01/2019 09:01
 */

namespace Vendic\ExtraOrderGrid\Plugin\Model\Menu;

use Vendic\ExtraOrderGrid\Model\Settings;

class ItemPlugin
{
    /**
     * @var Settings
     */
    protected $settings;

    public function __construct(
        Settings $settings
    ) {
        $this->settings = $settings;
    }

    public function beforeGetTitle(\Magento\Backend\Model\Menu\Item $subject)
    {
        $id = $subject->getId();
        if ($id === 'Vendic_ExtraOrderGrid::sales_order_by_invoice') {
            $gridTitle = $this->settings->getGridName();
            $subject->setTitle($gridTitle);
        }
    }
}
