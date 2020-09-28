<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\UpdateDataSource_SSP;

class GetTableFieldsForTemplateResponse
{

    /**
     * @var ArrayOfXMPTblColumn $GetTableFieldsForTemplateResult
     */
    protected $GetTableFieldsForTemplateResult = null;

    /**
     * @param ArrayOfXMPTblColumn $GetTableFieldsForTemplateResult
     */
    public function __construct($GetTableFieldsForTemplateResult = null)
    {
        $this->GetTableFieldsForTemplateResult = $GetTableFieldsForTemplateResult;
    }

    /**
     * @return ArrayOfXMPTblColumn
     */
    public function getGetTableFieldsForTemplateResult()
    {
        return $this->GetTableFieldsForTemplateResult;
    }

    /**
     * @param ArrayOfXMPTblColumn $GetTableFieldsForTemplateResult
     * @return GetTableFieldsForTemplateResponse
     */
    public function setGetTableFieldsForTemplateResult($GetTableFieldsForTemplateResult)
    {
        $this->GetTableFieldsForTemplateResult = $GetTableFieldsForTemplateResult;
        return $this;
    }

}
