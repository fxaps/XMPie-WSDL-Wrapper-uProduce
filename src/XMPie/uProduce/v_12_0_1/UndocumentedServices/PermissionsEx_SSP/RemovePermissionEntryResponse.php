<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_12_0_1\UndocumentedServices\PermissionsEx_SSP;

class RemovePermissionEntryResponse
{

    /**
     * @var boolean $RemovePermissionEntryResult
     */
    protected $RemovePermissionEntryResult = null;

    /**
     * @param boolean $RemovePermissionEntryResult
     */
    public function __construct($RemovePermissionEntryResult = null)
    {
      $this->RemovePermissionEntryResult = $RemovePermissionEntryResult;
    }

    /**
     * @return boolean
     */
    public function getRemovePermissionEntryResult()
    {
      return $this->RemovePermissionEntryResult;
    }

    /**
     * @param boolean $RemovePermissionEntryResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_0_1\UndocumentedServices\PermissionsEx_SSP\RemovePermissionEntryResponse
     */
    public function setRemovePermissionEntryResult($RemovePermissionEntryResult)
    {
      $this->RemovePermissionEntryResult = $RemovePermissionEntryResult;
      return $this;
    }

}
