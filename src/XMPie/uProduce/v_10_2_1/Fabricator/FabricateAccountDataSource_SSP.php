<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_10_2_1\Fabricator;


use XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\AccountDataSource_SSP\CreateNew;
use XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\AccountDataSource_SSP\ArrayOfProperty;
use XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\AccountDataSource_SSP\Property;
use XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\AccountDataSource_SSP\CreateNewResponse;
use XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\AccountDataSource_SSP\CreateNewFromZip;
use XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\AccountDataSource_SSP\CreateNewFromZipResponse;
use XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\AccountDataSource_SSP\Replace;
use XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\AccountDataSource_SSP\Connection;
use XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\AccountDataSource_SSP\ReplaceResponse;
use XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\AccountDataSource_SSP\ReplaceFromZip;
use XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\AccountDataSource_SSP\ReplaceFromZipResponse;
use XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\AccountDataSource_SSP\Delete;
use XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\AccountDataSource_SSP\DeleteResponse;
use XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\AccountDataSource_SSP\GetAccount;
use XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\AccountDataSource_SSP\GetAccountResponse;
use XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\AccountDataSource_SSP\GetProperty;
use XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\AccountDataSource_SSP\GetPropertyResponse;
use XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\AccountDataSource_SSP\GetProperties;
use XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\AccountDataSource_SSP\ArrayOfString;
use XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\AccountDataSource_SSP\GetPropertiesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\AccountDataSource_SSP\GetAllProperties;
use XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\AccountDataSource_SSP\GetAllPropertiesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\AccountDataSource_SSP\GetDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\AccountDataSource_SSP\GetDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\AccountDataSource_SSP\GetDataSetResult;
use XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\AccountDataSource_SSP\GetXMPTblDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\AccountDataSource_SSP\GetXMPTblDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\AccountDataSource_SSP\XMPTblDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\AccountDataSource_SSP\ArrayOfXMPTbl;
use XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\AccountDataSource_SSP\XMPTbl;
use XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\AccountDataSource_SSP\ArrayOfXMPTblColumn;
use XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\AccountDataSource_SSP\XMPTblColumn;
use XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\AccountDataSource_SSP\ArrayOfXMPTblRow;
use XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\AccountDataSource_SSP\XMPTblRow;
use XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\AccountDataSource_SSP\ArrayOfXMPRowField;
use XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\AccountDataSource_SSP\XMPRowField;
use XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\AccountDataSource_SSP\SetProperty;
use XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\AccountDataSource_SSP\SetPropertyResponse;
use XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\AccountDataSource_SSP\SetProperties;
use XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\AccountDataSource_SSP\SetPropertiesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\AccountDataSource_SSP\GetID;
use XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\AccountDataSource_SSP\GetIDResponse;
use XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\AccountDataSource_SSP\IsExist;
use XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\AccountDataSource_SSP\IsExistResponse;


class FabricateAccountDataSource_SSP
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
    * @return CreateNewFromZip
    */
    public function CreateNewFromZip($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $CreateNewFromZip = new CreateNewFromZip();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($CreateNewFromZip, $methodName)) {
                $CreateNewFromZip->$methodName($paramValue);
            }
        }
        return $CreateNewFromZip;
    }


   /**
    * @param array $paramAutoSet
    * @return CreateNewFromZipResponse
    */
    public function CreateNewFromZipResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $CreateNewFromZipResponse = new CreateNewFromZipResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($CreateNewFromZipResponse, $methodName)) {
                $CreateNewFromZipResponse->$methodName($paramValue);
            }
        }
        return $CreateNewFromZipResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return Replace
    */
    public function Replace($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $Replace = new Replace();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($Replace, $methodName)) {
                $Replace->$methodName($paramValue);
            }
        }
        return $Replace;
    }


   /**
    * @param array $paramAutoSet
    * @return Connection
    */
    public function Connection($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $Connection = new Connection();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($Connection, $methodName)) {
                $Connection->$methodName($paramValue);
            }
        }
        return $Connection;
    }


   /**
    * @param array $paramAutoSet
    * @return ReplaceResponse
    */
    public function ReplaceResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ReplaceResponse = new ReplaceResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ReplaceResponse, $methodName)) {
                $ReplaceResponse->$methodName($paramValue);
            }
        }
        return $ReplaceResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return ReplaceFromZip
    */
    public function ReplaceFromZip($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ReplaceFromZip = new ReplaceFromZip();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ReplaceFromZip, $methodName)) {
                $ReplaceFromZip->$methodName($paramValue);
            }
        }
        return $ReplaceFromZip;
    }


   /**
    * @param array $paramAutoSet
    * @return ReplaceFromZipResponse
    */
    public function ReplaceFromZipResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ReplaceFromZipResponse = new ReplaceFromZipResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ReplaceFromZipResponse, $methodName)) {
                $ReplaceFromZipResponse->$methodName($paramValue);
            }
        }
        return $ReplaceFromZipResponse;
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
    * @return GetAccount
    */
    public function GetAccount($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetAccount = new GetAccount();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetAccount, $methodName)) {
                $GetAccount->$methodName($paramValue);
            }
        }
        return $GetAccount;
    }


   /**
    * @param array $paramAutoSet
    * @return GetAccountResponse
    */
    public function GetAccountResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetAccountResponse = new GetAccountResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetAccountResponse, $methodName)) {
                $GetAccountResponse->$methodName($paramValue);
            }
        }
        return $GetAccountResponse;
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


   /**
    * @param array $paramAutoSet
    * @return SetProperty
    */
    public function SetProperty($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SetProperty = new SetProperty();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SetProperty, $methodName)) {
                $SetProperty->$methodName($paramValue);
            }
        }
        return $SetProperty;
    }


   /**
    * @param array $paramAutoSet
    * @return SetPropertyResponse
    */
    public function SetPropertyResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SetPropertyResponse = new SetPropertyResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SetPropertyResponse, $methodName)) {
                $SetPropertyResponse->$methodName($paramValue);
            }
        }
        return $SetPropertyResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return SetProperties
    */
    public function SetProperties($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SetProperties = new SetProperties();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SetProperties, $methodName)) {
                $SetProperties->$methodName($paramValue);
            }
        }
        return $SetProperties;
    }


   /**
    * @param array $paramAutoSet
    * @return SetPropertiesResponse
    */
    public function SetPropertiesResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SetPropertiesResponse = new SetPropertiesResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SetPropertiesResponse, $methodName)) {
                $SetPropertiesResponse->$methodName($paramValue);
            }
        }
        return $SetPropertiesResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetID
    */
    public function GetID($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetID = new GetID();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetID, $methodName)) {
                $GetID->$methodName($paramValue);
            }
        }
        return $GetID;
    }


   /**
    * @param array $paramAutoSet
    * @return GetIDResponse
    */
    public function GetIDResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetIDResponse = new GetIDResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetIDResponse, $methodName)) {
                $GetIDResponse->$methodName($paramValue);
            }
        }
        return $GetIDResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return IsExist
    */
    public function IsExist($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $IsExist = new IsExist();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($IsExist, $methodName)) {
                $IsExist->$methodName($paramValue);
            }
        }
        return $IsExist;
    }


   /**
    * @param array $paramAutoSet
    * @return IsExistResponse
    */
    public function IsExistResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $IsExistResponse = new IsExistResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($IsExistResponse, $methodName)) {
                $IsExistResponse->$methodName($paramValue);
            }
        }
        return $IsExistResponse;
    }



}

?>
