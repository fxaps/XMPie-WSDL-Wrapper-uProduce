<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_11_2_2\UndocumentedServices\EmailServices_SSP;

class SendMail
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
     * @var string $mailServer_Addr
     */
    protected $mailServer_Addr = null;

    /**
     * @var int $mailServer_Port
     */
    protected $mailServer_Port = null;

    /**
     * @var string $recipientKey
     */
    protected $recipientKey = null;

    /**
     * @var string $accountName
     */
    protected $accountName = null;

    /**
     * @var string $campaignName
     */
    protected $campaignName = null;

    /**
     * @var string $ICP_Port
     */
    protected $ICP_Port = null;

    /**
     * @var string $ICP_User
     */
    protected $ICP_User = null;

    /**
     * @var string $ICP_Password
     */
    protected $ICP_Password = null;

    /**
     * @var string $subject
     */
    protected $subject = null;

    /**
     * @var string $toAddr
     */
    protected $toAddr = null;

    /**
     * @var string $toDisplayName
     */
    protected $toDisplayName = null;

    /**
     * @var string $fromAddr
     */
    protected $fromAddr = null;

    /**
     * @var string $fromDisplayName
     */
    protected $fromDisplayName = null;

    /**
     * @var string $body
     */
    protected $body = null;

    /**
     * @var string $bodyFormat
     */
    protected $bodyFormat = null;

    /**
     * @var boolean $isBodyURI
     */
    protected $isBodyURI = null;

    /**
     * @var boolean $createAlternative
     */
    protected $createAlternative = null;

    /**
     * @var boolean $embedImages
     */
    protected $embedImages = null;

    /**
     * @var string $isSkipRec
     */
    protected $isSkipRec = null;

    /**
     * @var string $xslFormatter
     */
    protected $xslFormatter = null;

    /**
     * @var string $base
     */
    protected $base = null;

    /**
     * @var string $mailCharset
     */
    protected $mailCharset = null;

    /**
     * @var string $bodyURICharset
     */
    protected $bodyURICharset = null;

    /**
     * @var string $URIProxy
     */
    protected $URIProxy = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $mailServer_Addr
     * @param int $mailServer_Port
     * @param string $recipientKey
     * @param string $accountName
     * @param string $campaignName
     * @param string $ICP_Port
     * @param string $ICP_User
     * @param string $ICP_Password
     * @param string $subject
     * @param string $toAddr
     * @param string $toDisplayName
     * @param string $fromAddr
     * @param string $fromDisplayName
     * @param string $body
     * @param string $bodyFormat
     * @param boolean $isBodyURI
     * @param boolean $createAlternative
     * @param boolean $embedImages
     * @param string $isSkipRec
     * @param string $xslFormatter
     * @param string $base
     * @param string $mailCharset
     * @param string $bodyURICharset
     * @param string $URIProxy
     */
    public function __construct($inUsername = null, $inPassword = null, $mailServer_Addr = null, $mailServer_Port = null, $recipientKey = null, $accountName = null, $campaignName = null, $ICP_Port = null, $ICP_User = null, $ICP_Password = null, $subject = null, $toAddr = null, $toDisplayName = null, $fromAddr = null, $fromDisplayName = null, $body = null, $bodyFormat = null, $isBodyURI = null, $createAlternative = null, $embedImages = null, $isSkipRec = null, $xslFormatter = null, $base = null, $mailCharset = null, $bodyURICharset = null, $URIProxy = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->mailServer_Addr = $mailServer_Addr;
      $this->mailServer_Port = $mailServer_Port;
      $this->recipientKey = $recipientKey;
      $this->accountName = $accountName;
      $this->campaignName = $campaignName;
      $this->ICP_Port = $ICP_Port;
      $this->ICP_User = $ICP_User;
      $this->ICP_Password = $ICP_Password;
      $this->subject = $subject;
      $this->toAddr = $toAddr;
      $this->toDisplayName = $toDisplayName;
      $this->fromAddr = $fromAddr;
      $this->fromDisplayName = $fromDisplayName;
      $this->body = $body;
      $this->bodyFormat = $bodyFormat;
      $this->isBodyURI = $isBodyURI;
      $this->createAlternative = $createAlternative;
      $this->embedImages = $embedImages;
      $this->isSkipRec = $isSkipRec;
      $this->xslFormatter = $xslFormatter;
      $this->base = $base;
      $this->mailCharset = $mailCharset;
      $this->bodyURICharset = $bodyURICharset;
      $this->URIProxy = $URIProxy;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_2_2\UndocumentedServices\EmailServices_SSP\SendMail
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_2_2\UndocumentedServices\EmailServices_SSP\SendMail
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getMailServer_Addr()
    {
      return $this->mailServer_Addr;
    }

    /**
     * @param string $mailServer_Addr
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_2_2\UndocumentedServices\EmailServices_SSP\SendMail
     */
    public function setMailServer_Addr($mailServer_Addr)
    {
      $this->mailServer_Addr = $mailServer_Addr;
      return $this;
    }

    /**
     * @return int
     */
    public function getMailServer_Port()
    {
      return $this->mailServer_Port;
    }

    /**
     * @param int $mailServer_Port
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_2_2\UndocumentedServices\EmailServices_SSP\SendMail
     */
    public function setMailServer_Port($mailServer_Port)
    {
      $this->mailServer_Port = $mailServer_Port;
      return $this;
    }

    /**
     * @return string
     */
    public function getRecipientKey()
    {
      return $this->recipientKey;
    }

    /**
     * @param string $recipientKey
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_2_2\UndocumentedServices\EmailServices_SSP\SendMail
     */
    public function setRecipientKey($recipientKey)
    {
      $this->recipientKey = $recipientKey;
      return $this;
    }

    /**
     * @return string
     */
    public function getAccountName()
    {
      return $this->accountName;
    }

    /**
     * @param string $accountName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_2_2\UndocumentedServices\EmailServices_SSP\SendMail
     */
    public function setAccountName($accountName)
    {
      $this->accountName = $accountName;
      return $this;
    }

    /**
     * @return string
     */
    public function getCampaignName()
    {
      return $this->campaignName;
    }

    /**
     * @param string $campaignName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_2_2\UndocumentedServices\EmailServices_SSP\SendMail
     */
    public function setCampaignName($campaignName)
    {
      $this->campaignName = $campaignName;
      return $this;
    }

    /**
     * @return string
     */
    public function getICP_Port()
    {
      return $this->ICP_Port;
    }

    /**
     * @param string $ICP_Port
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_2_2\UndocumentedServices\EmailServices_SSP\SendMail
     */
    public function setICP_Port($ICP_Port)
    {
      $this->ICP_Port = $ICP_Port;
      return $this;
    }

    /**
     * @return string
     */
    public function getICP_User()
    {
      return $this->ICP_User;
    }

    /**
     * @param string $ICP_User
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_2_2\UndocumentedServices\EmailServices_SSP\SendMail
     */
    public function setICP_User($ICP_User)
    {
      $this->ICP_User = $ICP_User;
      return $this;
    }

    /**
     * @return string
     */
    public function getICP_Password()
    {
      return $this->ICP_Password;
    }

    /**
     * @param string $ICP_Password
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_2_2\UndocumentedServices\EmailServices_SSP\SendMail
     */
    public function setICP_Password($ICP_Password)
    {
      $this->ICP_Password = $ICP_Password;
      return $this;
    }

    /**
     * @return string
     */
    public function getSubject()
    {
      return $this->subject;
    }

    /**
     * @param string $subject
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_2_2\UndocumentedServices\EmailServices_SSP\SendMail
     */
    public function setSubject($subject)
    {
      $this->subject = $subject;
      return $this;
    }

    /**
     * @return string
     */
    public function getToAddr()
    {
      return $this->toAddr;
    }

    /**
     * @param string $toAddr
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_2_2\UndocumentedServices\EmailServices_SSP\SendMail
     */
    public function setToAddr($toAddr)
    {
      $this->toAddr = $toAddr;
      return $this;
    }

    /**
     * @return string
     */
    public function getToDisplayName()
    {
      return $this->toDisplayName;
    }

    /**
     * @param string $toDisplayName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_2_2\UndocumentedServices\EmailServices_SSP\SendMail
     */
    public function setToDisplayName($toDisplayName)
    {
      $this->toDisplayName = $toDisplayName;
      return $this;
    }

    /**
     * @return string
     */
    public function getFromAddr()
    {
      return $this->fromAddr;
    }

    /**
     * @param string $fromAddr
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_2_2\UndocumentedServices\EmailServices_SSP\SendMail
     */
    public function setFromAddr($fromAddr)
    {
      $this->fromAddr = $fromAddr;
      return $this;
    }

    /**
     * @return string
     */
    public function getFromDisplayName()
    {
      return $this->fromDisplayName;
    }

    /**
     * @param string $fromDisplayName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_2_2\UndocumentedServices\EmailServices_SSP\SendMail
     */
    public function setFromDisplayName($fromDisplayName)
    {
      $this->fromDisplayName = $fromDisplayName;
      return $this;
    }

    /**
     * @return string
     */
    public function getBody()
    {
      return $this->body;
    }

    /**
     * @param string $body
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_2_2\UndocumentedServices\EmailServices_SSP\SendMail
     */
    public function setBody($body)
    {
      $this->body = $body;
      return $this;
    }

    /**
     * @return string
     */
    public function getBodyFormat()
    {
      return $this->bodyFormat;
    }

    /**
     * @param string $bodyFormat
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_2_2\UndocumentedServices\EmailServices_SSP\SendMail
     */
    public function setBodyFormat($bodyFormat)
    {
      $this->bodyFormat = $bodyFormat;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsBodyURI()
    {
      return $this->isBodyURI;
    }

    /**
     * @param boolean $isBodyURI
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_2_2\UndocumentedServices\EmailServices_SSP\SendMail
     */
    public function setIsBodyURI($isBodyURI)
    {
      $this->isBodyURI = $isBodyURI;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCreateAlternative()
    {
      return $this->createAlternative;
    }

    /**
     * @param boolean $createAlternative
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_2_2\UndocumentedServices\EmailServices_SSP\SendMail
     */
    public function setCreateAlternative($createAlternative)
    {
      $this->createAlternative = $createAlternative;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEmbedImages()
    {
      return $this->embedImages;
    }

    /**
     * @param boolean $embedImages
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_2_2\UndocumentedServices\EmailServices_SSP\SendMail
     */
    public function setEmbedImages($embedImages)
    {
      $this->embedImages = $embedImages;
      return $this;
    }

    /**
     * @return string
     */
    public function getIsSkipRec()
    {
      return $this->isSkipRec;
    }

    /**
     * @param string $isSkipRec
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_2_2\UndocumentedServices\EmailServices_SSP\SendMail
     */
    public function setIsSkipRec($isSkipRec)
    {
      $this->isSkipRec = $isSkipRec;
      return $this;
    }

    /**
     * @return string
     */
    public function getXslFormatter()
    {
      return $this->xslFormatter;
    }

    /**
     * @param string $xslFormatter
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_2_2\UndocumentedServices\EmailServices_SSP\SendMail
     */
    public function setXslFormatter($xslFormatter)
    {
      $this->xslFormatter = $xslFormatter;
      return $this;
    }

    /**
     * @return string
     */
    public function getBase()
    {
      return $this->base;
    }

    /**
     * @param string $base
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_2_2\UndocumentedServices\EmailServices_SSP\SendMail
     */
    public function setBase($base)
    {
      $this->base = $base;
      return $this;
    }

    /**
     * @return string
     */
    public function getMailCharset()
    {
      return $this->mailCharset;
    }

    /**
     * @param string $mailCharset
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_2_2\UndocumentedServices\EmailServices_SSP\SendMail
     */
    public function setMailCharset($mailCharset)
    {
      $this->mailCharset = $mailCharset;
      return $this;
    }

    /**
     * @return string
     */
    public function getBodyURICharset()
    {
      return $this->bodyURICharset;
    }

    /**
     * @param string $bodyURICharset
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_2_2\UndocumentedServices\EmailServices_SSP\SendMail
     */
    public function setBodyURICharset($bodyURICharset)
    {
      $this->bodyURICharset = $bodyURICharset;
      return $this;
    }

    /**
     * @return string
     */
    public function getURIProxy()
    {
      return $this->URIProxy;
    }

    /**
     * @param string $URIProxy
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_2_2\UndocumentedServices\EmailServices_SSP\SendMail
     */
    public function setURIProxy($URIProxy)
    {
      $this->URIProxy = $URIProxy;
      return $this;
    }

}
