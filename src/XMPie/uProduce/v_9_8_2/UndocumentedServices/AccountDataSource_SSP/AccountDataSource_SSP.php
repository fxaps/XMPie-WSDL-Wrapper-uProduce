<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\AccountDataSource_SSP;


/**
 * DataSource Web Service.
 */
class AccountDataSource_SSP extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
  'CreateNew' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\AccountDataSource_SSP\\CreateNew',
  'ArrayOfProperty' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\AccountDataSource_SSP\\ArrayOfProperty',
  'Property' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\AccountDataSource_SSP\\Property',
  'CreateNewResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\AccountDataSource_SSP\\CreateNewResponse',
  'CreateNewFromZip' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\AccountDataSource_SSP\\CreateNewFromZip',
  'CreateNewFromZipResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\AccountDataSource_SSP\\CreateNewFromZipResponse',
  'Replace' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\AccountDataSource_SSP\\Replace',
  'Connection' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\AccountDataSource_SSP\\Connection',
  'ReplaceResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\AccountDataSource_SSP\\ReplaceResponse',
  'ReplaceFromZip' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\AccountDataSource_SSP\\ReplaceFromZip',
  'ReplaceFromZipResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\AccountDataSource_SSP\\ReplaceFromZipResponse',
  'Delete' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\AccountDataSource_SSP\\Delete',
  'DeleteResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\AccountDataSource_SSP\\DeleteResponse',
  'GetAccount' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\AccountDataSource_SSP\\GetAccount',
  'GetAccountResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\AccountDataSource_SSP\\GetAccountResponse',
  'GetProperty' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\AccountDataSource_SSP\\GetProperty',
  'GetPropertyResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\AccountDataSource_SSP\\GetPropertyResponse',
  'GetProperties' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\AccountDataSource_SSP\\GetProperties',
  'ArrayOfString' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\AccountDataSource_SSP\\ArrayOfString',
  'GetPropertiesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\AccountDataSource_SSP\\GetPropertiesResponse',
  'GetAllProperties' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\AccountDataSource_SSP\\GetAllProperties',
  'GetAllPropertiesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\AccountDataSource_SSP\\GetAllPropertiesResponse',
  'GetDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\AccountDataSource_SSP\\GetDataSet',
  'GetDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\AccountDataSource_SSP\\GetDataSetResponse',
  'GetDataSetResult' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\AccountDataSource_SSP\\GetDataSetResult',
  'GetXMPTblDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\AccountDataSource_SSP\\GetXMPTblDataSet',
  'GetXMPTblDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\AccountDataSource_SSP\\GetXMPTblDataSetResponse',
  'XMPTblDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\AccountDataSource_SSP\\XMPTblDataSet',
  'ArrayOfXMPTbl' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\AccountDataSource_SSP\\ArrayOfXMPTbl',
  'XMPTbl' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\AccountDataSource_SSP\\XMPTbl',
  'ArrayOfXMPTblColumn' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\AccountDataSource_SSP\\ArrayOfXMPTblColumn',
  'XMPTblColumn' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\AccountDataSource_SSP\\XMPTblColumn',
  'ArrayOfXMPTblRow' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\AccountDataSource_SSP\\ArrayOfXMPTblRow',
  'XMPTblRow' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\AccountDataSource_SSP\\XMPTblRow',
  'ArrayOfXMPRowField' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\AccountDataSource_SSP\\ArrayOfXMPRowField',
  'XMPRowField' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\AccountDataSource_SSP\\XMPRowField',
  'SetProperty' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\AccountDataSource_SSP\\SetProperty',
  'SetPropertyResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\AccountDataSource_SSP\\SetPropertyResponse',
  'SetProperties' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\AccountDataSource_SSP\\SetProperties',
  'SetPropertiesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\AccountDataSource_SSP\\SetPropertiesResponse',
  'GetID' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\AccountDataSource_SSP\\GetID',
  'GetIDResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\AccountDataSource_SSP\\GetIDResponse',
  'IsExist' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\AccountDataSource_SSP\\IsExist',
  'IsExistResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_9_8_2\\UndocumentedServices\\AccountDataSource_SSP\\IsExistResponse',
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
        $wsdl = 'http://localhost/xmpiewsapi/AccountDataSource_SSP.asmx?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * Create a new Account level Data Source.
     *
     * @param CreateNew $parameters
     * @return CreateNewResponse
     */
    public function CreateNew(CreateNew $parameters)
    {
      return $this->__soapCall('CreateNew', array($parameters));
    }

    /**
     * Create a new Account level Data Source from zip.
     *
     * @param CreateNewFromZip $parameters
     * @return CreateNewFromZipResponse
     */
    public function CreateNewFromZip(CreateNewFromZip $parameters)
    {
      return $this->__soapCall('CreateNewFromZip', array($parameters));
    }

    /**
     * Replace an Account level Data Source.
     *
     * @param Replace $parameters
     * @return ReplaceResponse
     */
    public function Replace(Replace $parameters)
    {
      return $this->__soapCall('Replace', array($parameters));
    }

    /**
     * Replace an Account level Data Source from zip.
     *
     * @param ReplaceFromZip $parameters
     * @return ReplaceFromZipResponse
     */
    public function ReplaceFromZip(ReplaceFromZip $parameters)
    {
      return $this->__soapCall('ReplaceFromZip', array($parameters));
    }

    /**
     * Delete an Account level Data Source.
     *
     * @param Delete $parameters
     * @return DeleteResponse
     */
    public function Delete(Delete $parameters)
    {
      return $this->__soapCall('Delete', array($parameters));
    }

    /**
     * Gets Account ID for an Account level Data Source.
     *
     * @param GetAccount $parameters
     * @return GetAccountResponse
     */
    public function GetAccount(GetAccount $parameters)
    {
      return $this->__soapCall('GetAccount', array($parameters));
    }

    /**
     * Gets an Account level Data Source property by name.
     *
     * @param GetProperty $parameters
     * @return GetPropertyResponse
     */
    public function GetProperty(GetProperty $parameters)
    {
      return $this->__soapCall('GetProperty', array($parameters));
    }

    /**
     * Gets an Account level Data Source properties.
     *
     * @param GetProperties $parameters
     * @return GetPropertiesResponse
     */
    public function GetProperties(GetProperties $parameters)
    {
      return $this->__soapCall('GetProperties', array($parameters));
    }

    /**
     * Gets all an Account level Data Source properties.
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
     * Sets an Account level Data Source property.
     *
     * @param SetProperty $parameters
     * @return SetPropertyResponse
     */
    public function SetProperty(SetProperty $parameters)
    {
      return $this->__soapCall('SetProperty', array($parameters));
    }

    /**
     * Sets an Account level Data Source properties.
     *
     * @param SetProperties $parameters
     * @return SetPropertiesResponse
     */
    public function SetProperties(SetProperties $parameters)
    {
      return $this->__soapCall('SetProperties', array($parameters));
    }

    /**
     * Gets an Account level Data Source ID.
     *
     * @param GetID $parameters
     * @return GetIDResponse
     */
    public function GetID(GetID $parameters)
    {
      return $this->__soapCall('GetID', array($parameters));
    }

    /**
     * Checks if an Account level Data Source exists.
     *
     * @param IsExist $parameters
     * @return IsExistResponse
     */
    public function IsExist(IsExist $parameters)
    {
      return $this->__soapCall('IsExist', array($parameters));
    }

}
