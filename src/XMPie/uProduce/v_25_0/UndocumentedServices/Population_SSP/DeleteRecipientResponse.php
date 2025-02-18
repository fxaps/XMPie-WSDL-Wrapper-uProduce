<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_25_0\UndocumentedServices\Population_SSP;

class DeleteRecipientResponse
{

    /**
     * @var boolean $DeleteRecipientResult
     */
    protected $DeleteRecipientResult = null;

    /**
     * @param boolean $DeleteRecipientResult
     */
    public function __construct($DeleteRecipientResult = null)
    {
      $this->DeleteRecipientResult = $DeleteRecipientResult;
    }

    /**
     * @return boolean
     */
    public function getDeleteRecipientResult()
    {
      return $this->DeleteRecipientResult;
    }

    /**
     * @param boolean $DeleteRecipientResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\UndocumentedServices\Population_SSP\DeleteRecipientResponse
     */
    public function setDeleteRecipientResult($DeleteRecipientResult)
    {
      $this->DeleteRecipientResult = $DeleteRecipientResult;
      return $this;
    }

}
