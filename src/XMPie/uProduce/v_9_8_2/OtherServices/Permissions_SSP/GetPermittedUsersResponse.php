<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\OtherServices\Permissions_SSP;

class GetPermittedUsersResponse
{

    /**
     * @var ArrayOfString $GetPermittedUsersResult
     */
    protected $GetPermittedUsersResult = null;

    /**
     * @param ArrayOfString $GetPermittedUsersResult
     */
    public function __construct($GetPermittedUsersResult = null)
    {
        $this->GetPermittedUsersResult = $GetPermittedUsersResult;
    }

    /**
     * @return ArrayOfString
     */
    public function getGetPermittedUsersResult()
    {
        return $this->GetPermittedUsersResult;
    }

    /**
     * @param ArrayOfString $GetPermittedUsersResult
     * @return GetPermittedUsersResponse
     */
    public function setGetPermittedUsersResult($GetPermittedUsersResult)
    {
        $this->GetPermittedUsersResult = $GetPermittedUsersResult;
        return $this;
    }

}
