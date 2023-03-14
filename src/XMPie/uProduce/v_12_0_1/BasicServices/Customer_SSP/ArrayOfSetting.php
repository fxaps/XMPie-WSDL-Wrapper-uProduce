<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_12_0_1\BasicServices\Customer_SSP;

class ArrayOfSetting implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Setting[] $Setting
     */
    protected $Setting = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Setting[]
     */
    public function getSetting()
    {
      return $this->Setting;
    }

    /**
     * @param Setting[] $Setting
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_0_1\BasicServices\Customer_SSP\ArrayOfSetting
     */
    public function setSetting(array $Setting = null)
    {
      $this->Setting = $Setting;
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
      return isset($this->Setting[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Setting
     */
    public function offsetGet($offset): Setting
    {
      return $this->Setting[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Setting $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
      if (!isset($offset)) {
        $this->Setting[] = $value;
      } else {
        $this->Setting[$offset] = $value;
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
      unset($this->Setting[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Setting Return the current element
     */
    public function current(): Setting
    {
      return current($this->Setting);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next(): void
    {
      next($this->Setting);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key(): string|null
    {
      return key($this->Setting);
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
      reset($this->Setting);
    }

    /**
     * Countable implementation
     *
     * @return Setting Return count of elements
     */
    public function count(): int
    {
      return count($this->Setting);
    }

}
