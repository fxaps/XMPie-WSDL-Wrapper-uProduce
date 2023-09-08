<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_12_2\BasicServices\Plan_SSP;

class ArrayOfReportMessage implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ReportMessage[] $ReportMessage
     */
    protected $ReportMessage = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ReportMessage[]
     */
    public function getReportMessage()
    {
      return $this->ReportMessage;
    }

    /**
     * @param ReportMessage[] $ReportMessage
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_2\BasicServices\Plan_SSP\ArrayOfReportMessage
     */
    public function setReportMessage(array $ReportMessage = null)
    {
      $this->ReportMessage = $ReportMessage;
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
      return isset($this->ReportMessage[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ReportMessage
     */
    public function offsetGet($offset): ReportMessage
    {
      return $this->ReportMessage[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ReportMessage $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
      if (!isset($offset)) {
        $this->ReportMessage[] = $value;
      } else {
        $this->ReportMessage[$offset] = $value;
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
      unset($this->ReportMessage[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ReportMessage Return the current element
     */
    public function current(): ReportMessage
    {
      return current($this->ReportMessage);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next(): void
    {
      next($this->ReportMessage);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key(): string|null
    {
      return key($this->ReportMessage);
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
      reset($this->ReportMessage);
    }

    /**
     * Countable implementation
     *
     * @return ReportMessage Return count of elements
     */
    public function count(): int
    {
      return count($this->ReportMessage);
    }

}
