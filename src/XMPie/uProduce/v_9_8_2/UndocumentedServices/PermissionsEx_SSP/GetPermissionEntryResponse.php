<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\PermissionsEx_SSP;

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
     * @return GetPermissionEntryResponse
     */
    public function setGetPermissionEntryResult($GetPermissionEntryResult)
    {
        $this->GetPermissionEntryResult = $GetPermissionEntryResult;
        return $this;
    }

}
