<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_25_0\UndocumentedServices\PermissionsEx_SSP;

class GetPermissionEntryResponse
{

    /**
     * @var boolean $GetPermissionEntryResult
     */
    protected $GetPermissionEntryResult = null;

    /**
     * @param boolean $GetPermissionEntryResult
     */
    public function __construct($GetPermissionEntryResult = null)
    {
      $this->GetPermissionEntryResult = $GetPermissionEntryResult;
    }

    /**
     * @return boolean
     */
    public function getGetPermissionEntryResult()
    {
      return $this->GetPermissionEntryResult;
    }

    /**
     * @param boolean $GetPermissionEntryResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\UndocumentedServices\PermissionsEx_SSP\GetPermissionEntryResponse
     */
    public function setGetPermissionEntryResult($GetPermissionEntryResult)
    {
      $this->GetPermissionEntryResult = $GetPermissionEntryResult;
      return $this;
    }

}
