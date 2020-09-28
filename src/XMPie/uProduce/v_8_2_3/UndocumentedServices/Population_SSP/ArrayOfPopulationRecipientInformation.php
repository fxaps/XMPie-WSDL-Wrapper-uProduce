<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_8_2_3\UndocumentedServices\Population_SSP;

class ArrayOfPopulationRecipientInformation implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PopulationRecipientInformation[] $PopulationRecipientInformation
     */
    protected $PopulationRecipientInformation = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PopulationRecipientInformation[]
     */
    public function getPopulationRecipientInformation()
    {
      return $this->PopulationRecipientInformation;
    }

    /**
     * @param PopulationRecipientInformation[] $PopulationRecipientInformation
     * @return \XMPieWsdlClient\XMPie\uProduce\v_8_2_3\UndocumentedServices\Population_SSP\ArrayOfPopulationRecipientInformation
     */
    public function setPopulationRecipientInformation(array $PopulationRecipientInformation = null)
    {
      $this->PopulationRecipientInformation = $PopulationRecipientInformation;
      return $this;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset An offset to check for
     * @return boolean true on success or false on failure
     */
    public function offsetExists($offset)
    {
      return isset($this->PopulationRecipientInformation[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PopulationRecipientInformation
     */
    public function offsetGet($offset)
    {
      return $this->PopulationRecipientInformation[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PopulationRecipientInformation $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->PopulationRecipientInformation[] = $value;
      } else {
        $this->PopulationRecipientInformation[$offset] = $value;
      }
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->PopulationRecipientInformation[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PopulationRecipientInformation Return the current element
     */
    public function current()
    {
      return current($this->PopulationRecipientInformation);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PopulationRecipientInformation);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PopulationRecipientInformation);
    }

    /**
     * Iterator implementation
     *
     * @return boolean Return the validity of the current position
     */
    public function valid()
    {
      return $this->key() !== null;
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element
     *
     * @return void
     */
    public function rewind()
    {
      reset($this->PopulationRecipientInformation);
    }

    /**
     * Countable implementation
     *
     * @return PopulationRecipientInformation Return count of elements
     */
    public function count()
    {
      return count($this->PopulationRecipientInformation);
    }

}
