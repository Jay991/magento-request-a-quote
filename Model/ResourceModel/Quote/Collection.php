<?php
namespace Magento\RequestAQuote\Model\ResourceModel\Quote;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Magento\RequestAQuote\Model\Quote\Quote as QuoteModel;
use Magento\RequestAQuote\Model\ResourceModel\Quote\Quote as QuoteResource;

class Collection extends AbstractCollection
{
    protected $_idFieldName = 'quote_id';

    protected function _construct()
    {
        $this->_init(QuoteModel::class, QuoteResource::class);
    }
}
