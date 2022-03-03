<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_10_2_1\Fabricator;


use XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\JobMessage_SSP\CreateNew;
use XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\JobMessage_SSP\CreateNewResponse;
use XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\JobMessage_SSP\Delete;
use XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\JobMessage_SSP\DeleteResponse;
use XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\JobMessage_SSP\GetJob;
use XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\JobMessage_SSP\GetJobResponse;
use XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\JobMessage_SSP\GetContext;
use XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\JobMessage_SSP\GetContextResponse;
use XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\JobMessage_SSP\GetSeverity;
use XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\JobMessage_SSP\GetSeverityResponse;
use XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\JobMessage_SSP\GetMessageId;
use XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\JobMessage_SSP\GetMessageIdResponse;
use XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\JobMessage_SSP\GetParams;
use XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\JobMessage_SSP\GetParamsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\JobMessage_SSP\GetProperty;
use XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\JobMessage_SSP\GetPropertyResponse;
use XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\JobMessage_SSP\Property;
use XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\JobMessage_SSP\GetProperties;
use XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\JobMessage_SSP\ArrayOfString;
use XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\JobMessage_SSP\GetPropertiesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\JobMessage_SSP\ArrayOfProperty;
use XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\JobMessage_SSP\GetAllProperties;
use XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\JobMessage_SSP\GetAllPropertiesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\JobMessage_SSP\GetDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\JobMessage_SSP\GetDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\JobMessage_SSP\GetDataSetResult;
use XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\JobMessage_SSP\GetXMPTblDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\JobMessage_SSP\GetXMPTblDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\JobMessage_SSP\XMPTblDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\JobMessage_SSP\ArrayOfXMPTbl;
use XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\JobMessage_SSP\XMPTbl;
use XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\JobMessage_SSP\ArrayOfXMPTblColumn;
use XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\JobMessage_SSP\XMPTblColumn;
use XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\JobMessage_SSP\ArrayOfXMPTblRow;
use XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\JobMessage_SSP\XMPTblRow;
use XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\JobMessage_SSP\ArrayOfXMPRowField;
use XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\JobMessage_SSP\XMPRowField;


