<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\PlanUtils_SSP;

class GetPrimaryRecipientFieldResponse
{

    /**
     * @var RecipientField $GetPrimaryRecipientFieldResult
     */
    protected $GetPrimaryRecipientFieldResult = null;

    /**
     * @param RecipientField $GetPrimaryRecipientFieldResult
     */
    public function __construct($GetPrimaryRecipientFieldResult = null)
    {
        $this->GetPrimaryRecipientFieldResult = $GetPrimaryRecipientFieldResult;
    }

    /**
     * @return RecipientField
     */
    public function getGetPrimaryRecipientFieldResult()
    {
        return $this->GetPrimaryRecipientFieldResult;
    }

    /**
     * @param RecipientField $GetPrimaryRecipientFieldResult
     * @return GetPrimaryRecipientFieldResponse
     */
    public function setGetPrimaryRecipientFieldResult($GetPrimaryRecipientFieldResult)
    {
        $this->GetPrimaryRecipientFieldResult = $GetPrimaryRecipientFieldResult;
        return $this;
    }

}
