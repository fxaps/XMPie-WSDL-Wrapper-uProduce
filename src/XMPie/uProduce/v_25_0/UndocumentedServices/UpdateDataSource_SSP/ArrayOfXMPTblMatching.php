<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_25_0\UndocumentedServices\UpdateDataSource_SSP;

class ArrayOfXMPTblMatching implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var XMPTblMatching[] $XMPTblMatching
     */
    protected $XMPTblMatching = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return XMPTblMatching[]
     */
    public function getXMPTblMatching()
    {
      return $this->XMPTblMatching;
    }

    /**
     * @param XMPTblMatching[] $XMPTblMatching
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\UndocumentedServices\UpdateDataSource_SSP\ArrayOfXMPTblMatching
     */
    public function setXMPTblMatching(array $XMPTblMatching = null)
    {
      $this->XMPTblMatching = $XMPTblMatching;
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
      return isset($this->XMPTblMatching[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return XMPTblMatching
     */
    public function offsetGet($offset): XMPTblMatching
    {
      return $this->XMPTblMatching[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param XMPTblMatching $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
      if (!isset($offset)) {
        $this->XMPTblMatching[] = $value;
      } else {
        $this->XMPTblMatching[$offset] = $value;
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
      unset($this->XMPTblMatching[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return XMPTblMatching Return the current element
     */
    public function current(): XMPTblMatching
    {
      return current($this->XMPTblMatching);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next(): void
    {
      next($this->XMPTblMatching);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key(): string|null
    {
      return key($this->XMPTblMatching);
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
      reset($this->XMPTblMatching);
    }

    /**
     * Countable implementation
     *
     * @return XMPTblMatching Return count of elements
     */
    public function count(): int
    {
      return count($this->XMPTblMatching);
    }

}
