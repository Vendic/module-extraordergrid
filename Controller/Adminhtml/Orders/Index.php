<?php
declare(strict_types=1);

/**
 * @author tjitse (Vendic)
 * Created on 16/01/2019 18:13
 */

namespace Vendic\ExtraOrderGrid\Controller\Adminhtml\Orders;

use Magento\Backend\App\Action;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\View\Result\PageFactory;
use Vendic\ExtraOrderGrid\Model\Settings;

class Index extends Action
{
    protected $resultRedirectFactory = false;
    /**
     * @var PageFactory
     */
    protected $resultPageFactory;
    /**
     * @var Settings
     */
    protected $settings;

    public function __construct(
        Settings $settings,
        Action\Context $context,
        PageFactory $resultPageFactory
    ) {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
        $this->settings = $settings;
    }

    /**
     * Loads layout file vendic_extraordergrid_orders_index and sets title from settings.
     * @return \Magento\Framework\Controller\ResultInterface|ResponseInterface
     */
    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        $configuredTitle = $this->settings->getGridName();
        $resultPage->getConfig()->getTitle()->prepend($configuredTitle);

        return $resultPage;
    }
}
