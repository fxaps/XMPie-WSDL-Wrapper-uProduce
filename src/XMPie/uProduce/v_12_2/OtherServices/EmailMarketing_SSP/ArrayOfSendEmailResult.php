<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_12_2\OtherServices\EmailMarketing_SSP;

class ArrayOfSendEmailResult implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var SendEmailResult[] $SendEmailResult
     */
    protected $SendEmailResult = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SendEmailResult[]
     */
    public function getSendEmailResult()
    {
      return $this->SendEmailResult;
    }

    /**
     * @param SendEmailResult[] $SendEmailResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_2\OtherServices\EmailMarketing_SSP\ArrayOfSendEmailResult
     */
    public function setSendEmailResult(array $SendEmailResult = null)
    {
      $this->SendEmailResult = $SendEmailResult;
      return $this;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset An offset to check for
     * @return boolean true on success or false on failure
     */
    public function offsetExists($offset): bool
    {
      return isset($this->SendEmailResult[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return SendEmailResult
     */
    public function offsetGet($offset): SendEmailResult
    {
      return $this->SendEmailResult[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param SendEmailResult $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
      if (!isset($offset)) {
        $this->SendEmailResult[] = $value;
      } else {
        $this->SendEmailResult[$offset] = $value;
      }
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset): void
    {
      unset($this->SendEmailResult[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return SendEmailResult Return the current element
     */
    public function current(): SendEmailResult
    {
      return current($this->SendEmailResult);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next(): void
    {
      next($this->SendEmailResult);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key(): string|null
    {
      return key($this->SendEmailResult);
    }

    /**
     * Iterator implementation
     *
     * @return boolean Return the validity of the current position
     */
    public function valid(): bool
    {
      return $this->key() !== null;
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element
     *
     * @return void
     */
    public function rewind(): void
    {
      reset($this->SendEmailResult);
    }

    /**
     * Countable implementation
     *
     * @return SendEmailResult Return count of elements
     */
    public function count(): int
    {
      return count($this->SendEmailResult);
    }

}
