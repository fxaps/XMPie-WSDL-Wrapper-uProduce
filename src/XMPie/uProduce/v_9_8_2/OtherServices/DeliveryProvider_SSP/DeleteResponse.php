<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\OtherServices\DeliveryProvider_SSP;

class DeleteResponse
{

    /**
     * @var boolean $DeleteResult
     */
    protected $DeleteResult = null;

    /**
     * @param boolean $DeleteResult
     */
    public function __construct($DeleteResult = null)
    {
        $this->DeleteResult = $DeleteResult;
    }

    /**
     * @return boolean
     */
    public function getDeleteResult()
    {
        return $this->DeleteResult;
    }

    /**
     * @param boolean $DeleteResult
     * @return DeleteResponse
     */
    public function setDeleteResult($DeleteResult)
    {
        $this->DeleteResult = $DeleteResult;
        return $this;
    }

}
