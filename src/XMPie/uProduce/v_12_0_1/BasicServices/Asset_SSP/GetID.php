<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_12_0_1\BasicServices\Asset_SSP;

class GetID
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
     * @var string $inAssetSourceID
     */
    protected $inAssetSourceID = null;

    /**
     * @var string $inAssetFileName
     */
    protected $inAssetFileName = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inAssetSourceID
     * @param string $inAssetFileName
     */
    public function __construct($inUsername = null, $inPassword = null, $inAssetSourceID = null, $inAssetFileName = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inAssetSourceID = $inAssetSourceID;
      $this->inAssetFileName = $inAssetFileName;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_0_1\BasicServices\Asset_SSP\GetID
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_0_1\BasicServices\Asset_SSP\GetID
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInAssetSourceID()
    {
      return $this->inAssetSourceID;
    }

    /**
     * @param string $inAssetSourceID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_0_1\BasicServices\Asset_SSP\GetID
     */
    public function setInAssetSourceID($inAssetSourceID)
    {
      $this->inAssetSourceID = $inAssetSourceID;
      return $this;
    }

    /**
     * @return string
     */
    public function getInAssetFileName()
    {
      return $this->inAssetFileName;
    }

    /**
     * @param string $inAssetFileName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_0_1\BasicServices\Asset_SSP\GetID
     */
    public function setInAssetFileName($inAssetFileName)
    {
      $this->inAssetFileName = $inAssetFileName;
      return $this;
    }

}
