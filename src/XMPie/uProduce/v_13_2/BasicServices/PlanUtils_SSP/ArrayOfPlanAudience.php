<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_13_2\BasicServices\PlanUtils_SSP;

class ArrayOfPlanAudience implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PlanAudience[] $PlanAudience
     */
    protected $PlanAudience = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PlanAudience[]
     */
    public function getPlanAudience()
    {
      return $this->PlanAudience;
    }

    /**
     * @param PlanAudience[] $PlanAudience
     * @return \XMPieWsdlClient\XMPie\uProduce\v_13_2\BasicServices\PlanUtils_SSP\ArrayOfPlanAudience
     */
    public function setPlanAudience(array $PlanAudience = null)
    {
      $this->PlanAudience = $PlanAudience;
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
      return isset($this->PlanAudience[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PlanAudience
     */
    public function offsetGet($offset): PlanAudience
    {
      return $this->PlanAudience[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PlanAudience $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
      if (!isset($offset)) {
        $this->PlanAudience[] = $value;
      } else {
        $this->PlanAudience[$offset] = $value;
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
      unset($this->PlanAudience[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PlanAudience Return the current element
     */
    public function current(): PlanAudience
    {
      return current($this->PlanAudience);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next(): void
    {
      next($this->PlanAudience);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key(): string|null
    {
      return key($this->PlanAudience);
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
      reset($this->PlanAudience);
    }

    /**
     * Countable implementation
     *
     * @return PlanAudience Return count of elements
     */
    public function count(): int
    {
      return count($this->PlanAudience);
    }

}
