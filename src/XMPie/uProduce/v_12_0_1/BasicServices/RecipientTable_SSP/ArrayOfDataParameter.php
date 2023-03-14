<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_12_0_1\BasicServices\RecipientTable_SSP;

class ArrayOfDataParameter implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var DataParameter[] $DataParameter
     */
    protected $DataParameter = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DataParameter[]
     */
    public function getDataParameter()
    {
      return $this->DataParameter;
    }

    /**
     * @param DataParameter[] $DataParameter
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_0_1\BasicServices\RecipientTable_SSP\ArrayOfDataParameter
     */
    public function setDataParameter(array $DataParameter = null)
    {
      $this->DataParameter = $DataParameter;
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
      return isset($this->DataParameter[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return DataParameter
     */
    public function offsetGet($offset): DataParameter
    {
      return $this->DataParameter[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param DataParameter $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
      if (!isset($offset)) {
        $this->DataParameter[] = $value;
      } else {
        $this->DataParameter[$offset] = $value;
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
      unset($this->DataParameter[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return DataParameter Return the current element
     */
    public function current(): DataParameter
    {
      return current($this->DataParameter);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next(): void
    {
      next($this->DataParameter);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key(): string|null
    {
      return key($this->DataParameter);
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
      reset($this->DataParameter);
    }

    /**
     * Countable implementation
     *
     * @return DataParameter Return count of elements
     */
    public function count(): int
    {
      return count($this->DataParameter);
    }

}
