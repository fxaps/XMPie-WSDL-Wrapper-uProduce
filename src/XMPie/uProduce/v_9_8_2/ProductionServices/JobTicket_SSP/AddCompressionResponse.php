<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class AddCompressionResponse
{

    /**
     * @var boolean $AddCompressionResult
     */
    protected $AddCompressionResult = null;

    /**
     * @param boolean $AddCompressionResult
     */
    public function __construct($AddCompressionResult = null)
    {
        $this->AddCompressionResult = $AddCompressionResult;
    }

    /**
     * @return boolean
     */
    public function getAddCompressionResult()
    {
        return $this->AddCompressionResult;
    }

    /**
     * @param boolean $AddCompressionResult
     * @return AddCompressionResponse
     */
    public function setAddCompressionResult($AddCompressionResult)
    {
        $this->AddCompressionResult = $AddCompressionResult;
        return $this;
    }

}
