<?php
declare(strict_types = 1);

namespace FireGento\WebapiMetrics\Controller\Adminhtml\Metrics;

use Magento\Backend\App\Action;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\ResultInterface;
use Magento\Framework\View\Result\PageFactory;

/**
 * Class Metrics
 */
class Metrics extends Action
{
    /**
     * @var PageFactory
     */
    private $pageFactory;

    /**
     * Metrics constructor.
     *
     * @param Action\Context $context
     * @param PageFactory    $pageFactory
     */
    public function __construct(
        Action\Context $context,
        PageFactory $pageFactory
    ) {
        parent::__construct($context);
        $this->pageFactory = $pageFactory;
    }

    /**
     * Execute action based on request and return result
     *
     * @return ResponseInterface|ResultInterface|void
     */
    public function execute()
    {
        $resultPage = $this->pageFactory->create();
        $resultPage->getConfig()->getTitle()->prepend(__('Webapi Metrics'));

        return $resultPage;
    }
}
