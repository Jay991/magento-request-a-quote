<?php
namespace Magento\RequestAQuote\Api;

use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\RequestAQuote\Api\Data\QuoteInterface;

interface QuoteRepositoryInterface
{
    /**
     * Save a quote.
     *
     * @param QuoteInterface $quote
     * @return QuoteInterface
     * @throws CouldNotSaveException
     */
    public function save(QuoteInterface $quote);

    /**
     * Get a quote by ID.
     *
     * @param int $quoteId
     * @return QuoteInterface
     * @throws NoSuchEntityException
     */
    public function getById($quoteId);

    /**
     * Delete a quote.
     *
     * @param QuoteInterface $quote
     * @throws CouldNotDeleteException
     */
    public function delete(QuoteInterface $quote);
}
