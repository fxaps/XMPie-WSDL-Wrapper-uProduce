<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_13_2\Fabricator;


use XMPieWsdlClient\XMPie\uProduce\v_13_2\UndocumentedServices\UpdateDataSource_SSP\GetTableFieldsForTemplate;
use XMPieWsdlClient\XMPie\uProduce\v_13_2\UndocumentedServices\UpdateDataSource_SSP\GetTableFieldsForTemplateResponse;
use XMPieWsdlClient\XMPie\uProduce\v_13_2\UndocumentedServices\UpdateDataSource_SSP\ArrayOfXMPTblColumn;
use XMPieWsdlClient\XMPie\uProduce\v_13_2\UndocumentedServices\UpdateDataSource_SSP\XMPTblColumn;
use XMPieWsdlClient\XMPie\uProduce\v_13_2\UndocumentedServices\UpdateDataSource_SSP\GetUploadedFileTablesSchema;
use XMPieWsdlClient\XMPie\uProduce\v_13_2\UndocumentedServices\UpdateDataSource_SSP\GetUploadedFileTablesSchemaResponse;
use XMPieWsdlClient\XMPie\uProduce\v_13_2\UndocumentedServices\UpdateDataSource_SSP\XMPTblDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_13_2\UndocumentedServices\UpdateDataSource_SSP\ArrayOfXMPTbl;
use XMPieWsdlClient\XMPie\uProduce\v_13_2\UndocumentedServices\UpdateDataSource_SSP\XMPTbl;
use XMPieWsdlClient\XMPie\uProduce\v_13_2\UndocumentedServices\UpdateDataSource_SSP\ArrayOfXMPTblRow;
use XMPieWsdlClient\XMPie\uProduce\v_13_2\UndocumentedServices\UpdateDataSource_SSP\XMPTblRow;
use XMPieWsdlClient\XMPie\uProduce\v_13_2\UndocumentedServices\UpdateDataSource_SSP\ArrayOfXMPRowField;
use XMPieWsdlClient\XMPie\uProduce\v_13_2\UndocumentedServices\UpdateDataSource_SSP\XMPRowField;
use XMPieWsdlClient\XMPie\uProduce\v_13_2\UndocumentedServices\UpdateDataSource_SSP\GetTablesMatchToRecipientTable;
use XMPieWsdlClient\XMPie\uProduce\v_13_2\UndocumentedServices\UpdateDataSource_SSP\GetTablesMatchToRecipientTableResponse;
use XMPieWsdlClient\XMPie\uProduce\v_13_2\UndocumentedServices\UpdateDataSource_SSP\ArrayOfXMPTblMatching;
use XMPieWsdlClient\XMPie\uProduce\v_13_2\UndocumentedServices\UpdateDataSource_SSP\XMPTblMatching;
use XMPieWsdlClient\XMPie\uProduce\v_13_2\UndocumentedServices\UpdateDataSource_SSP\Start;
use XMPieWsdlClient\XMPie\uProduce\v_13_2\UndocumentedServices\UpdateDataSource_SSP\UploadedFieldMappings;
use XMPieWsdlClient\XMPie\uProduce\v_13_2\UndocumentedServices\UpdateDataSource_SSP\ArrayOfUploadedFieldMappingInfo;
use XMPieWsdlClient\XMPie\uProduce\v_13_2\UndocumentedServices\UpdateDataSource_SSP\UploadedFieldMappingInfo;
use XMPieWsdlClient\XMPie\uProduce\v_13_2\UndocumentedServices\UpdateDataSource_SSP\StartResponse;
use XMPieWsdlClient\XMPie\uProduce\v_13_2\UndocumentedServices\UpdateDataSource_SSP\StatusStructure;
use XMPieWsdlClient\XMPie\uProduce\v_13_2\UndocumentedServices\UpdateDataSource_SSP\TransactionStatus;
use XMPieWsdlClient\XMPie\uProduce\v_13_2\UndocumentedServices\UpdateDataSource_SSP\GetStatus;
use XMPieWsdlClient\XMPie\uProduce\v_13_2\UndocumentedServices\UpdateDataSource_SSP\GetStatusResponse;
use XMPieWsdlClient\XMPie\uProduce\v_13_2\UndocumentedServices\UpdateDataSource_SSP\Cancel;
use XMPieWsdlClient\XMPie\uProduce\v_13_2\UndocumentedServices\UpdateDataSource_SSP\CancelResponse;
use XMPieWsdlClient\XMPie\uProduce\v_13_2\UndocumentedServices\UpdateDataSource_SSP\Commit;
use XMPieWsdlClient\XMPie\uProduce\v_13_2\UndocumentedServices\UpdateDataSource_SSP\CommitResponse;


class FabricateUpdateDataSource_SSP
{
    private $paramAutoSet;

    /**
     * Constructor.
     *
     * @param array $paramAutoSet
     */
    public function __construct($paramAutoSet = [])
    {
        $this->setParamAutoSet($paramAutoSet);
    }


    /**
     * @return array
     */
    public function getParamAutoSet()
    {
        return $this->paramAutoSet;
    }


