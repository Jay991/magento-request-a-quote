<?php
namespace Magento\RequestAQuote\Controller\Adminhtml\Quote;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\Controller\ResultFactory;
use Magento\RequestAQuote\Model\QuoteFactory;

class Save extends Action
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
        // Retrieve quote data from the request
        $quoteData = $this->getRequest()->getPostValue('quote');

        // Create a new quote model instance
        $quote = $this->quoteFactory->create();

	// Perform quote data validation and saving logic
	if (!empty($quoteData)) {
		try {
		$quote->setData($quoteData);
		$quote->save();
		$this->messageManager->addSuccessMessage(__('Quote has been saved.'));
		} catch (\Exception $e) {
		$this->messageManager->addErrorMessage(__('An error occurred while saving the quote.'));
		}
	} else {
		$this->messageManager->addErrorMessage(__('No quote data found.'));
	}
	
        // Redirect to a specific page after saving
        $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
        $resultRedirect->setPath('requestquote/quote/index'); // Adjust the path accordingly

        return $resultRedirect;
    }
}
