<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\OtherServices\Permissions_SSP;

class IsAllowedResponse
{

    /**
     * @var boolean $IsAllowedResult
     */
    protected $IsAllowedResult = null;

    /**
     * @param boolean $IsAllowedResult
     */
    public function __construct($IsAllowedResult = null)
    {
        $this->IsAllowedResult = $IsAllowedResult;
    }

    /**
     * @return boolean
     */
    public function getIsAllowedResult()
    {
        return $this->IsAllowedResult;
    }

    /**
     * @param boolean $IsAllowedResult
     * @return IsAllowedResponse
     */
    public function setIsAllowedResult($IsAllowedResult)
    {
        $this->IsAllowedResult = $IsAllowedResult;
        return $this;
    }

}
