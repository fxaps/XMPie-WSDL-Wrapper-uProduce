<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\OtherServices\Permissions_SSP;

class LockResourceResponse
{

    /**
     * @var boolean $LockResourceResult
     */
    protected $LockResourceResult = null;

    /**
     * @param boolean $LockResourceResult
     */
    public function __construct($LockResourceResult = null)
    {
        $this->LockResourceResult = $LockResourceResult;
    }

    /**
     * @return boolean
     */
    public function getLockResourceResult()
    {
        return $this->LockResourceResult;
    }

    /**
     * @param boolean $LockResourceResult
     * @return LockResourceResponse
     */
    public function setLockResourceResult($LockResourceResult)
    {
        $this->LockResourceResult = $LockResourceResult;
        return $this;
    }

}
