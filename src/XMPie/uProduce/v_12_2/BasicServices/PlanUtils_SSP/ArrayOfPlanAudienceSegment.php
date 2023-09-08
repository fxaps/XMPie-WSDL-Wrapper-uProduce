<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_12_2\BasicServices\PlanUtils_SSP;

class ArrayOfPlanAudienceSegment implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PlanAudienceSegment[] $PlanAudienceSegment
     */
    protected $PlanAudienceSegment = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PlanAudienceSegment[]
     */
    public function getPlanAudienceSegment()
    {
      return $this->PlanAudienceSegment;
    }

    /**
     * @param PlanAudienceSegment[] $PlanAudienceSegment
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_2\BasicServices\PlanUtils_SSP\ArrayOfPlanAudienceSegment
     */
    public function setPlanAudienceSegment(array $PlanAudienceSegment = null)
    {
      $this->PlanAudienceSegment = $PlanAudienceSegment;
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
      return isset($this->PlanAudienceSegment[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PlanAudienceSegment
     */
    public function offsetGet($offset): PlanAudienceSegment
    {
      return $this->PlanAudienceSegment[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PlanAudienceSegment $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
      if (!isset($offset)) {
        $this->PlanAudienceSegment[] = $value;
      } else {
        $this->PlanAudienceSegment[$offset] = $value;
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
      unset($this->PlanAudienceSegment[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PlanAudienceSegment Return the current element
     */
    public function current(): PlanAudienceSegment
    {
      return current($this->PlanAudienceSegment);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next(): void
    {
      next($this->PlanAudienceSegment);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key(): string|null
    {
      return key($this->PlanAudienceSegment);
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
      reset($this->PlanAudienceSegment);
    }

    /**
     * Countable implementation
     *
     * @return PlanAudienceSegment Return count of elements
     */
    public function count(): int
    {
      return count($this->PlanAudienceSegment);
    }

}
