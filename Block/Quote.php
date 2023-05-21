<?php
namespace Magento\RequestAQuote\Block;

use Magento\Framework\View\Element\Template;
use Magento\Quote\Model\Quote as QuoteModel;

class Quote extends Template
{
    protected $quoteModel;

    public function __construct(
        Template\Context $context,
        QuoteModel $quoteModel,
        array $data = []
    ) {
        $this->quoteModel = $quoteModel;
        parent::__construct($context, $data);
    }

    public function getQuoteItems()
    {
        $quote = $this->quoteModel->loadActive($this->_storeManager->getStore()->getId());
        return $quote->getAllVisibleItems();
    }
}
