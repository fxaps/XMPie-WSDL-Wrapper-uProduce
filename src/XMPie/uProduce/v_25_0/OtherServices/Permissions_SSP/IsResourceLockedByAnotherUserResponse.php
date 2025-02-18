<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_25_0\OtherServices\Permissions_SSP;

class IsResourceLockedByAnotherUserResponse
{

    /**
     * @var boolean $IsResourceLockedByAnotherUserResult
     */
    protected $IsResourceLockedByAnotherUserResult = null;

    /**
     * @param boolean $IsResourceLockedByAnotherUserResult
     */
    public function __construct($IsResourceLockedByAnotherUserResult = null)
    {
      $this->IsResourceLockedByAnotherUserResult = $IsResourceLockedByAnotherUserResult;
    }

    /**
     * @return boolean
     */
    public function getIsResourceLockedByAnotherUserResult()
    {
      return $this->IsResourceLockedByAnotherUserResult;
    }

    /**
     * @param boolean $IsResourceLockedByAnotherUserResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\OtherServices\Permissions_SSP\IsResourceLockedByAnotherUserResponse
     */
    public function setIsResourceLockedByAnotherUserResult($IsResourceLockedByAnotherUserResult)
    {
      $this->IsResourceLockedByAnotherUserResult = $IsResourceLockedByAnotherUserResult;
      return $this;
    }

}
