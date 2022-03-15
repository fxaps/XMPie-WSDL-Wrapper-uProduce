<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\Fabricator;


use XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\Population_SSP\CreateNew;
use XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\Population_SSP\PopulationInfo;
use XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\Population_SSP\PopulationRecipientInformation;
use XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\Population_SSP\Connection;
use XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\Population_SSP\ArrayOfPopulationRecipientInformation;
use XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\Population_SSP\ArrayOfAdditionalDataSourceInfo;
use XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\Population_SSP\AdditionalDataSourceInfo;
use XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\Population_SSP\ArrayOfProperty;
use XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\Population_SSP\Property;
use XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\Population_SSP\CreateNewResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\Population_SSP\Replace;
use XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\Population_SSP\ReplaceResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\Population_SSP\Delete;
use XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\Population_SSP\DeleteResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\Population_SSP\GetName;
use XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\Population_SSP\GetNameResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\Population_SSP\GetPortGuid;
use XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\Population_SSP\GetPortGuidResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\Population_SSP\GetPopulationInfo;
use XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\Population_SSP\GetPopulationInfoResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\Population_SSP\GetSupportedOperations;
use XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\Population_SSP\GetSupportedOperationsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\Population_SSP\SupportedOperationsInfo;
use XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\Population_SSP\GetId;
use XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\Population_SSP\GetIdResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\Population_SSP\IsExist;
use XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\Population_SSP\IsExistResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\Population_SSP\GetCampaign;
use XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\Population_SSP\GetCampaignResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\Population_SSP\GetSchemaNames;
use XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\Population_SSP\GetSchemaNamesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\Population_SSP\ArrayOfString;
use XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\Population_SSP\GetADORs;
use XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\Population_SSP\GetADORsResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\Population_SSP\ArrayOfPlanObject;
use XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\Population_SSP\PlanObject;
use XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\Population_SSP\IsAdaptedToWeb;
use XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\Population_SSP\IsAdaptedToWebResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\Population_SSP\GetRecipientsCount;
use XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\Population_SSP\GetRecipientsCountResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\Population_SSP\InsertADORsValues;
use XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\Population_SSP\InsertADORsValuesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\Population_SSP\UpdateADORValues;
use XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\Population_SSP\UpdateADORValuesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\Population_SSP\DeleteRecipient;
use XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\Population_SSP\DeleteRecipientResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\Population_SSP\IsRecipientExist;
use XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\Population_SSP\IsRecipientExistResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\Population_SSP\GetADORValuesForRange;
use XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\Population_SSP\GetADORValuesForRangeResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\Population_SSP\XMPTblDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\Population_SSP\ArrayOfXMPTbl;
use XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\Population_SSP\XMPTbl;
use XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\Population_SSP\ArrayOfXMPTblColumn;
use XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\Population_SSP\XMPTblColumn;
use XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\Population_SSP\ArrayOfXMPTblRow;
use XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\Population_SSP\XMPTblRow;
use XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\Population_SSP\ArrayOfXMPRowField;
use XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\Population_SSP\XMPRowField;
use XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\Population_SSP\GetADORValuesForRangeDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\Population_SSP\GetADORValuesForRangeDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\Population_SSP\GetADORValuesForRangeDataSetResult;
use XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\Population_SSP\GetADORValues;
use XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\Population_SSP\GetADORValuesResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\Population_SSP\GetADORValuesDataSet;
use XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\Population_SSP\GetADORValuesDataSetResponse;
use XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\Population_SSP\GetADORValuesDataSetResult;
use XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\Population_SSP\AddTrackEvent;
use XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\Population_SSP\XMPDateTime;
use XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\Population_SSP\AddTrackEventResponse;


