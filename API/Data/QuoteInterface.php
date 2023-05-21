<?php
namespace Magento\RequestAQuote\Api\Data;

interface QuoteInterface
{
    /**
     * Get the quote ID.
     *
     * @return int|null
     */
    public function getId();

    /**
     * Set the quote ID.
     *
     * @param int $id
     * @return $this
     */
    public function setId($id);

    /**
     * Get the customer name associated with the quote.
     *
     * @return string|null
     */
    public function getCustomerName();

    /**
     * Set the customer name for the quote.
     *
     * @param string $customerName
     * @return $this
     */
    public function setCustomerName($customerName);

    /**
     * Get the email associated with the quote.
     *
     * @return string|null
     */
    public function getEmail();

    /**
     * Set the email for the quote.
     *
     * @param string $email
     * @return $this
     */
    public function setEmail($email);

    /**
     * Get the message associated with the quote.
     *
     * @return string|null
     */
    public function getMessage();

    /**
     * Set the message for the quote.
     *
     * @param string $message
     * @return $this
     */
    public function setMessage($message);

    /**
     * Get the creation timestamp of the quote.
     *
     * @return string|null
     */
    public function getCreatedAt();

    /**
     * Set the creation timestamp for the quote.
     *
     * @param string $createdAt
     * @return $this
     */
    public function setCreatedAt($createdAt);
}
