<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_12_2\UndocumentedServices\PermissionsEx_SSP;


/**
 * PermissionEx Web Service.
 */
class PermissionsEx_SSP extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
  'GetPermissionEntry' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_12_2\\UndocumentedServices\\PermissionsEx_SSP\\GetPermissionEntry',
  'PermissionEntity' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_12_2\\UndocumentedServices\\PermissionsEx_SSP\\PermissionEntity',
  'GetPermissionEntryResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_12_2\\UndocumentedServices\\PermissionsEx_SSP\\GetPermissionEntryResponse',
  'SetPermissionEntry' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_12_2\\UndocumentedServices\\PermissionsEx_SSP\\SetPermissionEntry',
  'PermissionEx' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_12_2\\UndocumentedServices\\PermissionsEx_SSP\\PermissionEx',
  'PermissionDetails' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_12_2\\UndocumentedServices\\PermissionsEx_SSP\\PermissionDetails',
  'SetPermissionEntryResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_12_2\\UndocumentedServices\\PermissionsEx_SSP\\SetPermissionEntryResponse',
  'SetPermissionsEntries' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_12_2\\UndocumentedServices\\PermissionsEx_SSP\\SetPermissionsEntries',
  'ArrayOfPermissionEx' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_12_2\\UndocumentedServices\\PermissionsEx_SSP\\ArrayOfPermissionEx',
  'SetPermissionsEntriesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_12_2\\UndocumentedServices\\PermissionsEx_SSP\\SetPermissionsEntriesResponse',
  'RemovePermissionEntry' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_12_2\\UndocumentedServices\\PermissionsEx_SSP\\RemovePermissionEntry',
  'RemovePermissionEntryResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_12_2\\UndocumentedServices\\PermissionsEx_SSP\\RemovePermissionEntryResponse',
  'RemovePermissionsEntries' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_12_2\\UndocumentedServices\\PermissionsEx_SSP\\RemovePermissionsEntries',
  'RemovePermissionsEntriesResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_12_2\\UndocumentedServices\\PermissionsEx_SSP\\RemovePermissionsEntriesResponse',
  'GetPermissions' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_12_2\\UndocumentedServices\\PermissionsEx_SSP\\GetPermissions',
  'GetPermissionsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_12_2\\UndocumentedServices\\PermissionsEx_SSP\\GetPermissionsResponse',
  'GetActorPermissions' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_12_2\\UndocumentedServices\\PermissionsEx_SSP\\GetActorPermissions',
  'GetActorPermissionsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_12_2\\UndocumentedServices\\PermissionsEx_SSP\\GetActorPermissionsResponse',
  'GetResourcePermissions' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_12_2\\UndocumentedServices\\PermissionsEx_SSP\\GetResourcePermissions',
  'GetResourcePermissionsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_12_2\\UndocumentedServices\\PermissionsEx_SSP\\GetResourcePermissionsResponse',
  'SetActorPermissions' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_12_2\\UndocumentedServices\\PermissionsEx_SSP\\SetActorPermissions',
  'ArrayOfString' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_12_2\\UndocumentedServices\\PermissionsEx_SSP\\ArrayOfString',
  'SetActorPermissionsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_12_2\\UndocumentedServices\\PermissionsEx_SSP\\SetActorPermissionsResponse',
  'SetResourcePermissions' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_12_2\\UndocumentedServices\\PermissionsEx_SSP\\SetResourcePermissions',
  'SetResourcePermissionsResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_12_2\\UndocumentedServices\\PermissionsEx_SSP\\SetResourcePermissionsResponse',
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
        $wsdl = 'http://localhost/xmpiewsapi/PermissionsEx_SSP.asmx?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * returns the true if key exists in table
     *
     * @param GetPermissionEntry $parameters
     * @return GetPermissionEntryResponse
     */
    public function GetPermissionEntry(GetPermissionEntry $parameters)
    {
      return $this->__soapCall('GetPermissionEntry', array($parameters));
    }

    /**
     * return true if inserted permission into rulebase.
     *
     * @param SetPermissionEntry $parameters
     * @return SetPermissionEntryResponse
     */
    public function SetPermissionEntry(SetPermissionEntry $parameters)
    {
      return $this->__soapCall('SetPermissionEntry', array($parameters));
    }

    /**
     * return true if inserted permission list into rulebase.
     *
     * @param SetPermissionsEntries $parameters
     * @return SetPermissionsEntriesResponse
     */
    public function SetPermissionsEntries(SetPermissionsEntries $parameters)
    {
      return $this->__soapCall('SetPermissionsEntries', array($parameters));
    }

    /**
     * return true if removed permission from the rulebase.
     *
     * @param RemovePermissionEntry $parameters
     * @return RemovePermissionEntryResponse
     */
    public function RemovePermissionEntry(RemovePermissionEntry $parameters)
    {
      return $this->__soapCall('RemovePermissionEntry', array($parameters));
    }

    /**
     * return true if removed permission list from the rulebase.
     *
     * @param RemovePermissionsEntries $parameters
     * @return RemovePermissionsEntriesResponse
     */
    public function RemovePermissionsEntries(RemovePermissionsEntries $parameters)
    {
      return $this->__soapCall('RemovePermissionsEntries', array($parameters));
    }

    /**
     * return array of permissions for actor on the resource.
     *
     * @param GetPermissions $parameters
     * @return GetPermissionsResponse
     */
    public function GetPermissions(GetPermissions $parameters)
    {
      return $this->__soapCall('GetPermissions', array($parameters));
    }

    /**
     * return array of permissions for the actor on resource type.
     *
     * @param GetActorPermissions $parameters
     * @return GetActorPermissionsResponse
     */
    public function GetActorPermissions(GetActorPermissions $parameters)
    {
      return $this->__soapCall('GetActorPermissions', array($parameters));
    }

    /**
     * return array of permissions of actor type on the resource.
     *
     * @param GetResourcePermissions $parameters
     * @return GetResourcePermissionsResponse
     */
    public function GetResourcePermissions(GetResourcePermissions $parameters)
    {
      return $this->__soapCall('GetResourcePermissions', array($parameters));
    }

    /**
     * return true if manges to remove all permissions for user on resource type and add the resource list to the rulebase.
     *
     * @param SetActorPermissions $parameters
     * @return SetActorPermissionsResponse
     */
    public function SetActorPermissions(SetActorPermissions $parameters)
    {
      return $this->__soapCall('SetActorPermissions', array($parameters));
    }

    /**
     * return true if manges to remove all permissions for user on resource type and add the resource list to the rulebase.
     *
     * @param SetResourcePermissions $parameters
     * @return SetResourcePermissionsResponse
     */
    public function SetResourcePermissions(SetResourcePermissions $parameters)
    {
      return $this->__soapCall('SetResourcePermissions', array($parameters));
    }

}
