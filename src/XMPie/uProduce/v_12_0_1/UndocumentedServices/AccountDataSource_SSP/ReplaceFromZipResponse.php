<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_12_0_1\UndocumentedServices\AccountDataSource_SSP;

class ReplaceFromZipResponse
{

    /**
     * @var boolean $ReplaceFromZipResult
     */
    protected $ReplaceFromZipResult = null;

    /**
     * @param boolean $ReplaceFromZipResult
     */
    public function __construct($ReplaceFromZipResult = null)
    {
      $this->ReplaceFromZipResult = $ReplaceFromZipResult;
    }

    /**
     * @return boolean
     */
    public function getReplaceFromZipResult()
    {
      return $this->ReplaceFromZipResult;
    }

    /**
     * @param boolean $ReplaceFromZipResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_0_1\UndocumentedServices\AccountDataSource_SSP\ReplaceFromZipResponse
     */
    public function setReplaceFromZipResult($ReplaceFromZipResult)
    {
      $this->ReplaceFromZipResult = $ReplaceFromZipResult;
      return $this;
    }

}
