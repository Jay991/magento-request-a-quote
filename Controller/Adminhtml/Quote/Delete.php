<?php
namespace Magento\RequestAQuote\Controller\Adminhtml\Quote;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\Controller\ResultFactory;
use Magento\RequestAQuote\Model\QuoteFactory;

class Delete extends Action
{
    protected $quoteFactory;

    public function __construct(
        Context $context,
        QuoteFactory $quoteFactory
    ) {
        parent::__construct($context);
        $this->quoteFactory = $quoteFactory;
    }

    public function execute()
    {
        // Get the quote ID from the request parameters
        $quoteId = (int) $this->getRequest()->getParam('id');

        // Create a new quote model instance
        $quote = $this->quoteFactory->create();

        try {
            // Load the quote by ID
            $quote->load($quoteId);

            // Check if the quote exists and delete it
            if ($quote->getId()) {
                $quote->delete();
                $this->messageManager->addSuccessMessage(__('Quote has been deleted.'));
            } else {
                $this->messageManager->addErrorMessage(__('Quote not found.'));
            }
        } catch (\Exception $e) {
            $this->messageManager->addErrorMessage(__('An error occurred while deleting the quote.'));
        }

        // Redirect to a specific page after deleting
        $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
        $resultRedirect->setPath('requestquote/quote/index'); // Adjust the path accordingly

        return $resultRedirect;
    }
}
