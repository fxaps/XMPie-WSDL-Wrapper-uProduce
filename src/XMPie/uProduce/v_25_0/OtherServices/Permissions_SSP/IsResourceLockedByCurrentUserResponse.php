<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_25_0\OtherServices\Permissions_SSP;

class IsResourceLockedByCurrentUserResponse
{

    /**
     * @var boolean $IsResourceLockedByCurrentUserResult
     */
    protected $IsResourceLockedByCurrentUserResult = null;

    /**
     * @param boolean $IsResourceLockedByCurrentUserResult
     */
    public function __construct($IsResourceLockedByCurrentUserResult = null)
    {
      $this->IsResourceLockedByCurrentUserResult = $IsResourceLockedByCurrentUserResult;
    }

    /**
     * @return boolean
     */
    public function getIsResourceLockedByCurrentUserResult()
    {
      return $this->IsResourceLockedByCurrentUserResult;
    }

    /**
     * @param boolean $IsResourceLockedByCurrentUserResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\OtherServices\Permissions_SSP\IsResourceLockedByCurrentUserResponse
     */
    public function setIsResourceLockedByCurrentUserResult($IsResourceLockedByCurrentUserResult)
    {
      $this->IsResourceLockedByCurrentUserResult = $IsResourceLockedByCurrentUserResult;
      return $this;
    }

}
