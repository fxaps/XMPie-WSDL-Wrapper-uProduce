<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_10_1\UndocumentedServices\UpdateDataSource_SSP;

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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_10_1\UndocumentedServices\UpdateDataSource_SSP\GetTableFieldsForTemplateResponse
     */
    public function setGetTableFieldsForTemplateResult($GetTableFieldsForTemplateResult)
    {
      $this->GetTableFieldsForTemplateResult = $GetTableFieldsForTemplateResult;
      return $this;
    }

}
