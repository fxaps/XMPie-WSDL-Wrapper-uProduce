<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_12_0_1\UndocumentedServices\Population_SSP;

class ArrayOfAdditionalDataSourceInfo implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var AdditionalDataSourceInfo[] $AdditionalDataSourceInfo
     */
    protected $AdditionalDataSourceInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AdditionalDataSourceInfo[]
     */
    public function getAdditionalDataSourceInfo()
    {
      return $this->AdditionalDataSourceInfo;
    }

    /**
     * @param AdditionalDataSourceInfo[] $AdditionalDataSourceInfo
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_0_1\UndocumentedServices\Population_SSP\ArrayOfAdditionalDataSourceInfo
     */
    public function setAdditionalDataSourceInfo(array $AdditionalDataSourceInfo = null)
    {
      $this->AdditionalDataSourceInfo = $AdditionalDataSourceInfo;
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
      return isset($this->AdditionalDataSourceInfo[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return AdditionalDataSourceInfo
     */
    public function offsetGet($offset): AdditionalDataSourceInfo
    {
      return $this->AdditionalDataSourceInfo[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param AdditionalDataSourceInfo $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
      if (!isset($offset)) {
        $this->AdditionalDataSourceInfo[] = $value;
      } else {
        $this->AdditionalDataSourceInfo[$offset] = $value;
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
      unset($this->AdditionalDataSourceInfo[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return AdditionalDataSourceInfo Return the current element
     */
    public function current(): AdditionalDataSourceInfo
    {
      return current($this->AdditionalDataSourceInfo);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next(): void
    {
      next($this->AdditionalDataSourceInfo);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key(): string|null
    {
      return key($this->AdditionalDataSourceInfo);
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
      reset($this->AdditionalDataSourceInfo);
    }

    /**
     * Countable implementation
     *
     * @return AdditionalDataSourceInfo Return count of elements
     */
    public function count(): int
    {
      return count($this->AdditionalDataSourceInfo);
    }

}