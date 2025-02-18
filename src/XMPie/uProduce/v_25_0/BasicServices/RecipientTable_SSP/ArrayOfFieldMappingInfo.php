<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_25_0\BasicServices\RecipientTable_SSP;

class ArrayOfFieldMappingInfo implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var FieldMappingInfo[] $FieldMappingInfo
     */
    protected $FieldMappingInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return FieldMappingInfo[]
     */
    public function getFieldMappingInfo()
    {
      return $this->FieldMappingInfo;
    }

    /**
     * @param FieldMappingInfo[] $FieldMappingInfo
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\BasicServices\RecipientTable_SSP\ArrayOfFieldMappingInfo
     */
    public function setFieldMappingInfo(array $FieldMappingInfo = null)
    {
      $this->FieldMappingInfo = $FieldMappingInfo;
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
      return isset($this->FieldMappingInfo[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return FieldMappingInfo
     */
    public function offsetGet($offset): FieldMappingInfo
    {
      return $this->FieldMappingInfo[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param FieldMappingInfo $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
      if (!isset($offset)) {
        $this->FieldMappingInfo[] = $value;
      } else {
        $this->FieldMappingInfo[$offset] = $value;
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
      unset($this->FieldMappingInfo[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return FieldMappingInfo Return the current element
     */
    public function current(): FieldMappingInfo
    {
      return current($this->FieldMappingInfo);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next(): void
    {
      next($this->FieldMappingInfo);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key(): string|null
    {
      return key($this->FieldMappingInfo);
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
      reset($this->FieldMappingInfo);
    }

    /**
     * Countable implementation
     *
     * @return FieldMappingInfo Return count of elements
     */
    public function count(): int
    {
      return count($this->FieldMappingInfo);
    }

}