class FabricatePopulation_SSP
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
    * @return PopulationInfo
    */
    public function PopulationInfo($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $PopulationInfo = new PopulationInfo();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($PopulationInfo, $methodName)) {
                $PopulationInfo->$methodName($paramValue);
            }
        }
        return $PopulationInfo;
    }


   /**
    * @param array $paramAutoSet
    * @return PopulationRecipientInformation
    */
    public function PopulationRecipientInformation($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $PopulationRecipientInformation = new PopulationRecipientInformation();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($PopulationRecipientInformation, $methodName)) {
                $PopulationRecipientInformation->$methodName($paramValue);
            }
        }
        return $PopulationRecipientInformation;
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
    * @return ArrayOfPopulationRecipientInformation
    */
    public function ArrayOfPopulationRecipientInformation($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfPopulationRecipientInformation = new ArrayOfPopulationRecipientInformation();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfPopulationRecipientInformation, $methodName)) {
                $ArrayOfPopulationRecipientInformation->$methodName($paramValue);
            }
        }
        return $ArrayOfPopulationRecipientInformation;
    }


   /**
    * @param array $paramAutoSet
    * @return ArrayOfAdditionalDataSourceInfo
    */
    public function ArrayOfAdditionalDataSourceInfo($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfAdditionalDataSourceInfo = new ArrayOfAdditionalDataSourceInfo();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfAdditionalDataSourceInfo, $methodName)) {
                $ArrayOfAdditionalDataSourceInfo->$methodName($paramValue);
            }
        }
        return $ArrayOfAdditionalDataSourceInfo;
    }


   /**
    * @param array $paramAutoSet
    * @return AdditionalDataSourceInfo
    */
    public function AdditionalDataSourceInfo($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $AdditionalDataSourceInfo = new AdditionalDataSourceInfo();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($AdditionalDataSourceInfo, $methodName)) {
                $AdditionalDataSourceInfo->$methodName($paramValue);
            }
        }
        return $AdditionalDataSourceInfo;
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
    * @return GetName
    */
    public function GetName($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetName = new GetName();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetName, $methodName)) {
                $GetName->$methodName($paramValue);
            }
        }
        return $GetName;
    }


   /**
    * @param array $paramAutoSet
    * @return GetNameResponse
    */
    public function GetNameResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetNameResponse = new GetNameResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetNameResponse, $methodName)) {
                $GetNameResponse->$methodName($paramValue);
            }
        }
        return $GetNameResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetPortGuid
    */
    public function GetPortGuid($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetPortGuid = new GetPortGuid();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetPortGuid, $methodName)) {
                $GetPortGuid->$methodName($paramValue);
            }
        }
        return $GetPortGuid;
    }


   /**
    * @param array $paramAutoSet
    * @return GetPortGuidResponse
    */
    public function GetPortGuidResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetPortGuidResponse = new GetPortGuidResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetPortGuidResponse, $methodName)) {
                $GetPortGuidResponse->$methodName($paramValue);
            }
        }
        return $GetPortGuidResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetPopulationInfo
    */
    public function GetPopulationInfo($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetPopulationInfo = new GetPopulationInfo();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetPopulationInfo, $methodName)) {
                $GetPopulationInfo->$methodName($paramValue);
            }
        }
        return $GetPopulationInfo;
    }


   /**
    * @param array $paramAutoSet
    * @return GetPopulationInfoResponse
    */
    public function GetPopulationInfoResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetPopulationInfoResponse = new GetPopulationInfoResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetPopulationInfoResponse, $methodName)) {
                $GetPopulationInfoResponse->$methodName($paramValue);
            }
        }
        return $GetPopulationInfoResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetSupportedOperations
    */
    public function GetSupportedOperations($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetSupportedOperations = new GetSupportedOperations();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetSupportedOperations, $methodName)) {
                $GetSupportedOperations->$methodName($paramValue);
            }
        }
        return $GetSupportedOperations;
    }


   /**
    * @param array $paramAutoSet
    * @return GetSupportedOperationsResponse
    */
    public function GetSupportedOperationsResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetSupportedOperationsResponse = new GetSupportedOperationsResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetSupportedOperationsResponse, $methodName)) {
                $GetSupportedOperationsResponse->$methodName($paramValue);
            }
        }
        return $GetSupportedOperationsResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return SupportedOperationsInfo
    */
    public function SupportedOperationsInfo($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SupportedOperationsInfo = new SupportedOperationsInfo();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SupportedOperationsInfo, $methodName)) {
                $SupportedOperationsInfo->$methodName($paramValue);
            }
        }
        return $SupportedOperationsInfo;
    }


   /**
    * @param array $paramAutoSet
    * @return GetId
    */
    public function GetId($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetId = new GetId();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetId, $methodName)) {
                $GetId->$methodName($paramValue);
            }
        }
        return $GetId;
    }


   /**
    * @param array $paramAutoSet
    * @return GetIdResponse
    */
    public function GetIdResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetIdResponse = new GetIdResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetIdResponse, $methodName)) {
                $GetIdResponse->$methodName($paramValue);
            }
        }
        return $GetIdResponse;
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


   /**
    * @param array $paramAutoSet
    * @return GetCampaign
    */
    public function GetCampaign($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetCampaign = new GetCampaign();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetCampaign, $methodName)) {
                $GetCampaign->$methodName($paramValue);
            }
        }
        return $GetCampaign;
    }


   /**
    * @param array $paramAutoSet
    * @return GetCampaignResponse
    */
    public function GetCampaignResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetCampaignResponse = new GetCampaignResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetCampaignResponse, $methodName)) {
                $GetCampaignResponse->$methodName($paramValue);
            }
        }
        return $GetCampaignResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetSchemaNames
    */
    public function GetSchemaNames($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetSchemaNames = new GetSchemaNames();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetSchemaNames, $methodName)) {
                $GetSchemaNames->$methodName($paramValue);
            }
        }
        return $GetSchemaNames;
    }


   /**
    * @param array $paramAutoSet
    * @return GetSchemaNamesResponse
    */
    public function GetSchemaNamesResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetSchemaNamesResponse = new GetSchemaNamesResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetSchemaNamesResponse, $methodName)) {
                $GetSchemaNamesResponse->$methodName($paramValue);
            }
        }
        return $GetSchemaNamesResponse;
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
    * @return GetADORs
    */
    public function GetADORs($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetADORs = new GetADORs();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetADORs, $methodName)) {
                $GetADORs->$methodName($paramValue);
            }
        }
        return $GetADORs;
    }


   /**
    * @param array $paramAutoSet
    * @return GetADORsResponse
    */
    public function GetADORsResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetADORsResponse = new GetADORsResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetADORsResponse, $methodName)) {
                $GetADORsResponse->$methodName($paramValue);
            }
        }
        return $GetADORsResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return ArrayOfPlanObject
    */
    public function ArrayOfPlanObject($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfPlanObject = new ArrayOfPlanObject();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfPlanObject, $methodName)) {
                $ArrayOfPlanObject->$methodName($paramValue);
            }
        }
        return $ArrayOfPlanObject;
    }


   /**
    * @param array $paramAutoSet
    * @return PlanObject
    */
    public function PlanObject($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $PlanObject = new PlanObject();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($PlanObject, $methodName)) {
                $PlanObject->$methodName($paramValue);
            }
        }
        return $PlanObject;
    }


   /**
    * @param array $paramAutoSet
    * @return IsAdaptedToWeb
    */
    public function IsAdaptedToWeb($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $IsAdaptedToWeb = new IsAdaptedToWeb();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($IsAdaptedToWeb, $methodName)) {
                $IsAdaptedToWeb->$methodName($paramValue);
            }
        }
        return $IsAdaptedToWeb;
    }


   /**
    * @param array $paramAutoSet
    * @return IsAdaptedToWebResponse
    */
    public function IsAdaptedToWebResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $IsAdaptedToWebResponse = new IsAdaptedToWebResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($IsAdaptedToWebResponse, $methodName)) {
                $IsAdaptedToWebResponse->$methodName($paramValue);
            }
        }
        return $IsAdaptedToWebResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetRecipientsCount
    */
    public function GetRecipientsCount($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetRecipientsCount = new GetRecipientsCount();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetRecipientsCount, $methodName)) {
                $GetRecipientsCount->$methodName($paramValue);
            }
        }
        return $GetRecipientsCount;
    }


   /**
    * @param array $paramAutoSet
    * @return GetRecipientsCountResponse
    */
    public function GetRecipientsCountResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetRecipientsCountResponse = new GetRecipientsCountResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetRecipientsCountResponse, $methodName)) {
                $GetRecipientsCountResponse->$methodName($paramValue);
            }
        }
        return $GetRecipientsCountResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return InsertADORsValues
    */
    public function InsertADORsValues($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $InsertADORsValues = new InsertADORsValues();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($InsertADORsValues, $methodName)) {
                $InsertADORsValues->$methodName($paramValue);
            }
        }
        return $InsertADORsValues;
    }


   /**
    * @param array $paramAutoSet
    * @return InsertADORsValuesResponse
    */
    public function InsertADORsValuesResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $InsertADORsValuesResponse = new InsertADORsValuesResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($InsertADORsValuesResponse, $methodName)) {
                $InsertADORsValuesResponse->$methodName($paramValue);
            }
        }
        return $InsertADORsValuesResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return UpdateADORValues
    */
    public function UpdateADORValues($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $UpdateADORValues = new UpdateADORValues();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($UpdateADORValues, $methodName)) {
                $UpdateADORValues->$methodName($paramValue);
            }
        }
        return $UpdateADORValues;
    }


   /**
    * @param array $paramAutoSet
    * @return UpdateADORValuesResponse
    */
    public function UpdateADORValuesResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $UpdateADORValuesResponse = new UpdateADORValuesResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($UpdateADORValuesResponse, $methodName)) {
                $UpdateADORValuesResponse->$methodName($paramValue);
            }
        }
        return $UpdateADORValuesResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteRecipient
    */
    public function DeleteRecipient($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteRecipient = new DeleteRecipient();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteRecipient, $methodName)) {
                $DeleteRecipient->$methodName($paramValue);
            }
        }
        return $DeleteRecipient;
    }


   /**
    * @param array $paramAutoSet
    * @return DeleteRecipientResponse
    */
    public function DeleteRecipientResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DeleteRecipientResponse = new DeleteRecipientResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DeleteRecipientResponse, $methodName)) {
                $DeleteRecipientResponse->$methodName($paramValue);
            }
        }
        return $DeleteRecipientResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return IsRecipientExist
    */
    public function IsRecipientExist($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $IsRecipientExist = new IsRecipientExist();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($IsRecipientExist, $methodName)) {
                $IsRecipientExist->$methodName($paramValue);
            }
        }
        return $IsRecipientExist;
    }


   /**
    * @param array $paramAutoSet
    * @return IsRecipientExistResponse
    */
    public function IsRecipientExistResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $IsRecipientExistResponse = new IsRecipientExistResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($IsRecipientExistResponse, $methodName)) {
                $IsRecipientExistResponse->$methodName($paramValue);
            }
        }
        return $IsRecipientExistResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetADORValuesForRange
    */
    public function GetADORValuesForRange($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetADORValuesForRange = new GetADORValuesForRange();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetADORValuesForRange, $methodName)) {
                $GetADORValuesForRange->$methodName($paramValue);
            }
        }
        return $GetADORValuesForRange;
    }


   /**
    * @param array $paramAutoSet
    * @return GetADORValuesForRangeResponse
    */
    public function GetADORValuesForRangeResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetADORValuesForRangeResponse = new GetADORValuesForRangeResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetADORValuesForRangeResponse, $methodName)) {
                $GetADORValuesForRangeResponse->$methodName($paramValue);
            }
        }
        return $GetADORValuesForRangeResponse;
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
    * @return GetADORValuesForRangeDataSet
    */
    public function GetADORValuesForRangeDataSet($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetADORValuesForRangeDataSet = new GetADORValuesForRangeDataSet();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetADORValuesForRangeDataSet, $methodName)) {
                $GetADORValuesForRangeDataSet->$methodName($paramValue);
            }
        }
        return $GetADORValuesForRangeDataSet;
    }


   /**
    * @param array $paramAutoSet
    * @return GetADORValuesForRangeDataSetResponse
    */
    public function GetADORValuesForRangeDataSetResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetADORValuesForRangeDataSetResponse = new GetADORValuesForRangeDataSetResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetADORValuesForRangeDataSetResponse, $methodName)) {
                $GetADORValuesForRangeDataSetResponse->$methodName($paramValue);
            }
        }
        return $GetADORValuesForRangeDataSetResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetADORValuesForRangeDataSetResult
    */
    public function GetADORValuesForRangeDataSetResult($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetADORValuesForRangeDataSetResult = new GetADORValuesForRangeDataSetResult();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetADORValuesForRangeDataSetResult, $methodName)) {
                $GetADORValuesForRangeDataSetResult->$methodName($paramValue);
            }
        }
        return $GetADORValuesForRangeDataSetResult;
    }


   /**
    * @param array $paramAutoSet
    * @return GetADORValues
    */
    public function GetADORValues($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetADORValues = new GetADORValues();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetADORValues, $methodName)) {
                $GetADORValues->$methodName($paramValue);
            }
        }
        return $GetADORValues;
    }


   /**
    * @param array $paramAutoSet
    * @return GetADORValuesResponse
    */
    public function GetADORValuesResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetADORValuesResponse = new GetADORValuesResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetADORValuesResponse, $methodName)) {
                $GetADORValuesResponse->$methodName($paramValue);
            }
        }
        return $GetADORValuesResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetADORValuesDataSet
    */
    public function GetADORValuesDataSet($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetADORValuesDataSet = new GetADORValuesDataSet();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetADORValuesDataSet, $methodName)) {
                $GetADORValuesDataSet->$methodName($paramValue);
            }
        }
        return $GetADORValuesDataSet;
    }


   /**
    * @param array $paramAutoSet
    * @return GetADORValuesDataSetResponse
    */
    public function GetADORValuesDataSetResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetADORValuesDataSetResponse = new GetADORValuesDataSetResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetADORValuesDataSetResponse, $methodName)) {
                $GetADORValuesDataSetResponse->$methodName($paramValue);
            }
        }
        return $GetADORValuesDataSetResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetADORValuesDataSetResult
    */
    public function GetADORValuesDataSetResult($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetADORValuesDataSetResult = new GetADORValuesDataSetResult();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetADORValuesDataSetResult, $methodName)) {
                $GetADORValuesDataSetResult->$methodName($paramValue);
            }
        }
        return $GetADORValuesDataSetResult;
    }


   /**
    * @param array $paramAutoSet
    * @return AddTrackEvent
    */
    public function AddTrackEvent($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $AddTrackEvent = new AddTrackEvent();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($AddTrackEvent, $methodName)) {
                $AddTrackEvent->$methodName($paramValue);
            }
        }
        return $AddTrackEvent;
    }


   /**
    * @param array $paramAutoSet
    * @return XMPDateTime
    */
    public function XMPDateTime($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $XMPDateTime = new XMPDateTime();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($XMPDateTime, $methodName)) {
                $XMPDateTime->$methodName($paramValue);
            }
        }
        return $XMPDateTime;
    }


   /**
    * @param array $paramAutoSet
    * @return AddTrackEventResponse
    */
    public function AddTrackEventResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $AddTrackEventResponse = new AddTrackEventResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($AddTrackEventResponse, $methodName)) {
                $AddTrackEventResponse->$methodName($paramValue);
            }
        }
        return $AddTrackEventResponse;
    }



}

?>
