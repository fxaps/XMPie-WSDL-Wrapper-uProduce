<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_12_2\UndocumentedServices\PermissionsEx_SSP;

class ArrayOfPermissionEx implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PermissionEx[] $PermissionEx
     */
    protected $PermissionEx = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PermissionEx[]
     */
    public function getPermissionEx()
    {
      return $this->PermissionEx;
    }

    /**
     * @param PermissionEx[] $PermissionEx
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_2\UndocumentedServices\PermissionsEx_SSP\ArrayOfPermissionEx
     */
    public function setPermissionEx(array $PermissionEx = null)
    {
      $this->PermissionEx = $PermissionEx;
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
      return isset($this->PermissionEx[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PermissionEx
     */
    public function offsetGet($offset): PermissionEx
    {
      return $this->PermissionEx[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PermissionEx $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
      if (!isset($offset)) {
        $this->PermissionEx[] = $value;
      } else {
        $this->PermissionEx[$offset] = $value;
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
      unset($this->PermissionEx[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PermissionEx Return the current element
     */
    public function current(): PermissionEx
    {
      return current($this->PermissionEx);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next(): void
    {
      next($this->PermissionEx);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key(): string|null
    {
      return key($this->PermissionEx);
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
      reset($this->PermissionEx);
    }

    /**
     * Countable implementation
     *
     * @return PermissionEx Return count of elements
     */
    public function count(): int
    {
      return count($this->PermissionEx);
    }

}
