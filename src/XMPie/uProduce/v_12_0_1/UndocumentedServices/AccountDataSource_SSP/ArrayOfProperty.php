<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_12_0_1\UndocumentedServices\AccountDataSource_SSP;

class ArrayOfProperty implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Property[] $Property
     */
    protected $Property = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Property[]
     */
    public function getProperty()
    {
      return $this->Property;
    }

    /**
     * @param Property[] $Property
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_0_1\UndocumentedServices\AccountDataSource_SSP\ArrayOfProperty
     */
    public function setProperty(array $Property = null)
    {
      $this->Property = $Property;
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
      return isset($this->Property[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Property
     */
    public function offsetGet($offset): Property
    {
      return $this->Property[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Property $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
      if (!isset($offset)) {
        $this->Property[] = $value;
      } else {
        $this->Property[$offset] = $value;
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
      unset($this->Property[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Property Return the current element
     */
    public function current(): Property
    {
      return current($this->Property);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next(): void
    {
      next($this->Property);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key(): string|null
    {
      return key($this->Property);
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
      reset($this->Property);
    }

    /**
     * Countable implementation
     *
     * @return Property Return count of elements
     */
    public function count(): int
    {
      return count($this->Property);
    }

}