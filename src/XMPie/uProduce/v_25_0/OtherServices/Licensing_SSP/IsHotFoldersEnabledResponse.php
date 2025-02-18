<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_25_0\OtherServices\Licensing_SSP;

class IsHotFoldersEnabledResponse
{

    /**
     * @var boolean $IsHotFoldersEnabledResult
     */
    protected $IsHotFoldersEnabledResult = null;

    /**
     * @param boolean $IsHotFoldersEnabledResult
     */
    public function __construct($IsHotFoldersEnabledResult = null)
    {
      $this->IsHotFoldersEnabledResult = $IsHotFoldersEnabledResult;
    }

    /**
     * @return boolean
     */
    public function getIsHotFoldersEnabledResult()
    {
      return $this->IsHotFoldersEnabledResult;
    }

    /**
     * @param boolean $IsHotFoldersEnabledResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\OtherServices\Licensing_SSP\IsHotFoldersEnabledResponse
     */
    public function setIsHotFoldersEnabledResult($IsHotFoldersEnabledResult)
    {
      $this->IsHotFoldersEnabledResult = $IsHotFoldersEnabledResult;
      return $this;
    }

}
