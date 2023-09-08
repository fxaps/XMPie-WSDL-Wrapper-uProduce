<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_12_2\UndocumentedServices\PermissionsEx_SSP;

class GetPermissionsResponse
{

    /**
     * @var ArrayOfPermissionEx $GetPermissionsResult
     */
    protected $GetPermissionsResult = null;

    /**
     * @param ArrayOfPermissionEx $GetPermissionsResult
     */
    public function __construct($GetPermissionsResult = null)
    {
      $this->GetPermissionsResult = $GetPermissionsResult;
    }

    /**
     * @return ArrayOfPermissionEx
     */
    public function getGetPermissionsResult()
    {
      return $this->GetPermissionsResult;
    }

    /**
     * @param ArrayOfPermissionEx $GetPermissionsResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_2\UndocumentedServices\PermissionsEx_SSP\GetPermissionsResponse
     */
    public function setGetPermissionsResult($GetPermissionsResult)
    {
      $this->GetPermissionsResult = $GetPermissionsResult;
      return $this;
    }

}
