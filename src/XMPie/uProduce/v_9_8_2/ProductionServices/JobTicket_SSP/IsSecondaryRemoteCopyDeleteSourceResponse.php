<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class IsSecondaryRemoteCopyDeleteSourceResponse
{

    /**
     * @var boolean $IsSecondaryRemoteCopyDeleteSourceResult
     */
    protected $IsSecondaryRemoteCopyDeleteSourceResult = null;

    /**
     * @param boolean $IsSecondaryRemoteCopyDeleteSourceResult
     */
    public function __construct($IsSecondaryRemoteCopyDeleteSourceResult = null)
    {
        $this->IsSecondaryRemoteCopyDeleteSourceResult = $IsSecondaryRemoteCopyDeleteSourceResult;
    }

    /**
     * @return boolean
     */
    public function getIsSecondaryRemoteCopyDeleteSourceResult()
    {
        return $this->IsSecondaryRemoteCopyDeleteSourceResult;
    }

    /**
     * @param boolean $IsSecondaryRemoteCopyDeleteSourceResult
     * @return IsSecondaryRemoteCopyDeleteSourceResponse
     */
    public function setIsSecondaryRemoteCopyDeleteSourceResult($IsSecondaryRemoteCopyDeleteSourceResult)
    {
        $this->IsSecondaryRemoteCopyDeleteSourceResult = $IsSecondaryRemoteCopyDeleteSourceResult;
        return $this;
    }

}
