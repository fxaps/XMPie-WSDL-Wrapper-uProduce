<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_12_2\UndocumentedServices\ProductionQueue_SSP;

class GetAvailableQueuesDataSet
{

    /**
     * @var string $inUsername
     */
    protected $inUsername = null;

    /**
     * @var string $inPassword
     */
    protected $inPassword = null;

    /**
     * @var string $inQueueTypeID
     */
    protected $inQueueTypeID = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inQueueTypeID
     */
    public function __construct($inUsername = null, $inPassword = null, $inQueueTypeID = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inQueueTypeID = $inQueueTypeID;
    }

    /**
     * @return string
     */
    public function getInUsername()
    {
      return $this->inUsername;
    }

    /**
     * @param string $inUsername
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_2\UndocumentedServices\ProductionQueue_SSP\GetAvailableQueuesDataSet
     */
    public function setInUsername($inUsername)
    {
      $this->inUsername = $inUsername;
      return $this;
    }

    /**
     * @return string
     */
    public function getInPassword()
    {
      return $this->inPassword;
    }

    /**
     * @param string $inPassword
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_2\UndocumentedServices\ProductionQueue_SSP\GetAvailableQueuesDataSet
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInQueueTypeID()
    {
      return $this->inQueueTypeID;
    }

    /**
     * @param string $inQueueTypeID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_2\UndocumentedServices\ProductionQueue_SSP\GetAvailableQueuesDataSet
     */
    public function setInQueueTypeID($inQueueTypeID)
    {
      $this->inQueueTypeID = $inQueueTypeID;
      return $this;
    }

}
