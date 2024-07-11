<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_13_2\BasicServices\Campaign_SSP;

class ArrayOfDocumentMapping implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var DocumentMapping[] $DocumentMapping
     */
    protected $DocumentMapping = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DocumentMapping[]
     */
    public function getDocumentMapping()
    {
      return $this->DocumentMapping;
    }

    /**
     * @param DocumentMapping[] $DocumentMapping
     * @return \XMPieWsdlClient\XMPie\uProduce\v_13_2\BasicServices\Campaign_SSP\ArrayOfDocumentMapping
     */
    public function setDocumentMapping(array $DocumentMapping = null)
    {
      $this->DocumentMapping = $DocumentMapping;
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
      return isset($this->DocumentMapping[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return DocumentMapping
     */
    public function offsetGet($offset): DocumentMapping
    {
      return $this->DocumentMapping[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param DocumentMapping $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
      if (!isset($offset)) {
        $this->DocumentMapping[] = $value;
      } else {
        $this->DocumentMapping[$offset] = $value;
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
      unset($this->DocumentMapping[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return DocumentMapping Return the current element
     */
    public function current(): DocumentMapping
    {
      return current($this->DocumentMapping);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next(): void
    {
      next($this->DocumentMapping);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key(): string|null
    {
      return key($this->DocumentMapping);
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
      reset($this->DocumentMapping);
    }

    /**
     * Countable implementation
     *
     * @return DocumentMapping Return count of elements
     */
    public function count(): int
    {
      return count($this->DocumentMapping);
    }

}
