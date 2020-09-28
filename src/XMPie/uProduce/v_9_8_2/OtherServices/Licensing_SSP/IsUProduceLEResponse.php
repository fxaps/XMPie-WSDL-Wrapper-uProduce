<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\OtherServices\Licensing_SSP;

class IsUProduceLEResponse
{

    /**
     * @var boolean $IsUProduceLEResult
     */
    protected $IsUProduceLEResult = null;

    /**
     * @param boolean $IsUProduceLEResult
     */
    public function __construct($IsUProduceLEResult = null)
    {
        $this->IsUProduceLEResult = $IsUProduceLEResult;
    }

    /**
     * @return boolean
     */
    public function getIsUProduceLEResult()
    {
        return $this->IsUProduceLEResult;
    }

    /**
     * @param boolean $IsUProduceLEResult
     * @return IsUProduceLEResponse
     */
    public function setIsUProduceLEResult($IsUProduceLEResult)
    {
        $this->IsUProduceLEResult = $IsUProduceLEResult;
        return $this;
    }

}
