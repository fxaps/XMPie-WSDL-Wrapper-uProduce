<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_13_2\Fabricator;


use XMPieWsdlClient\XMPie\uProduce\v_13_2\UndocumentedServices\ProductionQueue_SSP\GetUserQueue;
use XMPieWsdlClient\XMPie\uProduce\v_13_2\UndocumentedServices\ProductionQueue_SSP\GetUserQueueResponse;
use XMPieWsdlClient\XMPie\uProduce\v_13_2\UndocumentedServices\ProductionQueue_SSP\GetUserQueueName;
use XMPieWsdlClient\XMPie\uProduce\v_13_2\UndocumentedServices\ProductionQueue_SSP\GetUserQueueNameResponse;
use XMPieWsdlClient\XMPie\uProduce\v_13_2\UndocumentedServices\ProductionQueue_SSP\SetUserQueue;
use XMPieWsdlClient\XMPie\uProduce\v_13_2\UndocumentedServices\ProductionQueue_SSP\SetUserQueueResponse;
use XMPieWsdlClient\XMPie\uProduce\v_13_2\UndocumentedServices\ProductionQueue_SSP\GetAvailableQueuesDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_13_2\UndocumentedServices\ProductionQueue_SSP\GetAvailableQueuesDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_13_2\UndocumentedServices\ProductionQueue_SSP\GetAvailableQueuesDataSetResult;
use XMPieWsdlClient\XMPie\uProduce\v_13_2\UndocumentedServices\ProductionQueue_SSP\GetAvailableQueuesXMPTblDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_13_2\UndocumentedServices\ProductionQueue_SSP\GetAvailableQueuesXMPTblDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_13_2\UndocumentedServices\ProductionQueue_SSP\XMPTblDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_13_2\UndocumentedServices\ProductionQueue_SSP\ArrayOfXMPTbl;
use XMPieWsdlClient\XMPie\uProduce\v_13_2\UndocumentedServices\ProductionQueue_SSP\XMPTbl;
use XMPieWsdlClient\XMPie\uProduce\v_13_2\UndocumentedServices\ProductionQueue_SSP\ArrayOfXMPTblColumn;
use XMPieWsdlClient\XMPie\uProduce\v_13_2\UndocumentedServices\ProductionQueue_SSP\XMPTblColumn;
use XMPieWsdlClient\XMPie\uProduce\v_13_2\UndocumentedServices\ProductionQueue_SSP\ArrayOfXMPTblRow;
use XMPieWsdlClient\XMPie\uProduce\v_13_2\UndocumentedServices\ProductionQueue_SSP\XMPTblRow;
use XMPieWsdlClient\XMPie\uProduce\v_13_2\UndocumentedServices\ProductionQueue_SSP\ArrayOfXMPRowField;
use XMPieWsdlClient\XMPie\uProduce\v_13_2\UndocumentedServices\ProductionQueue_SSP\XMPRowField;


class FabricateProductionQueue_SSP
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
    * @return GetUserQueue
    */
    public function GetUserQueue($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetUserQueue = new GetUserQueue();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetUserQueue, $methodName)) {
                $GetUserQueue->$methodName($paramValue);
            }
        }
        return $GetUserQueue;
    }


   /**
    * @param array $paramAutoSet
    * @return GetUserQueueResponse
    */
    public function GetUserQueueResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetUserQueueResponse = new GetUserQueueResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetUserQueueResponse, $methodName)) {
                $GetUserQueueResponse->$methodName($paramValue);
            }
        }
        return $GetUserQueueResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetUserQueueName
    */
    public function GetUserQueueName($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetUserQueueName = new GetUserQueueName();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetUserQueueName, $methodName)) {
                $GetUserQueueName->$methodName($paramValue);
            }
        }
        return $GetUserQueueName;
    }


   /**
    * @param array $paramAutoSet
    * @return GetUserQueueNameResponse
    */
    public function GetUserQueueNameResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetUserQueueNameResponse = new GetUserQueueNameResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetUserQueueNameResponse, $methodName)) {
                $GetUserQueueNameResponse->$methodName($paramValue);
            }
        }
        return $GetUserQueueNameResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return SetUserQueue
    */
    public function SetUserQueue($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SetUserQueue = new SetUserQueue();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SetUserQueue, $methodName)) {
                $SetUserQueue->$methodName($paramValue);
            }
        }
        return $SetUserQueue;
    }


   /**
    * @param array $paramAutoSet
    * @return SetUserQueueResponse
    */
    public function SetUserQueueResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SetUserQueueResponse = new SetUserQueueResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SetUserQueueResponse, $methodName)) {
                $SetUserQueueResponse->$methodName($paramValue);
            }
        }
        return $SetUserQueueResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetAvailableQueuesDataSet
    */
    public function GetAvailableQueuesDataSet($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetAvailableQueuesDataSet = new GetAvailableQueuesDataSet();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetAvailableQueuesDataSet, $methodName)) {
                $GetAvailableQueuesDataSet->$methodName($paramValue);
            }
        }
        return $GetAvailableQueuesDataSet;
    }


   /**
    * @param array $paramAutoSet
    * @return GetAvailableQueuesDataSetResponse
    */
    public function GetAvailableQueuesDataSetResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetAvailableQueuesDataSetResponse = new GetAvailableQueuesDataSetResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetAvailableQueuesDataSetResponse, $methodName)) {
                $GetAvailableQueuesDataSetResponse->$methodName($paramValue);
            }
        }
        return $GetAvailableQueuesDataSetResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetAvailableQueuesDataSetResult
    */
    public function GetAvailableQueuesDataSetResult($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetAvailableQueuesDataSetResult = new GetAvailableQueuesDataSetResult();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetAvailableQueuesDataSetResult, $methodName)) {
                $GetAvailableQueuesDataSetResult->$methodName($paramValue);
            }
        }
        return $GetAvailableQueuesDataSetResult;
    }


   /**
    * @param array $paramAutoSet
    * @return GetAvailableQueuesXMPTblDataSet
    */
    public function GetAvailableQueuesXMPTblDataSet($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetAvailableQueuesXMPTblDataSet = new GetAvailableQueuesXMPTblDataSet();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetAvailableQueuesXMPTblDataSet, $methodName)) {
                $GetAvailableQueuesXMPTblDataSet->$methodName($paramValue);
            }
        }
        return $GetAvailableQueuesXMPTblDataSet;
    }


   /**
    * @param array $paramAutoSet
    * @return GetAvailableQueuesXMPTblDataSetResponse
    */
    public function GetAvailableQueuesXMPTblDataSetResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetAvailableQueuesXMPTblDataSetResponse = new GetAvailableQueuesXMPTblDataSetResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetAvailableQueuesXMPTblDataSetResponse, $methodName)) {
                $GetAvailableQueuesXMPTblDataSetResponse->$methodName($paramValue);
            }
        }
        return $GetAvailableQueuesXMPTblDataSetResponse;
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
