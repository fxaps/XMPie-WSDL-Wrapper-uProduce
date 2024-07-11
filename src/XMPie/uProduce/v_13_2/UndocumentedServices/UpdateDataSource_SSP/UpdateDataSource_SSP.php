<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_13_2\UndocumentedServices\UpdateDataSource_SSP;


/**
 * UpdateDataSource Web Service.
 */
class UpdateDataSource_SSP extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
  'GetTableFieldsForTemplate' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_13_2\\UndocumentedServices\\UpdateDataSource_SSP\\GetTableFieldsForTemplate',
  'GetTableFieldsForTemplateResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_13_2\\UndocumentedServices\\UpdateDataSource_SSP\\GetTableFieldsForTemplateResponse',
  'ArrayOfXMPTblColumn' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_13_2\\UndocumentedServices\\UpdateDataSource_SSP\\ArrayOfXMPTblColumn',
  'XMPTblColumn' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_13_2\\UndocumentedServices\\UpdateDataSource_SSP\\XMPTblColumn',
  'GetUploadedFileTablesSchema' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_13_2\\UndocumentedServices\\UpdateDataSource_SSP\\GetUploadedFileTablesSchema',
  'GetUploadedFileTablesSchemaResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_13_2\\UndocumentedServices\\UpdateDataSource_SSP\\GetUploadedFileTablesSchemaResponse',
  'XMPTblDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_13_2\\UndocumentedServices\\UpdateDataSource_SSP\\XMPTblDataSet',
  'ArrayOfXMPTbl' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_13_2\\UndocumentedServices\\UpdateDataSource_SSP\\ArrayOfXMPTbl',
  'XMPTbl' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_13_2\\UndocumentedServices\\UpdateDataSource_SSP\\XMPTbl',
  'ArrayOfXMPTblRow' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_13_2\\UndocumentedServices\\UpdateDataSource_SSP\\ArrayOfXMPTblRow',
  'XMPTblRow' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_13_2\\UndocumentedServices\\UpdateDataSource_SSP\\XMPTblRow',
  'ArrayOfXMPRowField' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_13_2\\UndocumentedServices\\UpdateDataSource_SSP\\ArrayOfXMPRowField',
  'XMPRowField' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_13_2\\UndocumentedServices\\UpdateDataSource_SSP\\XMPRowField',
  'GetTablesMatchToRecipientTable' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_13_2\\UndocumentedServices\\UpdateDataSource_SSP\\GetTablesMatchToRecipientTable',
  'GetTablesMatchToRecipientTableResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_13_2\\UndocumentedServices\\UpdateDataSource_SSP\\GetTablesMatchToRecipientTableResponse',
  'ArrayOfXMPTblMatching' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_13_2\\UndocumentedServices\\UpdateDataSource_SSP\\ArrayOfXMPTblMatching',
  'XMPTblMatching' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_13_2\\UndocumentedServices\\UpdateDataSource_SSP\\XMPTblMatching',
  'Start' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_13_2\\UndocumentedServices\\UpdateDataSource_SSP\\Start',
  'UploadedFieldMappings' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_13_2\\UndocumentedServices\\UpdateDataSource_SSP\\UploadedFieldMappings',
  'ArrayOfUploadedFieldMappingInfo' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_13_2\\UndocumentedServices\\UpdateDataSource_SSP\\ArrayOfUploadedFieldMappingInfo',
  'UploadedFieldMappingInfo' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_13_2\\UndocumentedServices\\UpdateDataSource_SSP\\UploadedFieldMappingInfo',
  'StartResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_13_2\\UndocumentedServices\\UpdateDataSource_SSP\\StartResponse',
  'StatusStructure' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_13_2\\UndocumentedServices\\UpdateDataSource_SSP\\StatusStructure',
  'TransactionStatus' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_13_2\\UndocumentedServices\\UpdateDataSource_SSP\\TransactionStatus',
  'GetStatus' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_13_2\\UndocumentedServices\\UpdateDataSource_SSP\\GetStatus',
  'GetStatusResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_13_2\\UndocumentedServices\\UpdateDataSource_SSP\\GetStatusResponse',
  'Cancel' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_13_2\\UndocumentedServices\\UpdateDataSource_SSP\\Cancel',
  'CancelResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_13_2\\UndocumentedServices\\UpdateDataSource_SSP\\CancelResponse',
  'Commit' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_13_2\\UndocumentedServices\\UpdateDataSource_SSP\\Commit',
  'CommitResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_13_2\\UndocumentedServices\\UpdateDataSource_SSP\\CommitResponse',
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
        $wsdl = 'http://localhost/xmpiewsapi/UpdateDataSource_SSP.asmx?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * Get Recipient Tables Schema for Template.
     *
     * @param GetTableFieldsForTemplate $parameters
     * @return GetTableFieldsForTemplateResponse
     */
    public function GetTableFieldsForTemplate(GetTableFieldsForTemplate $parameters)
    {
      return $this->__soapCall('GetTableFieldsForTemplate', array($parameters));
    }

    /**
     * Test DataSource Connectivity.
     *
     * @param GetUploadedFileTablesSchema $parameters
     * @return GetUploadedFileTablesSchemaResponse
     */
    public function GetUploadedFileTablesSchema(GetUploadedFileTablesSchema $parameters)
    {
      return $this->__soapCall('GetUploadedFileTablesSchema', array($parameters));
    }

    /**
     * Get Matching of Uploaded file Tables Schema to Recipient Table.
     *
     * @param GetTablesMatchToRecipientTable $parameters
     * @return GetTablesMatchToRecipientTableResponse
     */
    public function GetTablesMatchToRecipientTable(GetTablesMatchToRecipientTable $parameters)
    {
      return $this->__soapCall('GetTablesMatchToRecipientTable', array($parameters));
    }

    /**
     * Start the update data source transaction.
     *
     * @param Start $parameters
     * @return StartResponse
     */
    public function Start(Start $parameters)
    {
      return $this->__soapCall('Start', array($parameters));
    }

    /**
     * Gets status of update data source transaction.
     *
     * @param GetStatus $parameters
     * @return GetStatusResponse
     */
    public function GetStatus(GetStatus $parameters)
    {
      return $this->__soapCall('GetStatus', array($parameters));
    }

    /**
     * Cancels update data source transaction.
     *
     * @param Cancel $parameters
     * @return CancelResponse
     */
    public function Cancel(Cancel $parameters)
    {
      return $this->__soapCall('Cancel', array($parameters));
    }

    /**
     * Commits update data source transaction.
     *
     * @param Commit $parameters
     * @return CommitResponse
     */
    public function Commit(Commit $parameters)
    {
      return $this->__soapCall('Commit', array($parameters));
    }

}
