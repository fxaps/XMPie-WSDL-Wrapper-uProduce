<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_12_2\UndocumentedServices\UpdateDataSource_SSP;

class TransactionStatus
{

    /**
     * @var TransactionType $m_TransactionType
     */
    protected $m_TransactionType = null;

    /**
     * @var TransactionState $m_state
     */
    protected $m_state = null;

    /**
     * @var string $m_elaborateErrorMessage
     */
    protected $m_elaborateErrorMessage = null;

    /**
     * @var int $recipientsDoneSuccessfully
     */
    protected $recipientsDoneSuccessfully = null;

    /**
     * @var int $recipientsFailed
     */
    protected $recipientsFailed = null;

    /**
     * @var string $SucceededRecipientsInfoFile
     */
    protected $SucceededRecipientsInfoFile = null;

    /**
     * @var string $FailedRecipientsInfoFile
     */
    protected $FailedRecipientsInfoFile = null;

    /**
     * @param TransactionType $m_TransactionType
     * @param TransactionState $m_state
     * @param int $recipientsDoneSuccessfully
     * @param int $recipientsFailed
     */
    public function __construct($m_TransactionType = null, $m_state = null, $recipientsDoneSuccessfully = null, $recipientsFailed = null)
    {
      $this->m_TransactionType = $m_TransactionType;
      $this->m_state = $m_state;
      $this->recipientsDoneSuccessfully = $recipientsDoneSuccessfully;
      $this->recipientsFailed = $recipientsFailed;
    }

    /**
     * @return TransactionType
     */
    public function getM_TransactionType()
    {
      return $this->m_TransactionType;
    }

    /**
     * @param TransactionType $m_TransactionType
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_2\UndocumentedServices\UpdateDataSource_SSP\TransactionStatus
     */
    public function setM_TransactionType($m_TransactionType)
    {
      $this->m_TransactionType = $m_TransactionType;
      return $this;
    }

    /**
     * @return TransactionState
     */
    public function getM_state()
    {
      return $this->m_state;
    }

    /**
     * @param TransactionState $m_state
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_2\UndocumentedServices\UpdateDataSource_SSP\TransactionStatus
     */
    public function setM_state($m_state)
    {
      $this->m_state = $m_state;
      return $this;
    }

    /**
     * @return string
     */
    public function getM_elaborateErrorMessage()
    {
      return $this->m_elaborateErrorMessage;
    }

    /**
     * @param string $m_elaborateErrorMessage
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_2\UndocumentedServices\UpdateDataSource_SSP\TransactionStatus
     */
    public function setM_elaborateErrorMessage($m_elaborateErrorMessage)
    {
      $this->m_elaborateErrorMessage = $m_elaborateErrorMessage;
      return $this;
    }

    /**
     * @return int
     */
    public function getRecipientsDoneSuccessfully()
    {
      return $this->recipientsDoneSuccessfully;
    }

    /**
     * @param int $recipientsDoneSuccessfully
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_2\UndocumentedServices\UpdateDataSource_SSP\TransactionStatus
     */
    public function setRecipientsDoneSuccessfully($recipientsDoneSuccessfully)
    {
      $this->recipientsDoneSuccessfully = $recipientsDoneSuccessfully;
      return $this;
    }

    /**
     * @return int
     */
    public function getRecipientsFailed()
    {
      return $this->recipientsFailed;
    }

    /**
     * @param int $recipientsFailed
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_2\UndocumentedServices\UpdateDataSource_SSP\TransactionStatus
     */
    public function setRecipientsFailed($recipientsFailed)
    {
      $this->recipientsFailed = $recipientsFailed;
      return $this;
    }

    /**
     * @return string
     */
    public function getSucceededRecipientsInfoFile()
    {
      return $this->SucceededRecipientsInfoFile;
    }

    /**
     * @param string $SucceededRecipientsInfoFile
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_2\UndocumentedServices\UpdateDataSource_SSP\TransactionStatus
     */
    public function setSucceededRecipientsInfoFile($SucceededRecipientsInfoFile)
    {
      $this->SucceededRecipientsInfoFile = $SucceededRecipientsInfoFile;
      return $this;
    }

    /**
     * @return string
     */
    public function getFailedRecipientsInfoFile()
    {
      return $this->FailedRecipientsInfoFile;
    }

    /**
     * @param string $FailedRecipientsInfoFile
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_2\UndocumentedServices\UpdateDataSource_SSP\TransactionStatus
     */
    public function setFailedRecipientsInfoFile($FailedRecipientsInfoFile)
    {
      $this->FailedRecipientsInfoFile = $FailedRecipientsInfoFile;
      return $this;
    }

}
