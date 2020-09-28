<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\PermissionsEx_SSP;

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
     * @return GetResourcePermissionsResponse
     */
    public function setGetResourcePermissionsResult($GetResourcePermissionsResult)
    {
        $this->GetResourcePermissionsResult = $GetResourcePermissionsResult;
        return $this;
    }

}
