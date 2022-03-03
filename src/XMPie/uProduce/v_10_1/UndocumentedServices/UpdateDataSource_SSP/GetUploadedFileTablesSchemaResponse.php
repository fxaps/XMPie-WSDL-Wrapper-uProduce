<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_10_1\UndocumentedServices\UpdateDataSource_SSP;

class GetUploadedFileTablesSchemaResponse
{

    /**
     * @var XMPTblDataSet $GetUploadedFileTablesSchemaResult
     */
    protected $GetUploadedFileTablesSchemaResult = null;

    /**
     * @param XMPTblDataSet $GetUploadedFileTablesSchemaResult
     */
    public function __construct($GetUploadedFileTablesSchemaResult = null)
    {
      $this->GetUploadedFileTablesSchemaResult = $GetUploadedFileTablesSchemaResult;
    }

    /**
     * @return XMPTblDataSet
     */
    public function getGetUploadedFileTablesSchemaResult()
    {
      return $this->GetUploadedFileTablesSchemaResult;
    }

    /**
     * @param XMPTblDataSet $GetUploadedFileTablesSchemaResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_10_1\UndocumentedServices\UpdateDataSource_SSP\GetUploadedFileTablesSchemaResponse
     */
    public function setGetUploadedFileTablesSchemaResult($GetUploadedFileTablesSchemaResult)
    {
      $this->GetUploadedFileTablesSchemaResult = $GetUploadedFileTablesSchemaResult;
      return $this;
    }

}
