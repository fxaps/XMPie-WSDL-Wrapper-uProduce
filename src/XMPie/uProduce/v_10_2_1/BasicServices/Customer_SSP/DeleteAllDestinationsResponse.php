<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_10_2_1\BasicServices\Customer_SSP;

class DeleteAllDestinationsResponse
{

    /**
     * @var boolean $DeleteAllDestinationsResult
     */
    protected $DeleteAllDestinationsResult = null;

    /**
     * @param boolean $DeleteAllDestinationsResult
     */
    public function __construct($DeleteAllDestinationsResult = null)
    {
      $this->DeleteAllDestinationsResult = $DeleteAllDestinationsResult;
    }

    /**
     * @return boolean
     */
    public function getDeleteAllDestinationsResult()
    {
      return $this->DeleteAllDestinationsResult;
    }

    /**
     * @param boolean $DeleteAllDestinationsResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_10_2_1\BasicServices\Customer_SSP\DeleteAllDestinationsResponse
     */
    public function setDeleteAllDestinationsResult($DeleteAllDestinationsResult)
    {
      $this->DeleteAllDestinationsResult = $DeleteAllDestinationsResult;
      return $this;
    }

}
