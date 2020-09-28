<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\Customer_SSP;

class DeleteDestinationsResponse
{

    /**
     * @var boolean $DeleteDestinationsResult
     */
    protected $DeleteDestinationsResult = null;

    /**
     * @param boolean $DeleteDestinationsResult
     */
    public function __construct($DeleteDestinationsResult = null)
    {
        $this->DeleteDestinationsResult = $DeleteDestinationsResult;
    }

    /**
     * @return boolean
     */
    public function getDeleteDestinationsResult()
    {
        return $this->DeleteDestinationsResult;
    }

    /**
     * @param boolean $DeleteDestinationsResult
     * @return DeleteDestinationsResponse
     */
    public function setDeleteDestinationsResult($DeleteDestinationsResult)
    {
        $this->DeleteDestinationsResult = $DeleteDestinationsResult;
        return $this;
    }

}
