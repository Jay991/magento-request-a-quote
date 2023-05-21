<?php
namespace Magento\RequestAQuote\Model\ResourceModel\Quote;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
use Magento\RequestAQuote\Api\Data\QuoteInterface;

class Quote extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('quote', 'quote_id');
    }

    protected function _beforeSave(\Magento\Framework\Model\AbstractModel $object)
    {
        if ($object instanceof QuoteInterface) {
            $object->setUpdatedAt(date('Y-m-d H:i:s'));
        }

        return parent::_beforeSave($object);
    }
}
