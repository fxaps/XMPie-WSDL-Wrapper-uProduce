<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_25_0\UndocumentedServices\PermissionsEx_SSP;

class RemovePermissionsEntriesResponse
{

    /**
     * @var boolean $RemovePermissionsEntriesResult
     */
    protected $RemovePermissionsEntriesResult = null;

    /**
     * @param boolean $RemovePermissionsEntriesResult
     */
    public function __construct($RemovePermissionsEntriesResult = null)
    {
      $this->RemovePermissionsEntriesResult = $RemovePermissionsEntriesResult;
    }

    /**
     * @return boolean
     */
    public function getRemovePermissionsEntriesResult()
    {
      return $this->RemovePermissionsEntriesResult;
    }

    /**
     * @param boolean $RemovePermissionsEntriesResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\UndocumentedServices\PermissionsEx_SSP\RemovePermissionsEntriesResponse
     */
    public function setRemovePermissionsEntriesResult($RemovePermissionsEntriesResult)
    {
      $this->RemovePermissionsEntriesResult = $RemovePermissionsEntriesResult;
      return $this;
    }

}
