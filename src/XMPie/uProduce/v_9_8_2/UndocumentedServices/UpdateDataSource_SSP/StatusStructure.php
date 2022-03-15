<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\UpdateDataSource_SSP;

class StatusStructure
{

    /**
     * @var string $m_TransactionId
     */
    protected $m_TransactionId = null;

    /**
     * @var boolean $m_succeeded
     */
    protected $m_succeeded = null;

    /**
     * @var string $m_ErrorMessage
     */
    protected $m_ErrorMessage = null;

    /**
     * @var TransactionStatus $m_status
     */
    protected $m_status = null;

    /**
     * @param boolean $m_succeeded
     * @param TransactionStatus $m_status
     */
    public function __construct($m_succeeded = null, $m_status = null)
    {
      $this->m_succeeded = $m_succeeded;
      $this->m_status = $m_status;
    }

    /**
     * @return string
     */
    public function getM_TransactionId()
    {
      return $this->m_TransactionId;
    }

    /**
     * @param string $m_TransactionId
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\UpdateDataSource_SSP\StatusStructure
     */
    public function setM_TransactionId($m_TransactionId)
    {
      $this->m_TransactionId = $m_TransactionId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getM_succeeded()
    {
      return $this->m_succeeded;
    }

    /**
     * @param boolean $m_succeeded
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\UpdateDataSource_SSP\StatusStructure
     */
    public function setM_succeeded($m_succeeded)
    {
      $this->m_succeeded = $m_succeeded;
      return $this;
    }

    /**
     * @return string
     */
    public function getM_ErrorMessage()
    {
      return $this->m_ErrorMessage;
    }

    /**
     * @param string $m_ErrorMessage
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\UpdateDataSource_SSP\StatusStructure
     */
    public function setM_ErrorMessage($m_ErrorMessage)
    {
      $this->m_ErrorMessage = $m_ErrorMessage;
      return $this;
    }

    /**
     * @return TransactionStatus
     */
    public function getM_status()
    {
      return $this->m_status;
    }

    /**
     * @param TransactionStatus $m_status
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\UpdateDataSource_SSP\StatusStructure
     */
    public function setM_status($m_status)
    {
      $this->m_status = $m_status;
      return $this;
    }

}
