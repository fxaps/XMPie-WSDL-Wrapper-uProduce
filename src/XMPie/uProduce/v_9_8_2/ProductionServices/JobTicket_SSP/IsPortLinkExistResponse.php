<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class IsPortLinkExistResponse
{

    /**
     * @var boolean $IsPortLinkExistResult
     */
    protected $IsPortLinkExistResult = null;

    /**
     * @param boolean $IsPortLinkExistResult
     */
    public function __construct($IsPortLinkExistResult = null)
    {
        $this->IsPortLinkExistResult = $IsPortLinkExistResult;
    }

    /**
     * @return boolean
     */
    public function getIsPortLinkExistResult()
    {
        return $this->IsPortLinkExistResult;
    }

    /**
     * @param boolean $IsPortLinkExistResult
     * @return IsPortLinkExistResponse
     */
    public function setIsPortLinkExistResult($IsPortLinkExistResult)
    {
        $this->IsPortLinkExistResult = $IsPortLinkExistResult;
        return $this;
    }

}
