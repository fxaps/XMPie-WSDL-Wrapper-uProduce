<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\OtherServices\Permissions_SSP;

class GetResourceLockingUserNameResponse
{

    /**
     * @var string $GetResourceLockingUserNameResult
     */
    protected $GetResourceLockingUserNameResult = null;

    /**
     * @param string $GetResourceLockingUserNameResult
     */
    public function __construct($GetResourceLockingUserNameResult = null)
    {
        $this->GetResourceLockingUserNameResult = $GetResourceLockingUserNameResult;
    }

    /**
     * @return string
     */
    public function getGetResourceLockingUserNameResult()
    {
        return $this->GetResourceLockingUserNameResult;
    }

    /**
     * @param string $GetResourceLockingUserNameResult
     * @return GetResourceLockingUserNameResponse
     */
    public function setGetResourceLockingUserNameResult($GetResourceLockingUserNameResult)
    {
        $this->GetResourceLockingUserNameResult = $GetResourceLockingUserNameResult;
        return $this;
    }

}
