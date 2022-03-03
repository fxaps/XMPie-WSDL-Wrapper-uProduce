<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_11_1\UndocumentedServices\Population_SSP;


/**
 * Population Web Service.
 */
class Population_SSP extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
  'CreateNew' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_1\\UndocumentedServices\\Population_SSP\\CreateNew',
  'PopulationInfo' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_1\\UndocumentedServices\\Population_SSP\\PopulationInfo',
  'PopulationRecipientInformation' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_1\\UndocumentedServices\\Population_SSP\\PopulationRecipientInformation',
  'Connection' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_1\\UndocumentedServices\\Population_SSP\\Connection',
  'ArrayOfPopulationRecipientInformation' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_1\\UndocumentedServices\\Population_SSP\\ArrayOfPopulationRecipientInformation',
  'ArrayOfAdditionalDataSourceInfo' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_1\\UndocumentedServices\\Population_SSP\\ArrayOfAdditionalDataSourceInfo',
  'AdditionalDataSourceInfo' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_1\\UndocumentedServices\\Population_SSP\\AdditionalDataSourceInfo',
  'ArrayOfProperty' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_1\\UndocumentedServices\\Population_SSP\\ArrayOfProperty',
  'Property' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_1\\UndocumentedServices\\Population_SSP\\Property',
  'CreateNewResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_1\\UndocumentedServices\\Population_SSP\\CreateNewResponse',
  'Replace' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_1\\UndocumentedServices\\Population_SSP\\Replace',
  'ReplaceResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_1\\UndocumentedServices\\Population_SSP\\ReplaceResponse',
  'Delete' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_1\\UndocumentedServices\\Population_SSP\\Delete',
  'DeleteResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_1\\UndocumentedServices\\Population_SSP\\DeleteResponse',
  'GetName' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_1\\UndocumentedServices\\Population_SSP\\GetName',
  'GetNameResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_1\\UndocumentedServices\\Population_SSP\\GetNameResponse',
  'GetPortGuid' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_1\\UndocumentedServices\\Population_SSP\\GetPortGuid',
  'GetPortGuidResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_1\\UndocumentedServices\\Population_SSP\\GetPortGuidResponse',
  'GetPopulationInfo' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_1\\UndocumentedServices\\Population_SSP\\GetPopulationInfo',
  'GetPopulationInfoResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_1\\UndocumentedServices\\Population_SSP\\GetPopulationInfoResponse',
  'GetSupportedOperations' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_1\\UndocumentedServices\\Population_SSP\\GetSupportedOperations',
  'GetSupportedOperationsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_1\\UndocumentedServices\\Population_SSP\\GetSupportedOperationsResponse',
  'SupportedOperationsInfo' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_1\\UndocumentedServices\\Population_SSP\\SupportedOperationsInfo',
  'GetId' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_1\\UndocumentedServices\\Population_SSP\\GetId',
  'GetIdResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_1\\UndocumentedServices\\Population_SSP\\GetIdResponse',
  'IsExist' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_1\\UndocumentedServices\\Population_SSP\\IsExist',
  'IsExistResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_1\\UndocumentedServices\\Population_SSP\\IsExistResponse',
  'GetCampaign' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_1\\UndocumentedServices\\Population_SSP\\GetCampaign',
  'GetCampaignResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_1\\UndocumentedServices\\Population_SSP\\GetCampaignResponse',
  'GetSchemaNames' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_1\\UndocumentedServices\\Population_SSP\\GetSchemaNames',
  'GetSchemaNamesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_1\\UndocumentedServices\\Population_SSP\\GetSchemaNamesResponse',
  'ArrayOfString' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_1\\UndocumentedServices\\Population_SSP\\ArrayOfString',
  'GetADORs' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_1\\UndocumentedServices\\Population_SSP\\GetADORs',
  'GetADORsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_1\\UndocumentedServices\\Population_SSP\\GetADORsResponse',
  'ArrayOfPlanObject' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_1\\UndocumentedServices\\Population_SSP\\ArrayOfPlanObject',
  'PlanObject' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_1\\UndocumentedServices\\Population_SSP\\PlanObject',
  'IsAdaptedToWeb' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_1\\UndocumentedServices\\Population_SSP\\IsAdaptedToWeb',
  'IsAdaptedToWebResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_1\\UndocumentedServices\\Population_SSP\\IsAdaptedToWebResponse',
  'GetRecipientsCount' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_1\\UndocumentedServices\\Population_SSP\\GetRecipientsCount',
  'GetRecipientsCountResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_1\\UndocumentedServices\\Population_SSP\\GetRecipientsCountResponse',
  'InsertADORsValues' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_1\\UndocumentedServices\\Population_SSP\\InsertADORsValues',
  'InsertADORsValuesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_1\\UndocumentedServices\\Population_SSP\\InsertADORsValuesResponse',
  'UpdateADORValues' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_1\\UndocumentedServices\\Population_SSP\\UpdateADORValues',
  'UpdateADORValuesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_1\\UndocumentedServices\\Population_SSP\\UpdateADORValuesResponse',
  'DeleteRecipient' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_1\\UndocumentedServices\\Population_SSP\\DeleteRecipient',
  'DeleteRecipientResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_1\\UndocumentedServices\\Population_SSP\\DeleteRecipientResponse',
  'IsRecipientExist' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_1\\UndocumentedServices\\Population_SSP\\IsRecipientExist',
  'IsRecipientExistResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_1\\UndocumentedServices\\Population_SSP\\IsRecipientExistResponse',
  'GetADORValuesForRange' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_1\\UndocumentedServices\\Population_SSP\\GetADORValuesForRange',
  'GetADORValuesForRangeResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_1\\UndocumentedServices\\Population_SSP\\GetADORValuesForRangeResponse',
  'XMPTblDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_1\\UndocumentedServices\\Population_SSP\\XMPTblDataSet',
  'ArrayOfXMPTbl' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_1\\UndocumentedServices\\Population_SSP\\ArrayOfXMPTbl',
  'XMPTbl' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_1\\UndocumentedServices\\Population_SSP\\XMPTbl',
  'ArrayOfXMPTblColumn' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_1\\UndocumentedServices\\Population_SSP\\ArrayOfXMPTblColumn',
  'XMPTblColumn' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_1\\UndocumentedServices\\Population_SSP\\XMPTblColumn',
  'ArrayOfXMPTblRow' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_1\\UndocumentedServices\\Population_SSP\\ArrayOfXMPTblRow',
  'XMPTblRow' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_1\\UndocumentedServices\\Population_SSP\\XMPTblRow',
  'ArrayOfXMPRowField' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_1\\UndocumentedServices\\Population_SSP\\ArrayOfXMPRowField',
  'XMPRowField' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_1\\UndocumentedServices\\Population_SSP\\XMPRowField',
  'GetADORValuesForRangeDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_1\\UndocumentedServices\\Population_SSP\\GetADORValuesForRangeDataSet',
  'GetADORValuesForRangeDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_1\\UndocumentedServices\\Population_SSP\\GetADORValuesForRangeDataSetResponse',
  'GetADORValuesForRangeDataSetResult' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_1\\UndocumentedServices\\Population_SSP\\GetADORValuesForRangeDataSetResult',
  'GetADORValues' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_1\\UndocumentedServices\\Population_SSP\\GetADORValues',
  'GetADORValuesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_1\\UndocumentedServices\\Population_SSP\\GetADORValuesResponse',
  'GetADORValuesDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_1\\UndocumentedServices\\Population_SSP\\GetADORValuesDataSet',
  'GetADORValuesDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_1\\UndocumentedServices\\Population_SSP\\GetADORValuesDataSetResponse',
  'GetADORValuesDataSetResult' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_1\\UndocumentedServices\\Population_SSP\\GetADORValuesDataSetResult',
  'AddTrackEvent' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_1\\UndocumentedServices\\Population_SSP\\AddTrackEvent',
  'XMPDateTime' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_1\\UndocumentedServices\\Population_SSP\\XMPDateTime',
  'AddTrackEventResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_1\\UndocumentedServices\\Population_SSP\\AddTrackEventResponse',
);

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     * @throws SoapFault
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
    
  foreach (self::$classmap as $key => $value) {
    if (!isset($options['classmap'][$key])) {
      $options['classmap'][$key] = $value;
    }
  }
      $options = array_merge(array (
  'features' => 1,
), $options);
      if (!$wsdl) {
        $wsdl = 'http://localhost/xmpiewsapi/Population_SSP.asmx?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * Creates a new Population. Return the population GUID
     *
     * @param CreateNew $parameters
     * @return CreateNewResponse
     */
    public function CreateNew(CreateNew $parameters)
    {
      return $this->__soapCall('CreateNew', array($parameters));
    }

    /**
     * Replaces an existing Population.
     *
     * @param Replace $parameters
     * @return ReplaceResponse
     */
    public function Replace(Replace $parameters)
    {
      return $this->__soapCall('Replace', array($parameters));
    }

    /**
     * Deletes a Population.
     *
     * @param Delete $parameters
     * @return DeleteResponse
     */
    public function Delete(Delete $parameters)
    {
      return $this->__soapCall('Delete', array($parameters));
    }

    /**
     * Get Population Name
     *
     * @param GetName $parameters
     * @return GetNameResponse
     */
    public function GetName(GetName $parameters)
    {
      return $this->__soapCall('GetName', array($parameters));
    }

    /**
     * Get Port GUID
     *
     * @param GetPortGuid $parameters
     * @return GetPortGuidResponse
     */
    public function GetPortGuid(GetPortGuid $parameters)
    {
      return $this->__soapCall('GetPortGuid', array($parameters));
    }

    /**
     * Retrieve the Population information
     *
     * @param GetPopulationInfo $parameters
     * @return GetPopulationInfoResponse
     */
    public function GetPopulationInfo(GetPopulationInfo $parameters)
    {
      return $this->__soapCall('GetPopulationInfo', array($parameters));
    }

    /**
     * Retrieve which operations are supported by this population
     *
     * @param GetSupportedOperations $parameters
     * @return GetSupportedOperationsResponse
     */
    public function GetSupportedOperations(GetSupportedOperations $parameters)
    {
      return $this->__soapCall('GetSupportedOperations', array($parameters));
    }

    /**
     * Retrieve the population GUID, given its name. return empty string if it doesn't exist.
     *
     * @param GetId $parameters
     * @return GetIdResponse
     */
    public function GetId(GetId $parameters)
    {
      return $this->__soapCall('GetId', array($parameters));
    }

    /**
     * return true if a population with this GUID exists.
     *
     * @param IsExist $parameters
     * @return IsExistResponse
     */
    public function IsExist(IsExist $parameters)
    {
      return $this->__soapCall('IsExist', array($parameters));
    }

    /**
     * Retrieve the Campaign ID of the specified Population
     *
     * @param GetCampaign $parameters
     * @return GetCampaignResponse
     */
    public function GetCampaign(GetCampaign $parameters)
    {
      return $this->__soapCall('GetCampaign', array($parameters));
    }

    /**
     * Get Schema data source names
     *
     * @param GetSchemaNames $parameters
     * @return GetSchemaNamesResponse
     */
    public function GetSchemaNames(GetSchemaNames $parameters)
    {
      return $this->__soapCall('GetSchemaNames', array($parameters));
    }

    /**
     * Get ADORs as plan objects
     *
     * @param GetADORs $parameters
     * @return GetADORsResponse
     */
    public function GetADORs(GetADORs $parameters)
    {
      return $this->__soapCall('GetADORs', array($parameters));
    }

    /**
     * Returns true if underlying data source is adapted to web
     *
     * @param IsAdaptedToWeb $parameters
     * @return IsAdaptedToWebResponse
     */
    public function IsAdaptedToWeb(IsAdaptedToWeb $parameters)
    {
      return $this->__soapCall('IsAdaptedToWeb', array($parameters));
    }

    /**
     * Get the number of recipients
     *
     * @param GetRecipientsCount $parameters
     * @return GetRecipientsCountResponse
     */
    public function GetRecipientsCount(GetRecipientsCount $parameters)
    {
      return $this->__soapCall('GetRecipientsCount', array($parameters));
    }

    /**
     * Update ADORs values for recipient.
     *
     * @param InsertADORsValues $parameters
     * @return InsertADORsValuesResponse
     */
    public function InsertADORsValues(InsertADORsValues $parameters)
    {
      return $this->__soapCall('InsertADORsValues', array($parameters));
    }

    /**
     * Update ADORs values for recipient.
     *
     * @param UpdateADORValues $parameters
     * @return UpdateADORValuesResponse
     */
    public function UpdateADORValues(UpdateADORValues $parameters)
    {
      return $this->__soapCall('UpdateADORValues', array($parameters));
    }

    /**
     * Delete a recipient.
     *
     * @param DeleteRecipient $parameters
     * @return DeleteRecipientResponse
     */
    public function DeleteRecipient(DeleteRecipient $parameters)
    {
      return $this->__soapCall('DeleteRecipient', array($parameters));
    }

    /**
     * Checks if a recipient exists.
     *
     * @param IsRecipientExist $parameters
     * @return IsRecipientExistResponse
     */
    public function IsRecipientExist(IsRecipientExist $parameters)
    {
      return $this->__soapCall('IsRecipientExist', array($parameters));
    }

    /**
     * Get ADORs information as DataTblDataSet.
     *
     * @param GetADORValuesForRange $parameters
     * @return GetADORValuesForRangeResponse
     */
    public function GetADORValuesForRange(GetADORValuesForRange $parameters)
    {
      return $this->__soapCall('GetADORValuesForRange', array($parameters));
    }

    /**
     * Get ADORs information.
     *
     * @param GetADORValuesForRangeDataSet $parameters
     * @return GetADORValuesForRangeDataSetResponse
     */
    public function GetADORValuesForRangeDataSet(GetADORValuesForRangeDataSet $parameters)
    {
      return $this->__soapCall('GetADORValuesForRangeDataSet', array($parameters));
    }

    /**
     * Get ADORs values for recipients as XMPTblDataSet.
     *
     * @param GetADORValues $parameters
     * @return GetADORValuesResponse
     */
    public function GetADORValues(GetADORValues $parameters)
    {
      return $this->__soapCall('GetADORValues', array($parameters));
    }

    /**
     * Get ADORs values for recipients.
     *
     * @param GetADORValuesDataSet $parameters
     * @return GetADORValuesDataSetResponse
     */
    public function GetADORValuesDataSet(GetADORValuesDataSet $parameters)
    {
      return $this->__soapCall('GetADORValuesDataSet', array($parameters));
    }

    /**
     * Track an event
     *
     * @param AddTrackEvent $parameters
     * @return AddTrackEventResponse
     */
    public function AddTrackEvent(AddTrackEvent $parameters)
    {
      return $this->__soapCall('AddTrackEvent', array($parameters));
    }

}
