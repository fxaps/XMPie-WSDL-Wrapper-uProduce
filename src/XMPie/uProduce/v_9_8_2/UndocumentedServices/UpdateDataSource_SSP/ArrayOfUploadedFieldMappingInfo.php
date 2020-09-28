<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\UpdateDataSource_SSP;

class ArrayOfUploadedFieldMappingInfo implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var UploadedFieldMappingInfo[] $UploadedFieldMappingInfo
     */
    protected $UploadedFieldMappingInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return UploadedFieldMappingInfo[]
     */
    public function getUploadedFieldMappingInfo()
    {
      return $this->UploadedFieldMappingInfo;
    }

    /**
     * @param UploadedFieldMappingInfo[] $UploadedFieldMappingInfo
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\UpdateDataSource_SSP\ArrayOfUploadedFieldMappingInfo
     */
    public function setUploadedFieldMappingInfo(array $UploadedFieldMappingInfo = null)
    {
      $this->UploadedFieldMappingInfo = $UploadedFieldMappingInfo;
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
      return isset($this->UploadedFieldMappingInfo[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return UploadedFieldMappingInfo
     */
    public function offsetGet($offset)
    {
      return $this->UploadedFieldMappingInfo[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param UploadedFieldMappingInfo $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->UploadedFieldMappingInfo[] = $value;
      } else {
        $this->UploadedFieldMappingInfo[$offset] = $value;
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
      unset($this->UploadedFieldMappingInfo[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return UploadedFieldMappingInfo Return the current element
     */
    public function current()
    {
      return current($this->UploadedFieldMappingInfo);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->UploadedFieldMappingInfo);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->UploadedFieldMappingInfo);
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
      reset($this->UploadedFieldMappingInfo);
    }

    /**
     * Countable implementation
     *
     * @return UploadedFieldMappingInfo Return count of elements
     */
    public function count()
    {
      return count($this->UploadedFieldMappingInfo);
    }

}
