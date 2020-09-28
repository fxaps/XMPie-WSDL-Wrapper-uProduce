<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\OtherServices\DeliveryProvider_SSP;

class ReplaceResponse
{

    /**
     * @var boolean $ReplaceResult
     */
    protected $ReplaceResult = null;

    /**
     * @param boolean $ReplaceResult
     */
    public function __construct($ReplaceResult = null)
    {
        $this->ReplaceResult = $ReplaceResult;
    }

    /**
     * @return boolean
     */
    public function getReplaceResult()
    {
        return $this->ReplaceResult;
    }

    /**
     * @param boolean $ReplaceResult
     * @return ReplaceResponse
     */
    public function setReplaceResult($ReplaceResult)
    {
        $this->ReplaceResult = $ReplaceResult;
        return $this;
    }

}
