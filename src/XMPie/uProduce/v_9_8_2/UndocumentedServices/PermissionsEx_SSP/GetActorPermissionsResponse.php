<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\PermissionsEx_SSP;

class GetActorPermissionsResponse
{

    /**
     * @var ArrayOfPermissionEx $GetActorPermissionsResult
     */
    protected $GetActorPermissionsResult = null;

    /**
     * @param ArrayOfPermissionEx $GetActorPermissionsResult
     */
    public function __construct($GetActorPermissionsResult = null)
    {
        $this->GetActorPermissionsResult = $GetActorPermissionsResult;
    }

    /**
     * @return ArrayOfPermissionEx
     */
    public function getGetActorPermissionsResult()
    {
        return $this->GetActorPermissionsResult;
    }

    /**
     * @param ArrayOfPermissionEx $GetActorPermissionsResult
     * @return GetActorPermissionsResponse
     */
    public function setGetActorPermissionsResult($GetActorPermissionsResult)
    {
        $this->GetActorPermissionsResult = $GetActorPermissionsResult;
        return $this;
    }

}
