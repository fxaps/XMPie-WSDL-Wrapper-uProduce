<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_8_2_3\Fabricator;


use XMPieWsdlClient\XMPie\uProduce\v_8_2_3\ProductionServices\Jobs_SSP\Get;
use XMPieWsdlClient\XMPie\uProduce\v_8_2_3\ProductionServices\Jobs_SSP\GetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_8_2_3\ProductionServices\Jobs_SSP\ArrayOfString;
use XMPieWsdlClient\XMPie\uProduce\v_8_2_3\ProductionServices\Jobs_SSP\GetDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_8_2_3\ProductionServices\Jobs_SSP\GetDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_8_2_3\ProductionServices\Jobs_SSP\GetDataSetResult;
use XMPieWsdlClient\XMPie\uProduce\v_8_2_3\ProductionServices\Jobs_SSP\GetXMPTblDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_8_2_3\ProductionServices\Jobs_SSP\GetXMPTblDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_8_2_3\ProductionServices\Jobs_SSP\XMPTblDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_8_2_3\ProductionServices\Jobs_SSP\ArrayOfXMPTbl;
use XMPieWsdlClient\XMPie\uProduce\v_8_2_3\ProductionServices\Jobs_SSP\XMPTbl;
use XMPieWsdlClient\XMPie\uProduce\v_8_2_3\ProductionServices\Jobs_SSP\ArrayOfXMPTblColumn;
use XMPieWsdlClient\XMPie\uProduce\v_8_2_3\ProductionServices\Jobs_SSP\XMPTblColumn;
use XMPieWsdlClient\XMPie\uProduce\v_8_2_3\ProductionServices\Jobs_SSP\ArrayOfXMPTblRow;
use XMPieWsdlClient\XMPie\uProduce\v_8_2_3\ProductionServices\Jobs_SSP\XMPTblRow;
use XMPieWsdlClient\XMPie\uProduce\v_8_2_3\ProductionServices\Jobs_SSP\ArrayOfXMPRowField;
use XMPieWsdlClient\XMPie\uProduce\v_8_2_3\ProductionServices\Jobs_SSP\XMPRowField;
use XMPieWsdlClient\XMPie\uProduce\v_8_2_3\ProductionServices\Jobs_SSP\DeleteAll;
use XMPieWsdlClient\XMPie\uProduce\v_8_2_3\ProductionServices\Jobs_SSP\DeleteAllResponse;
use XMPieWsdlClient\XMPie\uProduce\v_8_2_3\ProductionServices\Jobs_SSP\AbortAll;
use XMPieWsdlClient\XMPie\uProduce\v_8_2_3\ProductionServices\Jobs_SSP\AbortAllResponse;
use XMPieWsdlClient\XMPie\uProduce\v_8_2_3\ProductionServices\Jobs_SSP\Abort;
use XMPieWsdlClient\XMPie\uProduce\v_8_2_3\ProductionServices\Jobs_SSP\AbortResponse;
use XMPieWsdlClient\XMPie\uProduce\v_8_2_3\ProductionServices\Jobs_SSP\Delete;
use XMPieWsdlClient\XMPie\uProduce\v_8_2_3\ProductionServices\Jobs_SSP\DeleteResponse;
use XMPieWsdlClient\XMPie\uProduce\v_8_2_3\ProductionServices\Jobs_SSP\GetJobType;
use XMPieWsdlClient\XMPie\uProduce\v_8_2_3\ProductionServices\Jobs_SSP\GetJobTypeResponse;
use XMPieWsdlClient\XMPie\uProduce\v_8_2_3\ProductionServices\Jobs_SSP\GetJobTypeResult;
use XMPieWsdlClient\XMPie\uProduce\v_8_2_3\ProductionServices\Jobs_SSP\GetJobTypeXMPTblDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_8_2_3\ProductionServices\Jobs_SSP\GetJobTypeXMPTblDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_8_2_3\ProductionServices\Jobs_SSP\GetJobTypes;
use XMPieWsdlClient\XMPie\uProduce\v_8_2_3\ProductionServices\Jobs_SSP\GetJobTypesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_8_2_3\ProductionServices\Jobs_SSP\GetJobTypesResult;
use XMPieWsdlClient\XMPie\uProduce\v_8_2_3\ProductionServices\Jobs_SSP\GetJobTypesXMPTblDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_8_2_3\ProductionServices\Jobs_SSP\GetJobTypesXMPTblDataSetResponse;


