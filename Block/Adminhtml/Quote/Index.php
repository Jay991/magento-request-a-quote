<?php
namespace Magento\RequestAQuote\Block\Adminhtml\Quote;

use Magento\Backend\Block\Template;
use Magento\Backend\Block\Template\Context;
use Magento\Framework\View\Element\UiComponent\DataProvider\SearchResult;
use Magento\RequestAQuote\Model\ResourceModel\Quote\CollectionFactory;

class Index extends Template
{
    protected $quoteCollectionFactory;

    public function __construct(
        Context $context,
        CollectionFactory $quoteCollectionFactory,
        array $data = []
    ) {
        $this->quoteCollectionFactory = $quoteCollectionFactory;
        parent::__construct($context, $data);
    }

    public function getQuotes()
    {
        $quoteCollection = $this->quoteCollectionFactory->create();
        return $quoteCollection;
    }
}
