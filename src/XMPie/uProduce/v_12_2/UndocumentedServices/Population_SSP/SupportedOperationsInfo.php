<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_12_2\UndocumentedServices\Population_SSP;

class SupportedOperationsInfo
{

    /**
     * @var boolean $m_GetAllRecipientsSupported
     */
    protected $m_GetAllRecipientsSupported = null;

    /**
     * @var boolean $m_GetOneRecipientSupported
     */
    protected $m_GetOneRecipientSupported = null;

    /**
     * @var boolean $m_InsertRecipientSupported
     */
    protected $m_InsertRecipientSupported = null;

    /**
     * @var boolean $m_UpdateRecipientSupported
     */
    protected $m_UpdateRecipientSupported = null;

    /**
     * @var boolean $m_DeleteRecipientSupported
     */
    protected $m_DeleteRecipientSupported = null;

    /**
     * @var boolean $m_ReadyForWeb
     */
    protected $m_ReadyForWeb = null;

    /**
     * @param boolean $m_GetAllRecipientsSupported
     * @param boolean $m_GetOneRecipientSupported
     * @param boolean $m_InsertRecipientSupported
     * @param boolean $m_UpdateRecipientSupported
     * @param boolean $m_DeleteRecipientSupported
     * @param boolean $m_ReadyForWeb
     */
    public function __construct($m_GetAllRecipientsSupported = null, $m_GetOneRecipientSupported = null, $m_InsertRecipientSupported = null, $m_UpdateRecipientSupported = null, $m_DeleteRecipientSupported = null, $m_ReadyForWeb = null)
    {
      $this->m_GetAllRecipientsSupported = $m_GetAllRecipientsSupported;
      $this->m_GetOneRecipientSupported = $m_GetOneRecipientSupported;
      $this->m_InsertRecipientSupported = $m_InsertRecipientSupported;
      $this->m_UpdateRecipientSupported = $m_UpdateRecipientSupported;
      $this->m_DeleteRecipientSupported = $m_DeleteRecipientSupported;
      $this->m_ReadyForWeb = $m_ReadyForWeb;
    }

    /**
     * @return boolean
     */
    public function getM_GetAllRecipientsSupported()
    {
      return $this->m_GetAllRecipientsSupported;
    }

    /**
     * @param boolean $m_GetAllRecipientsSupported
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_2\UndocumentedServices\Population_SSP\SupportedOperationsInfo
     */
    public function setM_GetAllRecipientsSupported($m_GetAllRecipientsSupported)
    {
      $this->m_GetAllRecipientsSupported = $m_GetAllRecipientsSupported;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getM_GetOneRecipientSupported()
    {
      return $this->m_GetOneRecipientSupported;
    }

    /**
     * @param boolean $m_GetOneRecipientSupported
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_2\UndocumentedServices\Population_SSP\SupportedOperationsInfo
     */
    public function setM_GetOneRecipientSupported($m_GetOneRecipientSupported)
    {
      $this->m_GetOneRecipientSupported = $m_GetOneRecipientSupported;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getM_InsertRecipientSupported()
    {
      return $this->m_InsertRecipientSupported;
    }

    /**
     * @param boolean $m_InsertRecipientSupported
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_2\UndocumentedServices\Population_SSP\SupportedOperationsInfo
     */
    public function setM_InsertRecipientSupported($m_InsertRecipientSupported)
    {
      $this->m_InsertRecipientSupported = $m_InsertRecipientSupported;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getM_UpdateRecipientSupported()
    {
      return $this->m_UpdateRecipientSupported;
    }

    /**
     * @param boolean $m_UpdateRecipientSupported
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_2\UndocumentedServices\Population_SSP\SupportedOperationsInfo
     */
    public function setM_UpdateRecipientSupported($m_UpdateRecipientSupported)
    {
      $this->m_UpdateRecipientSupported = $m_UpdateRecipientSupported;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getM_DeleteRecipientSupported()
    {
      return $this->m_DeleteRecipientSupported;
    }

    /**
     * @param boolean $m_DeleteRecipientSupported
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_2\UndocumentedServices\Population_SSP\SupportedOperationsInfo
     */
    public function setM_DeleteRecipientSupported($m_DeleteRecipientSupported)
    {
      $this->m_DeleteRecipientSupported = $m_DeleteRecipientSupported;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getM_ReadyForWeb()
    {
      return $this->m_ReadyForWeb;
    }

    /**
     * @param boolean $m_ReadyForWeb
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_2\UndocumentedServices\Population_SSP\SupportedOperationsInfo
     */
    public function setM_ReadyForWeb($m_ReadyForWeb)
    {
      $this->m_ReadyForWeb = $m_ReadyForWeb;
      return $this;
    }

}
