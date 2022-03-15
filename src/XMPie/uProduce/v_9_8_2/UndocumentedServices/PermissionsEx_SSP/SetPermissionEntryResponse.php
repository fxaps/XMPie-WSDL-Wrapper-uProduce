<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\PermissionsEx_SSP;

class SetPermissionEntryResponse
{

    /**
     * @var boolean $SetPermissionEntryResult
     */
    protected $SetPermissionEntryResult = null;

    /**
     * @param boolean $SetPermissionEntryResult
     */
    public function __construct($SetPermissionEntryResult = null)
    {
      $this->SetPermissionEntryResult = $SetPermissionEntryResult;
    }

    /**
     * @return boolean
     */
    public function getSetPermissionEntryResult()
    {
      return $this->SetPermissionEntryResult;
    }

    /**
     * @param boolean $SetPermissionEntryResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\PermissionsEx_SSP\SetPermissionEntryResponse
     */
    public function setSetPermissionEntryResult($SetPermissionEntryResult)
    {
      $this->SetPermissionEntryResult = $SetPermissionEntryResult;
      return $this;
    }

}
