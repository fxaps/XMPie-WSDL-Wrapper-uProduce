<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\Customer_SSP;

class DeleteDeliveryProvidersResponse
{

    /**
     * @var boolean $DeleteDeliveryProvidersResult
     */
    protected $DeleteDeliveryProvidersResult = null;

    /**
     * @param boolean $DeleteDeliveryProvidersResult
     */
    public function __construct($DeleteDeliveryProvidersResult = null)
    {
        $this->DeleteDeliveryProvidersResult = $DeleteDeliveryProvidersResult;
    }

    /**
     * @return boolean
     */
    public function getDeleteDeliveryProvidersResult()
    {
        return $this->DeleteDeliveryProvidersResult;
    }

    /**
     * @param boolean $DeleteDeliveryProvidersResult
     * @return DeleteDeliveryProvidersResponse
     */
    public function setDeleteDeliveryProvidersResult($DeleteDeliveryProvidersResult)
    {
        $this->DeleteDeliveryProvidersResult = $DeleteDeliveryProvidersResult;
        return $this;
    }

}
