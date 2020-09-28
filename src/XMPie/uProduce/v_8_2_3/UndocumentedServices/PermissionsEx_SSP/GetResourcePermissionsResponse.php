<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_8_2_3\UndocumentedServices\PermissionsEx_SSP;

class GetResourcePermissionsResponse
{

    /**
     * @var ArrayOfPermissionEx $GetResourcePermissionsResult
     */
    protected $GetResourcePermissionsResult = null;

    /**
     * @param ArrayOfPermissionEx $GetResourcePermissionsResult
     */
    public function __construct($GetResourcePermissionsResult = null)
    {
      $this->GetResourcePermissionsResult = $GetResourcePermissionsResult;
    }

    /**
     * @return ArrayOfPermissionEx
     */
    public function getGetResourcePermissionsResult()
    {
      return $this->GetResourcePermissionsResult;
    }

    /**
     * @param ArrayOfPermissionEx $GetResourcePermissionsResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_8_2_3\UndocumentedServices\PermissionsEx_SSP\GetResourcePermissionsResponse
     */
    public function setGetResourcePermissionsResult($GetResourcePermissionsResult)
    {
      $this->GetResourcePermissionsResult = $GetResourcePermissionsResult;
      return $this;
    }

}
