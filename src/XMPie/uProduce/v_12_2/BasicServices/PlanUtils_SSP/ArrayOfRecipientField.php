<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_12_2\BasicServices\PlanUtils_SSP;

class ArrayOfRecipientField implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var RecipientField[] $RecipientField
     */
    protected $RecipientField = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RecipientField[]
     */
    public function getRecipientField()
    {
      return $this->RecipientField;
    }

    /**
     * @param RecipientField[] $RecipientField
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_2\BasicServices\PlanUtils_SSP\ArrayOfRecipientField
     */
    public function setRecipientField(array $RecipientField = null)
    {
      $this->RecipientField = $RecipientField;
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
      return isset($this->RecipientField[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return RecipientField
     */
    public function offsetGet($offset): RecipientField
    {
      return $this->RecipientField[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param RecipientField $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
      if (!isset($offset)) {
        $this->RecipientField[] = $value;
      } else {
        $this->RecipientField[$offset] = $value;
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
      unset($this->RecipientField[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return RecipientField Return the current element
     */
    public function current(): RecipientField
    {
      return current($this->RecipientField);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next(): void
    {
      next($this->RecipientField);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key(): string|null
    {
      return key($this->RecipientField);
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
      reset($this->RecipientField);
    }

    /**
     * Countable implementation
     *
     * @return RecipientField Return count of elements
     */
    public function count(): int
    {
      return count($this->RecipientField);
    }

}
