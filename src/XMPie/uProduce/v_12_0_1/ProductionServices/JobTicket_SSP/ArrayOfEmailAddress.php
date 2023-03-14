<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_12_0_1\ProductionServices\JobTicket_SSP;

class ArrayOfEmailAddress implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var EmailAddress[] $EmailAddress
     */
    protected $EmailAddress = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return EmailAddress[]
     */
    public function getEmailAddress()
    {
      return $this->EmailAddress;
    }

    /**
     * @param EmailAddress[] $EmailAddress
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_0_1\ProductionServices\JobTicket_SSP\ArrayOfEmailAddress
     */
    public function setEmailAddress(array $EmailAddress = null)
    {
      $this->EmailAddress = $EmailAddress;
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
      return isset($this->EmailAddress[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return EmailAddress
     */
    public function offsetGet($offset): EmailAddress
    {
      return $this->EmailAddress[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param EmailAddress $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
      if (!isset($offset)) {
        $this->EmailAddress[] = $value;
      } else {
        $this->EmailAddress[$offset] = $value;
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
      unset($this->EmailAddress[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return EmailAddress Return the current element
     */
    public function current(): EmailAddress
    {
      return current($this->EmailAddress);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next(): void
    {
      next($this->EmailAddress);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key(): string|null
    {
      return key($this->EmailAddress);
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
      reset($this->EmailAddress);
    }

    /**
     * Countable implementation
     *
     * @return EmailAddress Return count of elements
     */
    public function count(): int
    {
      return count($this->EmailAddress);
    }

}
