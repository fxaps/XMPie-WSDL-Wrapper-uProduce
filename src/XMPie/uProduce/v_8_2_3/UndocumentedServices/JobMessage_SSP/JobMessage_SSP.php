<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_8_2_3\UndocumentedServices\JobMessage_SSP;


use SoapFault;

/**
 * JobMessage Web Service.
 */
class JobMessage_SSP extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
  'CreateNew' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_8_2_3\\UndocumentedServices\\JobMessage_SSP\\CreateNew',
  'CreateNewResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_8_2_3\\UndocumentedServices\\JobMessage_SSP\\CreateNewResponse',
  'Delete' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_8_2_3\\UndocumentedServices\\JobMessage_SSP\\Delete',
  'DeleteResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_8_2_3\\UndocumentedServices\\JobMessage_SSP\\DeleteResponse',
  'GetJob' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_8_2_3\\UndocumentedServices\\JobMessage_SSP\\GetJob',
  'GetJobResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_8_2_3\\UndocumentedServices\\JobMessage_SSP\\GetJobResponse',
  'GetContext' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_8_2_3\\UndocumentedServices\\JobMessage_SSP\\GetContext',
  'GetContextResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_8_2_3\\UndocumentedServices\\JobMessage_SSP\\GetContextResponse',
  'GetSeverity' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_8_2_3\\UndocumentedServices\\JobMessage_SSP\\GetSeverity',
  'GetSeverityResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_8_2_3\\UndocumentedServices\\JobMessage_SSP\\GetSeverityResponse',
  'GetMessageId' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_8_2_3\\UndocumentedServices\\JobMessage_SSP\\GetMessageId',
  'GetMessageIdResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_8_2_3\\UndocumentedServices\\JobMessage_SSP\\GetMessageIdResponse',
  'GetParams' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_8_2_3\\UndocumentedServices\\JobMessage_SSP\\GetParams',
  'GetParamsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_8_2_3\\UndocumentedServices\\JobMessage_SSP\\GetParamsResponse',
  'GetProperty' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_8_2_3\\UndocumentedServices\\JobMessage_SSP\\GetProperty',
  'GetPropertyResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_8_2_3\\UndocumentedServices\\JobMessage_SSP\\GetPropertyResponse',
  'Property' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_8_2_3\\UndocumentedServices\\JobMessage_SSP\\Property',
  'GetProperties' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_8_2_3\\UndocumentedServices\\JobMessage_SSP\\GetProperties',
  'ArrayOfString' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_8_2_3\\UndocumentedServices\\JobMessage_SSP\\ArrayOfString',
  'GetPropertiesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_8_2_3\\UndocumentedServices\\JobMessage_SSP\\GetPropertiesResponse',
  'ArrayOfProperty' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_8_2_3\\UndocumentedServices\\JobMessage_SSP\\ArrayOfProperty',
  'GetAllProperties' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_8_2_3\\UndocumentedServices\\JobMessage_SSP\\GetAllProperties',
  'GetAllPropertiesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_8_2_3\\UndocumentedServices\\JobMessage_SSP\\GetAllPropertiesResponse',
  'GetDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_8_2_3\\UndocumentedServices\\JobMessage_SSP\\GetDataSet',
  'GetDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_8_2_3\\UndocumentedServices\\JobMessage_SSP\\GetDataSetResponse',
  'GetDataSetResult' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_8_2_3\\UndocumentedServices\\JobMessage_SSP\\GetDataSetResult',
  'GetXMPTblDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_8_2_3\\UndocumentedServices\\JobMessage_SSP\\GetXMPTblDataSet',
  'GetXMPTblDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_8_2_3\\UndocumentedServices\\JobMessage_SSP\\GetXMPTblDataSetResponse',
  'XMPTblDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_8_2_3\\UndocumentedServices\\JobMessage_SSP\\XMPTblDataSet',
  'ArrayOfXMPTbl' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_8_2_3\\UndocumentedServices\\JobMessage_SSP\\ArrayOfXMPTbl',
  'XMPTbl' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_8_2_3\\UndocumentedServices\\JobMessage_SSP\\XMPTbl',
  'ArrayOfXMPTblColumn' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_8_2_3\\UndocumentedServices\\JobMessage_SSP\\ArrayOfXMPTblColumn',
  'XMPTblColumn' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_8_2_3\\UndocumentedServices\\JobMessage_SSP\\XMPTblColumn',
  'ArrayOfXMPTblRow' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_8_2_3\\UndocumentedServices\\JobMessage_SSP\\ArrayOfXMPTblRow',
  'XMPTblRow' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_8_2_3\\UndocumentedServices\\JobMessage_SSP\\XMPTblRow',
  'ArrayOfXMPRowField' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_8_2_3\\UndocumentedServices\\JobMessage_SSP\\ArrayOfXMPRowField',
  'XMPRowField' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_8_2_3\\UndocumentedServices\\JobMessage_SSP\\XMPRowField',
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
        $wsdl = 'http://localhost/xmpiewsapi/JobMessage_SSP.asmx?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * Create new Job message.
     *
     * @param CreateNew $parameters
     * @return CreateNewResponse
     */
    public function CreateNew(CreateNew $parameters)
    {
      return $this->__soapCall('CreateNew', array($parameters));
    }

    /**
     * Delete Job message.
     *
     * @param Delete $parameters
     * @return DeleteResponse
     */
    public function Delete(Delete $parameters)
    {
      return $this->__soapCall('Delete', array($parameters));
    }

    /**
     * Get Message's Job id.
     *
     * @param GetJob $parameters
     * @return GetJobResponse
     */
    public function GetJob(GetJob $parameters)
    {
      return $this->__soapCall('GetJob', array($parameters));
    }

    /**
     * Get Message's context.
     *
     * @param GetContext $parameters
     * @return GetContextResponse
     */
    public function GetContext(GetContext $parameters)
    {
      return $this->__soapCall('GetContext', array($parameters));
    }

    /**
     * Get Message's sevirity.
     *
     * @param GetSeverity $parameters
     * @return GetSeverityResponse
     */
    public function GetSeverity(GetSeverity $parameters)
    {
      return $this->__soapCall('GetSeverity', array($parameters));
    }

    /**
     * Get Message's id.
     *
     * @param GetMessageId $parameters
     * @return GetMessageIdResponse
     */
    public function GetMessageId(GetMessageId $parameters)
    {
      return $this->__soapCall('GetMessageId', array($parameters));
    }

    /**
     * Get Message's params.
     *
     * @param GetParams $parameters
     * @return GetParamsResponse
     */
    public function GetParams(GetParams $parameters)
    {
      return $this->__soapCall('GetParams', array($parameters));
    }

    /**
     * Get a property by name.
     *
     * @param GetProperty $parameters
     * @return GetPropertyResponse
     */
    public function GetProperty(GetProperty $parameters)
    {
      return $this->__soapCall('GetProperty', array($parameters));
    }

    /**
     * Get list of properties.
     *
     * @param GetProperties $parameters
     * @return GetPropertiesResponse
     */
    public function GetProperties(GetProperties $parameters)
    {
      return $this->__soapCall('GetProperties', array($parameters));
    }

    /**
     * Get all properties.
     *
     * @param GetAllProperties $parameters
     * @return GetAllPropertiesResponse
     */
    public function GetAllProperties(GetAllProperties $parameters)
    {
      return $this->__soapCall('GetAllProperties', array($parameters));
    }

    /**
     * Get properties view.
     *
     * @param GetDataSet $parameters
     * @return GetDataSetResponse
     */
    public function GetDataSet(GetDataSet $parameters)
    {
      return $this->__soapCall('GetDataSet', array($parameters));
    }

    /**
     * Get properties view.
     *
     * @param GetXMPTblDataSet $parameters
     * @return GetXMPTblDataSetResponse
     */
    public function GetXMPTblDataSet(GetXMPTblDataSet $parameters)
    {
      return $this->__soapCall('GetXMPTblDataSet', array($parameters));
    }

}
