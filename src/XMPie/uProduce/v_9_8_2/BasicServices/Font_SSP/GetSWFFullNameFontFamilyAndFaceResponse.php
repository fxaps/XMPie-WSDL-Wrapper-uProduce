<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\Font_SSP;

class GetSWFFullNameFontFamilyAndFaceResponse
{

    /**
     * @var string $outFamilyName
     */
    protected $outFamilyName = null;

    /**
     * @var string $outFontFace
     */
    protected $outFontFace = null;

    /**
     * @param string $outFamilyName
     * @param string $outFontFace
     */
    public function __construct($outFamilyName = null, $outFontFace = null)
    {
        $this->outFamilyName = $outFamilyName;
        $this->outFontFace = $outFontFace;
    }

    /**
     * @return string
     */
    public function getOutFamilyName()
    {
        return $this->outFamilyName;
    }

    /**
     * @param string $outFamilyName
     * @return GetSWFFullNameFontFamilyAndFaceResponse
     */
    public function setOutFamilyName($outFamilyName)
    {
        $this->outFamilyName = $outFamilyName;
        return $this;
    }

    /**
     * @return string
     */
    public function getOutFontFace()
    {
        return $this->outFontFace;
    }

    /**
     * @param string $outFontFace
     * @return GetSWFFullNameFontFamilyAndFaceResponse
     */
    public function setOutFontFace($outFontFace)
    {
        $this->outFontFace = $outFontFace;
        return $this;
    }

}
