<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_13_2\BasicServices\PlanUtils_SSP;

class ArrayOfPlanFunctionParameter implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PlanFunctionParameter[] $PlanFunctionParameter
     */
    protected $PlanFunctionParameter = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PlanFunctionParameter[]
     */
    public function getPlanFunctionParameter()
    {
      return $this->PlanFunctionParameter;
    }

    /**
     * @param PlanFunctionParameter[] $PlanFunctionParameter
     * @return \XMPieWsdlClient\XMPie\uProduce\v_13_2\BasicServices\PlanUtils_SSP\ArrayOfPlanFunctionParameter
     */
    public function setPlanFunctionParameter(array $PlanFunctionParameter = null)
    {
      $this->PlanFunctionParameter = $PlanFunctionParameter;
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
      return isset($this->PlanFunctionParameter[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PlanFunctionParameter
     */
    public function offsetGet($offset): PlanFunctionParameter
    {
      return $this->PlanFunctionParameter[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PlanFunctionParameter $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
      if (!isset($offset)) {
        $this->PlanFunctionParameter[] = $value;
      } else {
        $this->PlanFunctionParameter[$offset] = $value;
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
      unset($this->PlanFunctionParameter[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PlanFunctionParameter Return the current element
     */
    public function current(): PlanFunctionParameter
    {
      return current($this->PlanFunctionParameter);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next(): void
    {
      next($this->PlanFunctionParameter);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key(): string|null
    {
      return key($this->PlanFunctionParameter);
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
      reset($this->PlanFunctionParameter);
    }

    /**
     * Countable implementation
     *
     * @return PlanFunctionParameter Return count of elements
     */
    public function count(): int
    {
      return count($this->PlanFunctionParameter);
    }

}
