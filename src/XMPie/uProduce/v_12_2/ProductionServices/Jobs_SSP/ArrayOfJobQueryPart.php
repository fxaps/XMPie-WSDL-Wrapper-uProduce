<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_12_2\ProductionServices\Jobs_SSP;

class ArrayOfJobQueryPart implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var JobQueryPart[] $JobQueryPart
     */
    protected $JobQueryPart = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return JobQueryPart[]
     */
    public function getJobQueryPart()
    {
      return $this->JobQueryPart;
    }

    /**
     * @param JobQueryPart[] $JobQueryPart
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_2\ProductionServices\Jobs_SSP\ArrayOfJobQueryPart
     */
    public function setJobQueryPart(array $JobQueryPart = null)
    {
      $this->JobQueryPart = $JobQueryPart;
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
      return isset($this->JobQueryPart[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return JobQueryPart
     */
    public function offsetGet($offset): JobQueryPart
    {
      return $this->JobQueryPart[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param JobQueryPart $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
      if (!isset($offset)) {
        $this->JobQueryPart[] = $value;
      } else {
        $this->JobQueryPart[$offset] = $value;
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
      unset($this->JobQueryPart[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return JobQueryPart Return the current element
     */
    public function current(): JobQueryPart
    {
      return current($this->JobQueryPart);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next(): void
    {
      next($this->JobQueryPart);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key(): string|null
    {
      return key($this->JobQueryPart);
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
      reset($this->JobQueryPart);
    }

    /**
     * Countable implementation
     *
     * @return JobQueryPart Return count of elements
     */
    public function count(): int
    {
      return count($this->JobQueryPart);
    }

}
