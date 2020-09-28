<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\Campaign_SSP;

class SetAdditionalFieldValuesResponse
{

    /**
     * @var boolean $SetAdditionalFieldValuesResult
     */
    protected $SetAdditionalFieldValuesResult = null;

    /**
     * @param boolean $SetAdditionalFieldValuesResult
     */
    public function __construct($SetAdditionalFieldValuesResult = null)
    {
        $this->SetAdditionalFieldValuesResult = $SetAdditionalFieldValuesResult;
    }

    /**
     * @return boolean
     */
    public function getSetAdditionalFieldValuesResult()
    {
        return $this->SetAdditionalFieldValuesResult;
    }

    /**
     * @param boolean $SetAdditionalFieldValuesResult
     * @return SetAdditionalFieldValuesResponse
     */
    public function setSetAdditionalFieldValuesResult($SetAdditionalFieldValuesResult)
    {
        $this->SetAdditionalFieldValuesResult = $SetAdditionalFieldValuesResult;
        return $this;
    }

}
