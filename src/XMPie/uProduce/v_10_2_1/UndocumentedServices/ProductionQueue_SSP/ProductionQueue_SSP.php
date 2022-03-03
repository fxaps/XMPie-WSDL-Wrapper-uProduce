<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\ProductionQueue_SSP;


/**
 * ProductionQueue Web Service.
 */
class ProductionQueue_SSP extends \SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
  'GetUserQueue' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_10_2_1\\UndocumentedServices\\ProductionQueue_SSP\\GetUserQueue',
  'GetUserQueueResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_10_2_1\\UndocumentedServices\\ProductionQueue_SSP\\GetUserQueueResponse',
  'GetUserQueueName' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_10_2_1\\UndocumentedServices\\ProductionQueue_SSP\\GetUserQueueName',
  'GetUserQueueNameResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_10_2_1\\UndocumentedServices\\ProductionQueue_SSP\\GetUserQueueNameResponse',
  'SetUserQueue' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_10_2_1\\UndocumentedServices\\ProductionQueue_SSP\\SetUserQueue',
  'SetUserQueueResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_10_2_1\\UndocumentedServices\\ProductionQueue_SSP\\SetUserQueueResponse',
  'GetAvailableQueuesDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_10_2_1\\UndocumentedServices\\ProductionQueue_SSP\\GetAvailableQueuesDataSet',
  'GetAvailableQueuesDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_10_2_1\\UndocumentedServices\\ProductionQueue_SSP\\GetAvailableQueuesDataSetResponse',
  'GetAvailableQueuesDataSetResult' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_10_2_1\\UndocumentedServices\\ProductionQueue_SSP\\GetAvailableQueuesDataSetResult',
  'GetAvailableQueuesXMPTblDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_10_2_1\\UndocumentedServices\\ProductionQueue_SSP\\GetAvailableQueuesXMPTblDataSet',
  'GetAvailableQueuesXMPTblDataSetResponse' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_10_2_1\\UndocumentedServices\\ProductionQueue_SSP\\GetAvailableQueuesXMPTblDataSetResponse',
  'XMPTblDataSet' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_10_2_1\\UndocumentedServices\\ProductionQueue_SSP\\XMPTblDataSet',
  'ArrayOfXMPTbl' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_10_2_1\\UndocumentedServices\\ProductionQueue_SSP\\ArrayOfXMPTbl',
  'XMPTbl' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_10_2_1\\UndocumentedServices\\ProductionQueue_SSP\\XMPTbl',
  'ArrayOfXMPTblColumn' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_10_2_1\\UndocumentedServices\\ProductionQueue_SSP\\ArrayOfXMPTblColumn',
  'XMPTblColumn' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_10_2_1\\UndocumentedServices\\ProductionQueue_SSP\\XMPTblColumn',
  'ArrayOfXMPTblRow' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_10_2_1\\UndocumentedServices\\ProductionQueue_SSP\\ArrayOfXMPTblRow',
  'XMPTblRow' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_10_2_1\\UndocumentedServices\\ProductionQueue_SSP\\XMPTblRow',
  'ArrayOfXMPRowField' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_10_2_1\\UndocumentedServices\\ProductionQueue_SSP\\ArrayOfXMPRowField',
  'XMPRowField' => 'XMPieWsdlClient\\XMPie\\uProduce\\v_10_2_1\\UndocumentedServices\\ProductionQueue_SSP\\XMPRowField',
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
        $wsdl = 'http://localhost/xmpiewsapi/ProductionQueue_SSP.asmx?wsdl';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * Get user queue ID.
     *
     * @param GetUserQueue $parameters
     * @return GetUserQueueResponse
     */
    public function GetUserQueue(GetUserQueue $parameters)
    {
      return $this->__soapCall('GetUserQueue', array($parameters));
    }

    /**
     * Get user queue name.
     *
     * @param GetUserQueueName $parameters
     * @return GetUserQueueNameResponse
     */
    public function GetUserQueueName(GetUserQueueName $parameters)
    {
      return $this->__soapCall('GetUserQueueName', array($parameters));
    }

    /**
     * Set user queue ID.
     *
     * @param SetUserQueue $parameters
     * @return SetUserQueueResponse
     */
    public function SetUserQueue(SetUserQueue $parameters)
    {
      return $this->__soapCall('SetUserQueue', array($parameters));
    }

    /**
     * Get user queue ID.
     *
     * @param GetAvailableQueuesDataSet $parameters
     * @return GetAvailableQueuesDataSetResponse
     */
    public function GetAvailableQueuesDataSet(GetAvailableQueuesDataSet $parameters)
    {
      return $this->__soapCall('GetAvailableQueuesDataSet', array($parameters));
    }

    /**
     * Get user queue ID.
     *
     * @param GetAvailableQueuesXMPTblDataSet $parameters
     * @return GetAvailableQueuesXMPTblDataSetResponse
     */
    public function GetAvailableQueuesXMPTblDataSet(GetAvailableQueuesXMPTblDataSet $parameters)
    {
      return $this->__soapCall('GetAvailableQueuesXMPTblDataSet', array($parameters));
    }

}