class FabricateJobs_SSP
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
     * @return Get
     */
    public function Get($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $Get = new Get();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($Get, $methodName)) {
                $Get->$methodName($paramValue);
            }
        }
        return $Get;
    }


    /**
     * @param array $paramAutoSet
     * @return GetResponse
     */
    public function GetResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetResponse = new GetResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetResponse, $methodName)) {
                $GetResponse->$methodName($paramValue);
            }
        }
        return $GetResponse;
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
     * @return DeleteAll
     */
    public function DeleteAll($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteAll = new DeleteAll();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteAll, $methodName)) {
                $DeleteAll->$methodName($paramValue);
            }
        }
        return $DeleteAll;
    }


    /**
     * @param array $paramAutoSet
     * @return DeleteAllResponse
     */
    public function DeleteAllResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteAllResponse = new DeleteAllResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteAllResponse, $methodName)) {
                $DeleteAllResponse->$methodName($paramValue);
            }
        }
        return $DeleteAllResponse;
    }


    /**
     * @param array $paramAutoSet
     * @return AbortAll
     */
    public function AbortAll($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $AbortAll = new AbortAll();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($AbortAll, $methodName)) {
                $AbortAll->$methodName($paramValue);
            }
        }
        return $AbortAll;
    }


    /**
     * @param array $paramAutoSet
     * @return AbortAllResponse
     */
    public function AbortAllResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $AbortAllResponse = new AbortAllResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($AbortAllResponse, $methodName)) {
                $AbortAllResponse->$methodName($paramValue);
            }
        }
        return $AbortAllResponse;
    }


    /**
     * @param array $paramAutoSet
     * @return Abort
     */
    public function Abort($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $Abort = new Abort();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($Abort, $methodName)) {
                $Abort->$methodName($paramValue);
            }
        }
        return $Abort;
    }


    /**
     * @param array $paramAutoSet
     * @return AbortResponse
     */
    public function AbortResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $AbortResponse = new AbortResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($AbortResponse, $methodName)) {
                $AbortResponse->$methodName($paramValue);
            }
        }
        return $AbortResponse;
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
     * @return GetJobType
     */
    public function GetJobType($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetJobType = new GetJobType();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetJobType, $methodName)) {
                $GetJobType->$methodName($paramValue);
            }
        }
        return $GetJobType;
    }


    /**
     * @param array $paramAutoSet
     * @return GetJobTypeResponse
     */
    public function GetJobTypeResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetJobTypeResponse = new GetJobTypeResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetJobTypeResponse, $methodName)) {
                $GetJobTypeResponse->$methodName($paramValue);
            }
        }
        return $GetJobTypeResponse;
    }


    /**
     * @param array $paramAutoSet
     * @return GetJobTypeResult
     */
    public function GetJobTypeResult($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetJobTypeResult = new GetJobTypeResult();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetJobTypeResult, $methodName)) {
                $GetJobTypeResult->$methodName($paramValue);
            }
        }
        return $GetJobTypeResult;
    }


    /**
     * @param array $paramAutoSet
     * @return GetJobTypeXMPTblDataSet
     */
    public function GetJobTypeXMPTblDataSet($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetJobTypeXMPTblDataSet = new GetJobTypeXMPTblDataSet();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetJobTypeXMPTblDataSet, $methodName)) {
                $GetJobTypeXMPTblDataSet->$methodName($paramValue);
            }
        }
        return $GetJobTypeXMPTblDataSet;
    }


    /**
     * @param array $paramAutoSet
     * @return GetJobTypeXMPTblDataSetResponse
     */
    public function GetJobTypeXMPTblDataSetResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetJobTypeXMPTblDataSetResponse = new GetJobTypeXMPTblDataSetResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetJobTypeXMPTblDataSetResponse, $methodName)) {
                $GetJobTypeXMPTblDataSetResponse->$methodName($paramValue);
            }
        }
        return $GetJobTypeXMPTblDataSetResponse;
    }


    /**
     * @param array $paramAutoSet
     * @return GetJobTypes
     */
    public function GetJobTypes($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetJobTypes = new GetJobTypes();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetJobTypes, $methodName)) {
                $GetJobTypes->$methodName($paramValue);
            }
        }
        return $GetJobTypes;
    }


    /**
     * @param array $paramAutoSet
     * @return GetJobTypesResponse
     */
    public function GetJobTypesResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetJobTypesResponse = new GetJobTypesResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetJobTypesResponse, $methodName)) {
                $GetJobTypesResponse->$methodName($paramValue);
            }
        }
        return $GetJobTypesResponse;
    }


    /**
     * @param array $paramAutoSet
     * @return GetJobTypesResult
     */
    public function GetJobTypesResult($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetJobTypesResult = new GetJobTypesResult();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetJobTypesResult, $methodName)) {
                $GetJobTypesResult->$methodName($paramValue);
            }
        }
        return $GetJobTypesResult;
    }


    /**
     * @param array $paramAutoSet
     * @return GetJobTypesXMPTblDataSet
     */
    public function GetJobTypesXMPTblDataSet($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetJobTypesXMPTblDataSet = new GetJobTypesXMPTblDataSet();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetJobTypesXMPTblDataSet, $methodName)) {
                $GetJobTypesXMPTblDataSet->$methodName($paramValue);
            }
        }
        return $GetJobTypesXMPTblDataSet;
    }


    /**
     * @param array $paramAutoSet
     * @return GetJobTypesXMPTblDataSetResponse
     */
    public function GetJobTypesXMPTblDataSetResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetJobTypesXMPTblDataSetResponse = new GetJobTypesXMPTblDataSetResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetJobTypesXMPTblDataSetResponse, $methodName)) {
                $GetJobTypesXMPTblDataSetResponse->$methodName($paramValue);
            }
        }
        return $GetJobTypesXMPTblDataSetResponse;
    }


}

?>
