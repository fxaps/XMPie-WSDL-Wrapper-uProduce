<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_12_2\OtherServices\InteractiveCampaign_SSP;

class InsertADORsValuesForRecipientResponse
{

    /**
     * @var string $InsertADORsValuesForRecipientResult
     */
    protected $InsertADORsValuesForRecipientResult = null;

    /**
     * @param string $InsertADORsValuesForRecipientResult
     */
    public function __construct($InsertADORsValuesForRecipientResult = null)
    {
      $this->InsertADORsValuesForRecipientResult = $InsertADORsValuesForRecipientResult;
    }

    /**
     * @return string
     */
    public function getInsertADORsValuesForRecipientResult()
    {
      return $this->InsertADORsValuesForRecipientResult;
    }

    /**
     * @param string $InsertADORsValuesForRecipientResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_2\OtherServices\InteractiveCampaign_SSP\InsertADORsValuesForRecipientResponse
     */
    public function setInsertADORsValuesForRecipientResult($InsertADORsValuesForRecipientResult)
    {
      $this->InsertADORsValuesForRecipientResult = $InsertADORsValuesForRecipientResult;
      return $this;
    }

}
