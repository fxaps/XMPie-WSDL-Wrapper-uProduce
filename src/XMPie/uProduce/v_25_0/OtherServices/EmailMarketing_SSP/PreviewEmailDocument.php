<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_25_0\OtherServices\EmailMarketing_SSP;

class PreviewEmailDocument
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
     * @var string $inAccountName
     */
    protected $inAccountName = null;

    /**
     * @var string $inCampaignName
     */
    protected $inCampaignName = null;

    /**
     * @var string $inICPName
     */
    protected $inICPName = null;

    /**
     * @var string $inDocument
     */
    protected $inDocument = null;

    /**
     * @var boolean $inIsHTML
     */
    protected $inIsHTML = null;

    /**
     * @var string $inRecipientID
     */
    protected $inRecipientID = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inAccountName
     * @param string $inCampaignName
     * @param string $inICPName
     * @param string $inDocument
     * @param boolean $inIsHTML
     * @param string $inRecipientID
     */
    public function __construct($inUsername = null, $inPassword = null, $inAccountName = null, $inCampaignName = null, $inICPName = null, $inDocument = null, $inIsHTML = null, $inRecipientID = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inAccountName = $inAccountName;
      $this->inCampaignName = $inCampaignName;
      $this->inICPName = $inICPName;
      $this->inDocument = $inDocument;
      $this->inIsHTML = $inIsHTML;
      $this->inRecipientID = $inRecipientID;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\OtherServices\EmailMarketing_SSP\PreviewEmailDocument
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\OtherServices\EmailMarketing_SSP\PreviewEmailDocument
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInAccountName()
    {
      return $this->inAccountName;
    }

    /**
     * @param string $inAccountName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\OtherServices\EmailMarketing_SSP\PreviewEmailDocument
     */
    public function setInAccountName($inAccountName)
    {
      $this->inAccountName = $inAccountName;
      return $this;
    }

    /**
     * @return string
     */
    public function getInCampaignName()
    {
      return $this->inCampaignName;
    }

    /**
     * @param string $inCampaignName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\OtherServices\EmailMarketing_SSP\PreviewEmailDocument
     */
    public function setInCampaignName($inCampaignName)
    {
      $this->inCampaignName = $inCampaignName;
      return $this;
    }

    /**
     * @return string
     */
    public function getInICPName()
    {
      return $this->inICPName;
    }

    /**
     * @param string $inICPName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\OtherServices\EmailMarketing_SSP\PreviewEmailDocument
     */
    public function setInICPName($inICPName)
    {
      $this->inICPName = $inICPName;
      return $this;
    }

    /**
     * @return string
     */
    public function getInDocument()
    {
      return $this->inDocument;
    }

    /**
     * @param string $inDocument
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\OtherServices\EmailMarketing_SSP\PreviewEmailDocument
     */
    public function setInDocument($inDocument)
    {
      $this->inDocument = $inDocument;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInIsHTML()
    {
      return $this->inIsHTML;
    }

    /**
     * @param boolean $inIsHTML
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\OtherServices\EmailMarketing_SSP\PreviewEmailDocument
     */
    public function setInIsHTML($inIsHTML)
    {
      $this->inIsHTML = $inIsHTML;
      return $this;
    }

    /**
     * @return string
     */
    public function getInRecipientID()
    {
      return $this->inRecipientID;
    }

    /**
     * @param string $inRecipientID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\OtherServices\EmailMarketing_SSP\PreviewEmailDocument
     */
    public function setInRecipientID($inRecipientID)
    {
      $this->inRecipientID = $inRecipientID;
      return $this;
    }

}