    /**
     * @param array $paramAutoSet
     */
    public function setParamAutoSet($paramAutoSet)
    {
        $this->paramAutoSet = $paramAutoSet;
    }


   /**
    * @param array $paramAutoSet
    * @return GetTableFieldsForTemplate
    */
    public function GetTableFieldsForTemplate($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetTableFieldsForTemplate = new GetTableFieldsForTemplate();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetTableFieldsForTemplate, $methodName)) {
                $GetTableFieldsForTemplate->$methodName($paramValue);
            }
        }
        return $GetTableFieldsForTemplate;
    }


   /**
    * @param array $paramAutoSet
    * @return GetTableFieldsForTemplateResponse
    */
    public function GetTableFieldsForTemplateResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetTableFieldsForTemplateResponse = new GetTableFieldsForTemplateResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetTableFieldsForTemplateResponse, $methodName)) {
                $GetTableFieldsForTemplateResponse->$methodName($paramValue);
            }
        }
        return $GetTableFieldsForTemplateResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return ArrayOfXMPTblColumn
    */
    public function ArrayOfXMPTblColumn($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfXMPTblColumn = new ArrayOfXMPTblColumn();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfXMPTblColumn, $methodName)) {
                $ArrayOfXMPTblColumn->$methodName($paramValue);
            }
        }
        return $ArrayOfXMPTblColumn;
    }


   /**
    * @param array $paramAutoSet
    * @return XMPTblColumn
    */
    public function XMPTblColumn($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $XMPTblColumn = new XMPTblColumn();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($XMPTblColumn, $methodName)) {
                $XMPTblColumn->$methodName($paramValue);
            }
        }
        return $XMPTblColumn;
    }


   /**
    * @param array $paramAutoSet
    * @return GetUploadedFileTablesSchema
    */
    public function GetUploadedFileTablesSchema($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetUploadedFileTablesSchema = new GetUploadedFileTablesSchema();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetUploadedFileTablesSchema, $methodName)) {
                $GetUploadedFileTablesSchema->$methodName($paramValue);
            }
        }
        return $GetUploadedFileTablesSchema;
    }


   /**
    * @param array $paramAutoSet
    * @return GetUploadedFileTablesSchemaResponse
    */
    public function GetUploadedFileTablesSchemaResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetUploadedFileTablesSchemaResponse = new GetUploadedFileTablesSchemaResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetUploadedFileTablesSchemaResponse, $methodName)) {
                $GetUploadedFileTablesSchemaResponse->$methodName($paramValue);
            }
        }
        return $GetUploadedFileTablesSchemaResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return XMPTblDataSet
    */
    public function XMPTblDataSet($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $XMPTblDataSet = new XMPTblDataSet();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($XMPTblDataSet, $methodName)) {
                $XMPTblDataSet->$methodName($paramValue);
            }
        }
        return $XMPTblDataSet;
    }


   /**
    * @param array $paramAutoSet
    * @return ArrayOfXMPTbl
    */
    public function ArrayOfXMPTbl($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfXMPTbl = new ArrayOfXMPTbl();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfXMPTbl, $methodName)) {
                $ArrayOfXMPTbl->$methodName($paramValue);
            }
        }
        return $ArrayOfXMPTbl;
    }


   /**
    * @param array $paramAutoSet
    * @return XMPTbl
    */
    public function XMPTbl($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $XMPTbl = new XMPTbl();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($XMPTbl, $methodName)) {
                $XMPTbl->$methodName($paramValue);
            }
        }
        return $XMPTbl;
    }


   /**
    * @param array $paramAutoSet
    * @return ArrayOfXMPTblRow
    */
    public function ArrayOfXMPTblRow($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfXMPTblRow = new ArrayOfXMPTblRow();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfXMPTblRow, $methodName)) {
                $ArrayOfXMPTblRow->$methodName($paramValue);
            }
        }
        return $ArrayOfXMPTblRow;
    }


   /**
    * @param array $paramAutoSet
    * @return XMPTblRow
    */
    public function XMPTblRow($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $XMPTblRow = new XMPTblRow();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($XMPTblRow, $methodName)) {
                $XMPTblRow->$methodName($paramValue);
            }
        }
        return $XMPTblRow;
    }


   /**
    * @param array $paramAutoSet
    * @return ArrayOfXMPRowField
    */
    public function ArrayOfXMPRowField($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfXMPRowField = new ArrayOfXMPRowField();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfXMPRowField, $methodName)) {
                $ArrayOfXMPRowField->$methodName($paramValue);
            }
        }
        return $ArrayOfXMPRowField;
    }


   /**
    * @param array $paramAutoSet
    * @return XMPRowField
    */
    public function XMPRowField($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $XMPRowField = new XMPRowField();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($XMPRowField, $methodName)) {
                $XMPRowField->$methodName($paramValue);
            }
        }
        return $XMPRowField;
    }


   /**
    * @param array $paramAutoSet
    * @return GetTablesMatchToRecipientTable
    */
    public function GetTablesMatchToRecipientTable($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetTablesMatchToRecipientTable = new GetTablesMatchToRecipientTable();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetTablesMatchToRecipientTable, $methodName)) {
                $GetTablesMatchToRecipientTable->$methodName($paramValue);
            }
        }
        return $GetTablesMatchToRecipientTable;
    }


   /**
    * @param array $paramAutoSet
    * @return GetTablesMatchToRecipientTableResponse
    */
    public function GetTablesMatchToRecipientTableResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetTablesMatchToRecipientTableResponse = new GetTablesMatchToRecipientTableResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetTablesMatchToRecipientTableResponse, $methodName)) {
                $GetTablesMatchToRecipientTableResponse->$methodName($paramValue);
            }
        }
        return $GetTablesMatchToRecipientTableResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return ArrayOfXMPTblMatching
    */
    public function ArrayOfXMPTblMatching($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfXMPTblMatching = new ArrayOfXMPTblMatching();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfXMPTblMatching, $methodName)) {
                $ArrayOfXMPTblMatching->$methodName($paramValue);
            }
        }
        return $ArrayOfXMPTblMatching;
    }


   /**
    * @param array $paramAutoSet
    * @return XMPTblMatching
    */
    public function XMPTblMatching($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $XMPTblMatching = new XMPTblMatching();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($XMPTblMatching, $methodName)) {
                $XMPTblMatching->$methodName($paramValue);
            }
        }
        return $XMPTblMatching;
    }


   /**
    * @param array $paramAutoSet
    * @return Start
    */
    public function Start($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $Start = new Start();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($Start, $methodName)) {
                $Start->$methodName($paramValue);
            }
        }
        return $Start;
    }


   /**
    * @param array $paramAutoSet
    * @return UploadedFieldMappings
    */
    public function UploadedFieldMappings($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $UploadedFieldMappings = new UploadedFieldMappings();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($UploadedFieldMappings, $methodName)) {
                $UploadedFieldMappings->$methodName($paramValue);
            }
        }
        return $UploadedFieldMappings;
    }


   /**
    * @param array $paramAutoSet
    * @return ArrayOfUploadedFieldMappingInfo
    */
    public function ArrayOfUploadedFieldMappingInfo($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfUploadedFieldMappingInfo = new ArrayOfUploadedFieldMappingInfo();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfUploadedFieldMappingInfo, $methodName)) {
                $ArrayOfUploadedFieldMappingInfo->$methodName($paramValue);
            }
        }
        return $ArrayOfUploadedFieldMappingInfo;
    }


   /**
    * @param array $paramAutoSet
    * @return UploadedFieldMappingInfo
    */
    public function UploadedFieldMappingInfo($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $UploadedFieldMappingInfo = new UploadedFieldMappingInfo();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($UploadedFieldMappingInfo, $methodName)) {
                $UploadedFieldMappingInfo->$methodName($paramValue);
            }
        }
        return $UploadedFieldMappingInfo;
    }


   /**
    * @param array $paramAutoSet
    * @return StartResponse
    */
    public function StartResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $StartResponse = new StartResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($StartResponse, $methodName)) {
                $StartResponse->$methodName($paramValue);
            }
        }
        return $StartResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return StatusStructure
    */
    public function StatusStructure($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $StatusStructure = new StatusStructure();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($StatusStructure, $methodName)) {
                $StatusStructure->$methodName($paramValue);
            }
        }
        return $StatusStructure;
    }


   /**
    * @param array $paramAutoSet
    * @return TransactionStatus
    */
    public function TransactionStatus($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $TransactionStatus = new TransactionStatus();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($TransactionStatus, $methodName)) {
                $TransactionStatus->$methodName($paramValue);
            }
        }
        return $TransactionStatus;
    }


   /**
    * @param array $paramAutoSet
    * @return GetStatus
    */
    public function GetStatus($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetStatus = new GetStatus();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetStatus, $methodName)) {
                $GetStatus->$methodName($paramValue);
            }
        }
        return $GetStatus;
    }


   /**
    * @param array $paramAutoSet
    * @return GetStatusResponse
    */
    public function GetStatusResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetStatusResponse = new GetStatusResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetStatusResponse, $methodName)) {
                $GetStatusResponse->$methodName($paramValue);
            }
        }
        return $GetStatusResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return Cancel
    */
    public function Cancel($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $Cancel = new Cancel();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($Cancel, $methodName)) {
                $Cancel->$methodName($paramValue);
            }
        }
        return $Cancel;
    }


   /**
    * @param array $paramAutoSet
    * @return CancelResponse
    */
    public function CancelResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $CancelResponse = new CancelResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($CancelResponse, $methodName)) {
                $CancelResponse->$methodName($paramValue);
            }
        }
        return $CancelResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return Commit
    */
    public function Commit($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $Commit = new Commit();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($Commit, $methodName)) {
                $Commit->$methodName($paramValue);
            }
        }
        return $Commit;
    }


   /**
    * @param array $paramAutoSet
    * @return CommitResponse
    */
    public function CommitResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $CommitResponse = new CommitResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($CommitResponse, $methodName)) {
                $CommitResponse->$methodName($paramValue);
            }
        }
        return $CommitResponse;
    }



}

?>