class FabricateJobMessage_SSP
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
    * @return CreateNew
    */
    public function CreateNew($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $CreateNew = new CreateNew();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($CreateNew, $methodName)) {
                $CreateNew->$methodName($paramValue);
            }
        }
        return $CreateNew;
    }


   /**
    * @param array $paramAutoSet
    * @return CreateNewResponse
    */
    public function CreateNewResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $CreateNewResponse = new CreateNewResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($CreateNewResponse, $methodName)) {
                $CreateNewResponse->$methodName($paramValue);
            }
        }
        return $CreateNewResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return Delete
    */
    public function Delete($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $Delete = new Delete();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($Delete, $methodName)) {
                $Delete->$methodName($paramValue);
            }
        }
        return $Delete;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteResponse
    */
    public function DeleteResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteResponse = new DeleteResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteResponse, $methodName)) {
                $DeleteResponse->$methodName($paramValue);
            }
        }
        return $DeleteResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetJob
    */
    public function GetJob($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetJob = new GetJob();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetJob, $methodName)) {
                $GetJob->$methodName($paramValue);
            }
        }
        return $GetJob;
    }


   /**
    * @param array $paramAutoSet
    * @return GetJobResponse
    */
    public function GetJobResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetJobResponse = new GetJobResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetJobResponse, $methodName)) {
                $GetJobResponse->$methodName($paramValue);
            }
        }
        return $GetJobResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetContext
    */
    public function GetContext($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetContext = new GetContext();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetContext, $methodName)) {
                $GetContext->$methodName($paramValue);
            }
        }
        return $GetContext;
    }


   /**
    * @param array $paramAutoSet
    * @return GetContextResponse
    */
    public function GetContextResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetContextResponse = new GetContextResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetContextResponse, $methodName)) {
                $GetContextResponse->$methodName($paramValue);
            }
        }
        return $GetContextResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetSeverity
    */
    public function GetSeverity($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetSeverity = new GetSeverity();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetSeverity, $methodName)) {
                $GetSeverity->$methodName($paramValue);
            }
        }
        return $GetSeverity;
    }


   /**
    * @param array $paramAutoSet
    * @return GetSeverityResponse
    */
    public function GetSeverityResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetSeverityResponse = new GetSeverityResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetSeverityResponse, $methodName)) {
                $GetSeverityResponse->$methodName($paramValue);
            }
        }
        return $GetSeverityResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetMessageId
    */
    public function GetMessageId($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetMessageId = new GetMessageId();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetMessageId, $methodName)) {
                $GetMessageId->$methodName($paramValue);
            }
        }
        return $GetMessageId;
    }


   /**
    * @param array $paramAutoSet
    * @return GetMessageIdResponse
    */
    public function GetMessageIdResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetMessageIdResponse = new GetMessageIdResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetMessageIdResponse, $methodName)) {
                $GetMessageIdResponse->$methodName($paramValue);
            }
        }
        return $GetMessageIdResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetParams
    */
    public function GetParams($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetParams = new GetParams();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetParams, $methodName)) {
                $GetParams->$methodName($paramValue);
            }
        }
        return $GetParams;
    }


   /**
    * @param array $paramAutoSet
    * @return GetParamsResponse
    */
    public function GetParamsResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetParamsResponse = new GetParamsResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetParamsResponse, $methodName)) {
                $GetParamsResponse->$methodName($paramValue);
            }
        }
        return $GetParamsResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetProperty
    */
    public function GetProperty($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetProperty = new GetProperty();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetProperty, $methodName)) {
                $GetProperty->$methodName($paramValue);
            }
        }
        return $GetProperty;
    }


   /**
    * @param array $paramAutoSet
    * @return GetPropertyResponse
    */
    public function GetPropertyResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetPropertyResponse = new GetPropertyResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetPropertyResponse, $methodName)) {
                $GetPropertyResponse->$methodName($paramValue);
            }
        }
        return $GetPropertyResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return Property
    */
    public function Property($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $Property = new Property();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($Property, $methodName)) {
                $Property->$methodName($paramValue);
            }
        }
        return $Property;
    }


   /**
    * @param array $paramAutoSet
    * @return GetProperties
    */
    public function GetProperties($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetProperties = new GetProperties();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetProperties, $methodName)) {
                $GetProperties->$methodName($paramValue);
            }
        }
        return $GetProperties;
    }


   /**
    * @param array $paramAutoSet
    * @return ArrayOfString
    */
    public function ArrayOfString($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfString = new ArrayOfString();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfString, $methodName)) {
                $ArrayOfString->$methodName($paramValue);
            }
        }
        return $ArrayOfString;
    }


   /**
    * @param array $paramAutoSet
    * @return GetPropertiesResponse
    */
    public function GetPropertiesResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetPropertiesResponse = new GetPropertiesResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetPropertiesResponse, $methodName)) {
                $GetPropertiesResponse->$methodName($paramValue);
            }
        }
        return $GetPropertiesResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return ArrayOfProperty
    */
    public function ArrayOfProperty($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfProperty = new ArrayOfProperty();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfProperty, $methodName)) {
                $ArrayOfProperty->$methodName($paramValue);
            }
        }
        return $ArrayOfProperty;
    }


   /**
    * @param array $paramAutoSet
    * @return GetAllProperties
    */
    public function GetAllProperties($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetAllProperties = new GetAllProperties();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetAllProperties, $methodName)) {
                $GetAllProperties->$methodName($paramValue);
            }
        }
        return $GetAllProperties;
    }


   /**
    * @param array $paramAutoSet
    * @return GetAllPropertiesResponse
    */
    public function GetAllPropertiesResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetAllPropertiesResponse = new GetAllPropertiesResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetAllPropertiesResponse, $methodName)) {
                $GetAllPropertiesResponse->$methodName($paramValue);
            }
        }
        return $GetAllPropertiesResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDataSet
    */
    public function GetDataSet($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDataSet = new GetDataSet();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDataSet, $methodName)) {
                $GetDataSet->$methodName($paramValue);
            }
        }
        return $GetDataSet;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDataSetResponse
    */
    public function GetDataSetResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDataSetResponse = new GetDataSetResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDataSetResponse, $methodName)) {
                $GetDataSetResponse->$methodName($paramValue);
            }
        }
        return $GetDataSetResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetDataSetResult
    */
    public function GetDataSetResult($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetDataSetResult = new GetDataSetResult();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetDataSetResult, $methodName)) {
                $GetDataSetResult->$methodName($paramValue);
            }
        }
        return $GetDataSetResult;
    }


   /**
    * @param array $paramAutoSet
    * @return GetXMPTblDataSet
    */
    public function GetXMPTblDataSet($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetXMPTblDataSet = new GetXMPTblDataSet();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetXMPTblDataSet, $methodName)) {
                $GetXMPTblDataSet->$methodName($paramValue);
            }
        }
        return $GetXMPTblDataSet;
    }


   /**
    * @param array $paramAutoSet
    * @return GetXMPTblDataSetResponse
    */
    public function GetXMPTblDataSetResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetXMPTblDataSetResponse = new GetXMPTblDataSetResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetXMPTblDataSetResponse, $methodName)) {
                $GetXMPTblDataSetResponse->$methodName($paramValue);
            }
        }
        return $GetXMPTblDataSetResponse;
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



}

?>
