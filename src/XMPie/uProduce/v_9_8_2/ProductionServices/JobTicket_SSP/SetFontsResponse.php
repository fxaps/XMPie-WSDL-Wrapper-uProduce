<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class SetFontsResponse
{

    /**
     * @var boolean $SetFontsResult
     */
    protected $SetFontsResult = null;

    /**
     * @param boolean $SetFontsResult
     */
    public function __construct($SetFontsResult = null)
    {
        $this->SetFontsResult = $SetFontsResult;
    }

    /**
     * @return boolean
     */
    public function getSetFontsResult()
    {
        return $this->SetFontsResult;
    }

    /**
     * @param boolean $SetFontsResult
     * @return SetFontsResponse
     */
    public function setSetFontsResult($SetFontsResult)
    {
        $this->SetFontsResult = $SetFontsResult;
        return $this;
    }

}
