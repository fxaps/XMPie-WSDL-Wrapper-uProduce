<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_12_2\OtherServices\InteractiveCampaign_SSP;

class ArrayOfPlanObject implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PlanObject[] $PlanObject
     */
    protected $PlanObject = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PlanObject[]
     */
    public function getPlanObject()
    {
      return $this->PlanObject;
    }

    /**
     * @param PlanObject[] $PlanObject
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_2\OtherServices\InteractiveCampaign_SSP\ArrayOfPlanObject
     */
    public function setPlanObject(array $PlanObject = null)
    {
      $this->PlanObject = $PlanObject;
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
      return isset($this->PlanObject[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PlanObject
     */
    public function offsetGet($offset): PlanObject
    {
      return $this->PlanObject[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PlanObject $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
      if (!isset($offset)) {
        $this->PlanObject[] = $value;
      } else {
        $this->PlanObject[$offset] = $value;
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
      unset($this->PlanObject[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PlanObject Return the current element
     */
    public function current(): PlanObject
    {
      return current($this->PlanObject);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next(): void
    {
      next($this->PlanObject);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key(): string|null
    {
      return key($this->PlanObject);
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
      reset($this->PlanObject);
    }

    /**
     * Countable implementation
     *
     * @return PlanObject Return count of elements
     */
    public function count(): int
    {
      return count($this->PlanObject);
    }

}
