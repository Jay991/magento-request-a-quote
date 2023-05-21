<?php
namespace Magento\RequestAQuote\Block\Adminhtml\Quote;

use Magento\Backend\Block\Template;
use Magento\Backend\Block\Template\Context;
use Magento\Framework\Registry;
use Magento\RequestAQuote\Model\QuoteFactory;

class Edit extends Template
{
    protected $coreRegistry;
    protected $quoteFactory;

    public function __construct(
        Context $context,
        Registry $coreRegistry,
        QuoteFactory $quoteFactory,
        array $data = []
    ) {
        $this->coreRegistry = $coreRegistry;
        $this->quoteFactory = $quoteFactory;
        parent::__construct($context, $data);
    }

    public function getQuote()
    {
        return $this->coreRegistry->registry('current_quote');
    }

    public function getQuoteItems()
    {
        $quote = $this->getQuote();
        if ($quote) {
            return $quote->getAllVisibleItems();
        }
        return [];
    }
}
