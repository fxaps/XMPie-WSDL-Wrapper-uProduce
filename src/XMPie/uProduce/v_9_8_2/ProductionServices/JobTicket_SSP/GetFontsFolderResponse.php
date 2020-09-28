<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class GetFontsFolderResponse
{

    /**
     * @var string $GetFontsFolderResult
     */
    protected $GetFontsFolderResult = null;

    /**
     * @param string $GetFontsFolderResult
     */
    public function __construct($GetFontsFolderResult = null)
    {
        $this->GetFontsFolderResult = $GetFontsFolderResult;
    }

    /**
     * @return string
     */
    public function getGetFontsFolderResult()
    {
        return $this->GetFontsFolderResult;
    }

    /**
     * @param string $GetFontsFolderResult
     * @return GetFontsFolderResponse
     */
    public function setGetFontsFolderResult($GetFontsFolderResult)
    {
        $this->GetFontsFolderResult = $GetFontsFolderResult;
        return $this;
    }

}
