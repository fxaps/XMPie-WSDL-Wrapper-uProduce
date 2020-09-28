<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\OtherServices\GeneralUtils_SSP;

class SetPathLocatorValueResponse
{

    /**
     * @var boolean $SetPathLocatorValueResult
     */
    protected $SetPathLocatorValueResult = null;

    /**
     * @param boolean $SetPathLocatorValueResult
     */
    public function __construct($SetPathLocatorValueResult = null)
    {
        $this->SetPathLocatorValueResult = $SetPathLocatorValueResult;
    }

    /**
     * @return boolean
     */
    public function getSetPathLocatorValueResult()
    {
        return $this->SetPathLocatorValueResult;
    }

    /**
     * @param boolean $SetPathLocatorValueResult
     * @return SetPathLocatorValueResponse
     */
    public function setSetPathLocatorValueResult($SetPathLocatorValueResult)
    {
        $this->SetPathLocatorValueResult = $SetPathLocatorValueResult;
        return $this;
    }

}
