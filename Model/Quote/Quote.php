<?php
namespace Magento\RequestAQuote\Model\Quote;

use Magento\Framework\Model\AbstractModel;
use Magento\RequestAQuote\Api\Data\QuoteInterface;
use Magento\RequestAQuote\Model\ResourceModel\Quote\Quote as QuoteResource;

class Quote extends AbstractModel implements QuoteInterface
{
    protected function _construct()
    {
        $this->_init(QuoteResource::class);
    }

    public function getId()
    {
        return $this->getData(self::ID);
    }

    public function setId($id)
    {
        $this->setData(self::ID, $id);
        return $this;
    }

    public function getCustomerName()
    {
        return $this->getData(self::CUSTOMER_NAME);
    }

    public function setCustomerName($customerName)
    {
        $this->setData(self::CUSTOMER_NAME, $customerName);
        return $this;
    }

    public function getEmail()
    {
        return $this->getData(self::EMAIL);
    }

    public function setEmail($email)
    {
        $this->setData(self::EMAIL, $email);
        return $this;
    }

    public function getMessage()
    {
        return $this->getData(self::MESSAGE);
    }

    public function setMessage($message)
    {
        $this->setData(self::MESSAGE, $message);
        return $this;
    }

    public function getCreatedAt()
    {
        return $this->getData(self::CREATED_AT);
    }

    public function setCreatedAt($createdAt)
    {
        $this->setData(self::CREATED_AT, $createdAt);
        return $this;
    }
}
