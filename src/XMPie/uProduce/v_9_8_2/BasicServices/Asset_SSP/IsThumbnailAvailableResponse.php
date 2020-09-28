<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\Asset_SSP;

class IsThumbnailAvailableResponse
{

    /**
     * @var boolean $IsThumbnailAvailableResult
     */
    protected $IsThumbnailAvailableResult = null;

    /**
     * @param boolean $IsThumbnailAvailableResult
     */
    public function __construct($IsThumbnailAvailableResult = null)
    {
        $this->IsThumbnailAvailableResult = $IsThumbnailAvailableResult;
    }

    /**
     * @return boolean
     */
    public function getIsThumbnailAvailableResult()
    {
        return $this->IsThumbnailAvailableResult;
    }

    /**
     * @param boolean $IsThumbnailAvailableResult
     * @return IsThumbnailAvailableResponse
     */
    public function setIsThumbnailAvailableResult($IsThumbnailAvailableResult)
    {
        $this->IsThumbnailAvailableResult = $IsThumbnailAvailableResult;
        return $this;
    }

}
