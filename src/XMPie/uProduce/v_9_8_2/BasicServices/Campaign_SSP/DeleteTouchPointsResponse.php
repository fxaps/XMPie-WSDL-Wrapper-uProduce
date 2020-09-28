<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\Campaign_SSP;

class DeleteTouchPointsResponse
{

    /**
     * @var boolean $DeleteTouchPointsResult
     */
    protected $DeleteTouchPointsResult = null;

    /**
     * @param boolean $DeleteTouchPointsResult
     */
    public function __construct($DeleteTouchPointsResult = null)
    {
        $this->DeleteTouchPointsResult = $DeleteTouchPointsResult;
    }

    /**
     * @return boolean
     */
    public function getDeleteTouchPointsResult()
    {
        return $this->DeleteTouchPointsResult;
    }

    /**
     * @param boolean $DeleteTouchPointsResult
     * @return DeleteTouchPointsResponse
     */
    public function setDeleteTouchPointsResult($DeleteTouchPointsResult)
    {
        $this->DeleteTouchPointsResult = $DeleteTouchPointsResult;
        return $this;
    }

}
