<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_13_2\ProductionServices\JobTicket_SSP;

class ArrayOfAssetSourceInfo implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var AssetSourceInfo[] $AssetSourceInfo
     */
    protected $AssetSourceInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AssetSourceInfo[]
     */
    public function getAssetSourceInfo()
    {
      return $this->AssetSourceInfo;
    }

    /**
     * @param AssetSourceInfo[] $AssetSourceInfo
     * @return \XMPieWsdlClient\XMPie\uProduce\v_13_2\ProductionServices\JobTicket_SSP\ArrayOfAssetSourceInfo
     */
    public function setAssetSourceInfo(array $AssetSourceInfo = null)
    {
      $this->AssetSourceInfo = $AssetSourceInfo;
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
      return isset($this->AssetSourceInfo[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return AssetSourceInfo
     */
    public function offsetGet($offset): AssetSourceInfo
    {
      return $this->AssetSourceInfo[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param AssetSourceInfo $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
      if (!isset($offset)) {
        $this->AssetSourceInfo[] = $value;
      } else {
        $this->AssetSourceInfo[$offset] = $value;
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
      unset($this->AssetSourceInfo[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return AssetSourceInfo Return the current element
     */
    public function current(): AssetSourceInfo
    {
      return current($this->AssetSourceInfo);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next(): void
    {
      next($this->AssetSourceInfo);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key(): string|null
    {
      return key($this->AssetSourceInfo);
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
      reset($this->AssetSourceInfo);
    }

    /**
     * Countable implementation
     *
     * @return AssetSourceInfo Return count of elements
     */
    public function count(): int
    {
      return count($this->AssetSourceInfo);
    }

}
