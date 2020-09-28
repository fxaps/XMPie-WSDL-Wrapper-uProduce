<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class SetFontsByIDResponse
{

    /**
     * @var boolean $SetFontsByIDResult
     */
    protected $SetFontsByIDResult = null;

    /**
     * @param boolean $SetFontsByIDResult
     */
    public function __construct($SetFontsByIDResult = null)
    {
        $this->SetFontsByIDResult = $SetFontsByIDResult;
    }

    /**
     * @return boolean
     */
    public function getSetFontsByIDResult()
    {
        return $this->SetFontsByIDResult;
    }

    /**
     * @param boolean $SetFontsByIDResult
     * @return SetFontsByIDResponse
     */
    public function setSetFontsByIDResult($SetFontsByIDResult)
    {
        $this->SetFontsByIDResult = $SetFontsByIDResult;
        return $this;
    }

}
