<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_11_2_2\UndocumentedServices\MeasurementUnit_SSP;


/**
 * MeasurementUnit Web Service.
 */
class MeasurementUnit_SSP extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
  'CreateNew' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_2_2\\UndocumentedServices\\MeasurementUnit_SSP\\CreateNew',
  'ArrayOfProperty' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_2_2\\UndocumentedServices\\MeasurementUnit_SSP\\ArrayOfProperty',
  'Property' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_2_2\\UndocumentedServices\\MeasurementUnit_SSP\\Property',
  'CreateNewResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_2_2\\UndocumentedServices\\MeasurementUnit_SSP\\CreateNewResponse',
  'Delete' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_2_2\\UndocumentedServices\\MeasurementUnit_SSP\\Delete',
  'DeleteResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_2_2\\UndocumentedServices\\MeasurementUnit_SSP\\DeleteResponse',
  'GetDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_2_2\\UndocumentedServices\\MeasurementUnit_SSP\\GetDataSet',
  'GetDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_2_2\\UndocumentedServices\\MeasurementUnit_SSP\\GetDataSetResponse',
  'GetDataSetResult' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_2_2\\UndocumentedServices\\MeasurementUnit_SSP\\GetDataSetResult',
  'GetXMPTblDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_2_2\\UndocumentedServices\\MeasurementUnit_SSP\\GetXMPTblDataSet',
  'GetXMPTblDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_2_2\\UndocumentedServices\\MeasurementUnit_SSP\\GetXMPTblDataSetResponse',
  'XMPTblDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_2_2\\UndocumentedServices\\MeasurementUnit_SSP\\XMPTblDataSet',
  'ArrayOfXMPTbl' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_2_2\\UndocumentedServices\\MeasurementUnit_SSP\\ArrayOfXMPTbl',
  'XMPTbl' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_2_2\\UndocumentedServices\\MeasurementUnit_SSP\\XMPTbl',
  'ArrayOfXMPTblColumn' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_2_2\\UndocumentedServices\\MeasurementUnit_SSP\\ArrayOfXMPTblColumn',
  'XMPTblColumn' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_2_2\\UndocumentedServices\\MeasurementUnit_SSP\\XMPTblColumn',
  'ArrayOfXMPTblRow' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_2_2\\UndocumentedServices\\MeasurementUnit_SSP\\ArrayOfXMPTblRow',
  'XMPTblRow' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_2_2\\UndocumentedServices\\MeasurementUnit_SSP\\XMPTblRow',
  'ArrayOfXMPRowField' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_2_2\\UndocumentedServices\\MeasurementUnit_SSP\\ArrayOfXMPRowField',
  'XMPRowField' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_2_2\\UndocumentedServices\\MeasurementUnit_SSP\\XMPRowField',
  'GetCustomer' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_2_2\\UndocumentedServices\\MeasurementUnit_SSP\\GetCustomer',
  'GetCustomerResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_2_2\\UndocumentedServices\\MeasurementUnit_SSP\\GetCustomerResponse',
  'GetProperty' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_2_2\\UndocumentedServices\\MeasurementUnit_SSP\\GetProperty',
  'GetPropertyResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_2_2\\UndocumentedServices\\MeasurementUnit_SSP\\GetPropertyResponse',
  'GetProperties' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_2_2\\UndocumentedServices\\MeasurementUnit_SSP\\GetProperties',
  'ArrayOfString' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_2_2\\UndocumentedServices\\MeasurementUnit_SSP\\ArrayOfString',
  'GetPropertiesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_2_2\\UndocumentedServices\\MeasurementUnit_SSP\\GetPropertiesResponse',
  'GetAllProperties' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_2_2\\UndocumentedServices\\MeasurementUnit_SSP\\GetAllProperties',
  'GetAllPropertiesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_2_2\\UndocumentedServices\\MeasurementUnit_SSP\\GetAllPropertiesResponse',
  'SetProperty' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_2_2\\UndocumentedServices\\MeasurementUnit_SSP\\SetProperty',
  'SetPropertyResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_2_2\\UndocumentedServices\\MeasurementUnit_SSP\\SetPropertyResponse',
  'SetProperties' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_2_2\\UndocumentedServices\\MeasurementUnit_SSP\\SetProperties',
  'SetPropertiesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_2_2\\UndocumentedServices\\MeasurementUnit_SSP\\SetPropertiesResponse',
  'GetID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_2_2\\UndocumentedServices\\MeasurementUnit_SSP\\GetID',
  'GetIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_11_2_2\\UndocumentedServices\\MeasurementUnit_SSP\\GetIDResponse',
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
        $wsdl = 'http://localhost/xmpiewsapi/MeasurementUnit_SSP.asmx?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * Create new Measurement Unit.
     *
     * @param CreateNew $parameters
     * @return CreateNewResponse
     */
    public function CreateNew(CreateNew $parameters)
    {
      return $this->__soapCall('CreateNew', array($parameters));
    }

    /**
     * Delete Measurement Unit.
     *
     * @param Delete $parameters
     * @return DeleteResponse
     */
    public function Delete(Delete $parameters)
    {
      return $this->__soapCall('Delete', array($parameters));
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

    /**
     * Get Customer.
     *
     * @param GetCustomer $parameters
     * @return GetCustomerResponse
     */
    public function GetCustomer(GetCustomer $parameters)
    {
      return $this->__soapCall('GetCustomer', array($parameters));
    }

    /**
     * Get property by name.
     *
     * @param GetProperty $parameters
     * @return GetPropertyResponse
     */
    public function GetProperty(GetProperty $parameters)
    {
      return $this->__soapCall('GetProperty', array($parameters));
    }

    /**
     * Get Measurement Unit's properties.
     *
     * @param GetProperties $parameters
     * @return GetPropertiesResponse
     */
    public function GetProperties(GetProperties $parameters)
    {
      return $this->__soapCall('GetProperties', array($parameters));
    }

    /**
     * Get all Measurement Unit's properties.
     *
     * @param GetAllProperties $parameters
     * @return GetAllPropertiesResponse
     */
    public function GetAllProperties(GetAllProperties $parameters)
    {
      return $this->__soapCall('GetAllProperties', array($parameters));
    }

    /**
     * Set Measurement Unit property by name.
     *
     * @param SetProperty $parameters
     * @return SetPropertyResponse
     */
    public function SetProperty(SetProperty $parameters)
    {
      return $this->__soapCall('SetProperty', array($parameters));
    }

    /**
     * Set Measurement Unit's properties.
     *
     * @param SetProperties $parameters
     * @return SetPropertiesResponse
     */
    public function SetProperties(SetProperties $parameters)
    {
      return $this->__soapCall('SetProperties', array($parameters));
    }

    /**
     * Get Measurement Unit ID
     *
     * @param GetID $parameters
     * @return GetIDResponse
     */
    public function GetID(GetID $parameters)
    {
      return $this->__soapCall('GetID', array($parameters));
    }

}
