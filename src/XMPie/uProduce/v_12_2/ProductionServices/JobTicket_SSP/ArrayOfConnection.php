<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_12_2\ProductionServices\JobTicket_SSP;

class ArrayOfConnection implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Connection[] $Connection
     */
    protected $Connection = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Connection[]
     */
    public function getConnection()
    {
      return $this->Connection;
    }

    /**
     * @param Connection[] $Connection
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_2\ProductionServices\JobTicket_SSP\ArrayOfConnection
     */
    public function setConnection(array $Connection = null)
    {
      $this->Connection = $Connection;
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
      return isset($this->Connection[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Connection
     */
    public function offsetGet($offset): Connection
    {
      return $this->Connection[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Connection $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
      if (!isset($offset)) {
        $this->Connection[] = $value;
      } else {
        $this->Connection[$offset] = $value;
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
      unset($this->Connection[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Connection Return the current element
     */
    public function current(): Connection
    {
      return current($this->Connection);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next(): void
    {
      next($this->Connection);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key(): string|null
    {
      return key($this->Connection);
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
      reset($this->Connection);
    }

    /**
     * Countable implementation
     *
     * @return Connection Return count of elements
     */
    public function count(): int
    {
      return count($this->Connection);
    }

}
