<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\CustomButton_SSP;


/**
 * CustomButton Web Service.
 */
class CustomButton_SSP extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
  'CreateNew' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\CustomButton_SSP\\CreateNew',
  'ArrayOfProperty' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\CustomButton_SSP\\ArrayOfProperty',
  'Property' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\CustomButton_SSP\\Property',
  'CreateNewResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\CustomButton_SSP\\CreateNewResponse',
  'Delete' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\CustomButton_SSP\\Delete',
  'DeleteResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\CustomButton_SSP\\DeleteResponse',
  'GetCustomer' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\CustomButton_SSP\\GetCustomer',
  'GetCustomerResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\CustomButton_SSP\\GetCustomerResponse',
  'GetProperty' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\CustomButton_SSP\\GetProperty',
  'GetPropertyResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\CustomButton_SSP\\GetPropertyResponse',
  'GetProperties' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\CustomButton_SSP\\GetProperties',
  'ArrayOfString' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\CustomButton_SSP\\ArrayOfString',
  'GetPropertiesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\CustomButton_SSP\\GetPropertiesResponse',
  'GetAllProperties' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\CustomButton_SSP\\GetAllProperties',
  'GetAllPropertiesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\CustomButton_SSP\\GetAllPropertiesResponse',
  'GetDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\CustomButton_SSP\\GetDataSet',
  'GetDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\CustomButton_SSP\\GetDataSetResponse',
  'GetDataSetResult' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\CustomButton_SSP\\GetDataSetResult',
  'GetXMPTblDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\CustomButton_SSP\\GetXMPTblDataSet',
  'GetXMPTblDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\CustomButton_SSP\\GetXMPTblDataSetResponse',
  'XMPTblDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\CustomButton_SSP\\XMPTblDataSet',
  'ArrayOfXMPTbl' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\CustomButton_SSP\\ArrayOfXMPTbl',
  'XMPTbl' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\CustomButton_SSP\\XMPTbl',
  'ArrayOfXMPTblColumn' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\CustomButton_SSP\\ArrayOfXMPTblColumn',
  'XMPTblColumn' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\CustomButton_SSP\\XMPTblColumn',
  'ArrayOfXMPTblRow' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\CustomButton_SSP\\ArrayOfXMPTblRow',
  'XMPTblRow' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\CustomButton_SSP\\XMPTblRow',
  'ArrayOfXMPRowField' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\CustomButton_SSP\\ArrayOfXMPRowField',
  'XMPRowField' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\CustomButton_SSP\\XMPRowField',
  'SetProperty' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\CustomButton_SSP\\SetProperty',
  'SetPropertyResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\CustomButton_SSP\\SetPropertyResponse',
  'SetProperties' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\CustomButton_SSP\\SetProperties',
  'SetPropertiesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\CustomButton_SSP\\SetPropertiesResponse',
  'GetTypes' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\CustomButton_SSP\\GetTypes',
  'GetTypesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\CustomButton_SSP\\GetTypesResponse',
  'GetTypesResult' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\CustomButton_SSP\\GetTypesResult',
  'GetTypesXMPTblDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\CustomButton_SSP\\GetTypesXMPTblDataSet',
  'GetTypesXMPTblDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\CustomButton_SSP\\GetTypesXMPTblDataSetResponse',
  'Execute' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\CustomButton_SSP\\Execute',
  'ExecuteResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\CustomButton_SSP\\ExecuteResponse',
  'GetID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\CustomButton_SSP\\GetID',
  'GetIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\CustomButton_SSP\\GetIDResponse',
  'IsExist' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\CustomButton_SSP\\IsExist',
  'IsExistResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\CustomButton_SSP\\IsExistResponse',
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
        $wsdl = 'http://localhost/xmpiewsapi/CustomButton_SSP.asmx?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * Create new Custom button.
     *
     * @param CreateNew $parameters
     * @return CreateNewResponse
     */
    public function CreateNew(CreateNew $parameters)
    {
      return $this->__soapCall('CreateNew', array($parameters));
    }

    /**
     * Delete Custom button.
     *
     * @param Delete $parameters
     * @return DeleteResponse
     */
    public function Delete(Delete $parameters)
    {
      return $this->__soapCall('Delete', array($parameters));
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
     * Get customer's properties.
     *
     * @param GetProperties $parameters
     * @return GetPropertiesResponse
     */
    public function GetProperties(GetProperties $parameters)
    {
      return $this->__soapCall('GetProperties', array($parameters));
    }

    /**
     * Get all customer's properties.
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

    /**
     * Set property.
     *
     * @param SetProperty $parameters
     * @return SetPropertyResponse
     */
    public function SetProperty(SetProperty $parameters)
    {
      return $this->__soapCall('SetProperty', array($parameters));
    }

    /**
     * Set properties.
     *
     * @param SetProperties $parameters
     * @return SetPropertiesResponse
     */
    public function SetProperties(SetProperties $parameters)
    {
      return $this->__soapCall('SetProperties', array($parameters));
    }

    /**
     * Get custom button types.
     *
     * @param GetTypes $parameters
     * @return GetTypesResponse
     */
    public function GetTypes(GetTypes $parameters)
    {
      return $this->__soapCall('GetTypes', array($parameters));
    }

    /**
     * Get custom button types.
     *
     * @param GetTypesXMPTblDataSet $parameters
     * @return GetTypesXMPTblDataSetResponse
     */
    public function GetTypesXMPTblDataSet(GetTypesXMPTblDataSet $parameters)
    {
      return $this->__soapCall('GetTypesXMPTblDataSet', array($parameters));
    }

    /**
     * Executes EXE custom button on local machine.
     *
     * @param Execute $parameters
     * @return ExecuteResponse
     */
    public function Execute(Execute $parameters)
    {
      return $this->__soapCall('Execute', array($parameters));
    }

    /**
     * Get custom button ID.
     *
     * @param GetID $parameters
     * @return GetIDResponse
     */
    public function GetID(GetID $parameters)
    {
      return $this->__soapCall('GetID', array($parameters));
    }

    /**
     * Is Custom button exist.
     *
     * @param IsExist $parameters
     * @return IsExistResponse
     */
    public function IsExist(IsExist $parameters)
    {
      return $this->__soapCall('IsExist', array($parameters));
    }

}
