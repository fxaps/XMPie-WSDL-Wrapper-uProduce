<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\Campaign_SSP;

class GetFontsXMPTblDataSetResponse
{

    /**
     * @var XMPTblDataSet $GetFontsXMPTblDataSetResult
     */
    protected $GetFontsXMPTblDataSetResult = null;

    /**
     * @param XMPTblDataSet $GetFontsXMPTblDataSetResult
     */
    public function __construct($GetFontsXMPTblDataSetResult = null)
    {
        $this->GetFontsXMPTblDataSetResult = $GetFontsXMPTblDataSetResult;
    }

    /**
     * @return XMPTblDataSet
     */
    public function getGetFontsXMPTblDataSetResult()
    {
        return $this->GetFontsXMPTblDataSetResult;
    }

    /**
     * @param XMPTblDataSet $GetFontsXMPTblDataSetResult
     * @return GetFontsXMPTblDataSetResponse
     */
    public function setGetFontsXMPTblDataSetResult($GetFontsXMPTblDataSetResult)
    {
        $this->GetFontsXMPTblDataSetResult = $GetFontsXMPTblDataSetResult;
        return $this;
    }

}
