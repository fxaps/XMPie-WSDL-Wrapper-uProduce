<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_13_2\UndocumentedServices\JobMessage_SSP;

class ArrayOfXMPTblRow implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var XMPTblRow[] $XMPTblRow
     */
    protected $XMPTblRow = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return XMPTblRow[]
     */
    public function getXMPTblRow()
    {
      return $this->XMPTblRow;
    }

    /**
     * @param XMPTblRow[] $XMPTblRow
     * @return \XMPieWsdlClient\XMPie\uProduce\v_13_2\UndocumentedServices\JobMessage_SSP\ArrayOfXMPTblRow
     */
    public function setXMPTblRow(array $XMPTblRow = null)
    {
      $this->XMPTblRow = $XMPTblRow;
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
      return isset($this->XMPTblRow[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return XMPTblRow
     */
    public function offsetGet($offset): XMPTblRow
    {
      return $this->XMPTblRow[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param XMPTblRow $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
      if (!isset($offset)) {
        $this->XMPTblRow[] = $value;
      } else {
        $this->XMPTblRow[$offset] = $value;
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
      unset($this->XMPTblRow[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return XMPTblRow Return the current element
     */
    public function current(): XMPTblRow
    {
      return current($this->XMPTblRow);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next(): void
    {
      next($this->XMPTblRow);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key(): string|null
    {
      return key($this->XMPTblRow);
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
      reset($this->XMPTblRow);
    }

    /**
     * Countable implementation
     *
     * @return XMPTblRow Return count of elements
     */
    public function count(): int
    {
      return count($this->XMPTblRow);
    }

}
