<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_25_0\OtherServices\Permissions_SSP;

class ArrayOfPermission implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Permission[] $Permission
     */
    protected $Permission = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Permission[]
     */
    public function getPermission()
    {
      return $this->Permission;
    }

    /**
     * @param Permission[] $Permission
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\OtherServices\Permissions_SSP\ArrayOfPermission
     */
    public function setPermission(array $Permission = null)
    {
      $this->Permission = $Permission;
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
      return isset($this->Permission[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Permission
     */
    public function offsetGet($offset): Permission
    {
      return $this->Permission[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Permission $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
      if (!isset($offset)) {
        $this->Permission[] = $value;
      } else {
        $this->Permission[$offset] = $value;
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
      unset($this->Permission[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Permission Return the current element
     */
    public function current(): Permission
    {
      return current($this->Permission);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next(): void
    {
      next($this->Permission);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key(): string|null
    {
      return key($this->Permission);
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
      reset($this->Permission);
    }

    /**
     * Countable implementation
     *
     * @return Permission Return count of elements
     */
    public function count(): int
    {
      return count($this->Permission);
    }

}
