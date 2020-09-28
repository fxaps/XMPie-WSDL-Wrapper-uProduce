<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\Font_SSP;

class GetFontFileSizeInfoResponse
{

    /**
     * @var FontSizeInfo $GetFontFileSizeInfoResult
     */
    protected $GetFontFileSizeInfoResult = null;

    /**
     * @param FontSizeInfo $GetFontFileSizeInfoResult
     */
    public function __construct($GetFontFileSizeInfoResult = null)
    {
        $this->GetFontFileSizeInfoResult = $GetFontFileSizeInfoResult;
    }

    /**
     * @return FontSizeInfo
     */
    public function getGetFontFileSizeInfoResult()
    {
        return $this->GetFontFileSizeInfoResult;
    }

    /**
     * @param FontSizeInfo $GetFontFileSizeInfoResult
     * @return GetFontFileSizeInfoResponse
     */
    public function setGetFontFileSizeInfoResult($GetFontFileSizeInfoResult)
    {
        $this->GetFontFileSizeInfoResult = $GetFontFileSizeInfoResult;
        return $this;
    }

}
