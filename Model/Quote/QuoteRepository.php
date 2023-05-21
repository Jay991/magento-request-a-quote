<?php
namespace Magento\RequestAQuote\Model\Quote;

use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\RequestAQuote\Api\Data\QuoteInterface;
use Magento\RequestAQuote\Api\QuoteRepositoryInterface;
use Magento\RequestAQuote\Model\ResourceModel\Quote\Quote as QuoteResource;

class QuoteRepository implements QuoteRepositoryInterface
{
    protected $quoteResource;

    public function __construct(QuoteResource $quoteResource)
    {
        $this->quoteResource = $quoteResource;
    }

    public function save(QuoteInterface $quote)
    {
        try {
            $this->quoteResource->save($quote);
        } catch (\Exception $e) {
            throw new CouldNotSaveException(__($e->getMessage()));
        }
        return $quote;
    }

    public function getById($quoteId)
    {
        $quote = $this->quoteResource->load($quoteId);
        if (!$quote->getId()) {
            throw new NoSuchEntityException(__('Quote with ID "%1" does not exist.', $quoteId));
        }
        return $quote;
    }

    public function delete(QuoteInterface $quote)
    {
        try {
            $this->quoteResource->delete($quote);
        } catch (\Exception $e) {
            throw new CouldNotDeleteException(__($e->getMessage()));
        }
    }
}
