<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\DataSource_SSP;

class IsDownloadableResponse
{

    /**
     * @var boolean $IsDownloadableResult
     */
    protected $IsDownloadableResult = null;

    /**
     * @param boolean $IsDownloadableResult
     */
    public function __construct($IsDownloadableResult = null)
    {
        $this->IsDownloadableResult = $IsDownloadableResult;
    }

    /**
     * @return boolean
     */
    public function getIsDownloadableResult()
    {
        return $this->IsDownloadableResult;
    }

    /**
     * @param boolean $IsDownloadableResult
     * @return IsDownloadableResponse
     */
    public function setIsDownloadableResult($IsDownloadableResult)
    {
        $this->IsDownloadableResult = $IsDownloadableResult;
        return $this;
    }

}
