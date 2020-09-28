<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class SetEmbedEmailBodyResponse
{

    /**
     * @var boolean $SetEmbedEmailBodyResult
     */
    protected $SetEmbedEmailBodyResult = null;

    /**
     * @param boolean $SetEmbedEmailBodyResult
     */
    public function __construct($SetEmbedEmailBodyResult = null)
    {
        $this->SetEmbedEmailBodyResult = $SetEmbedEmailBodyResult;
    }

    /**
     * @return boolean
     */
    public function getSetEmbedEmailBodyResult()
    {
        return $this->SetEmbedEmailBodyResult;
    }

    /**
     * @param boolean $SetEmbedEmailBodyResult
     * @return SetEmbedEmailBodyResponse
     */
    public function setSetEmbedEmailBodyResult($SetEmbedEmailBodyResult)
    {
        $this->SetEmbedEmailBodyResult = $SetEmbedEmailBodyResult;
        return $this;
    }

}
