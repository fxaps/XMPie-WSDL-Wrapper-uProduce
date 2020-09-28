<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\Population_SSP;

class IsRecipientExistResponse
{

    /**
     * @var boolean $IsRecipientExistResult
     */
    protected $IsRecipientExistResult = null;

    /**
     * @param boolean $IsRecipientExistResult
     */
    public function __construct($IsRecipientExistResult = null)
    {
        $this->IsRecipientExistResult = $IsRecipientExistResult;
    }

    /**
     * @return boolean
     */
    public function getIsRecipientExistResult()
    {
        return $this->IsRecipientExistResult;
    }

    /**
     * @param boolean $IsRecipientExistResult
     * @return IsRecipientExistResponse
     */
    public function setIsRecipientExistResult($IsRecipientExistResult)
    {
        $this->IsRecipientExistResult = $IsRecipientExistResult;
        return $this;
    }

}
