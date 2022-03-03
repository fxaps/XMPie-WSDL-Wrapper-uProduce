<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\MessagesUtils_SSP;

class DecodeContextResponse
{

    /**
     * @var string $DecodeContextResult
     */
    protected $DecodeContextResult = null;

    /**
     * @param string $DecodeContextResult
     */
    public function __construct($DecodeContextResult = null)
    {
      $this->DecodeContextResult = $DecodeContextResult;
    }

    /**
     * @return string
     */
    public function getDecodeContextResult()
    {
      return $this->DecodeContextResult;
    }

    /**
     * @param string $DecodeContextResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\MessagesUtils_SSP\DecodeContextResponse
     */
    public function setDecodeContextResult($DecodeContextResult)
    {
      $this->DecodeContextResult = $DecodeContextResult;
      return $this;
    }

}
