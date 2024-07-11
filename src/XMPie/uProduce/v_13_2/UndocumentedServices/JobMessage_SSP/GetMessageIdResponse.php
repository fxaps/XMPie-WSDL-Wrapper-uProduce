<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_13_2\UndocumentedServices\JobMessage_SSP;

class GetMessageIdResponse
{

    /**
     * @var string $GetMessageIdResult
     */
    protected $GetMessageIdResult = null;

    /**
     * @param string $GetMessageIdResult
     */
    public function __construct($GetMessageIdResult = null)
    {
      $this->GetMessageIdResult = $GetMessageIdResult;
    }

    /**
     * @return string
     */
    public function getGetMessageIdResult()
    {
      return $this->GetMessageIdResult;
    }

    /**
     * @param string $GetMessageIdResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_13_2\UndocumentedServices\JobMessage_SSP\GetMessageIdResponse
     */
    public function setGetMessageIdResult($GetMessageIdResult)
    {
      $this->GetMessageIdResult = $GetMessageIdResult;
      return $this;
    }

}
