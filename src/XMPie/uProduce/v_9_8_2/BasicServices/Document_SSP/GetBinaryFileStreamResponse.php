<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\Document_SSP;

class GetBinaryFileStreamResponse
{

    /**
     * @var base64Binary $GetBinaryFileStreamResult
     */
    protected $GetBinaryFileStreamResult = null;

    /**
     * @param base64Binary $GetBinaryFileStreamResult
     */
    public function __construct($GetBinaryFileStreamResult = null)
    {
      $this->GetBinaryFileStreamResult = $GetBinaryFileStreamResult;
    }

    /**
     * @return base64Binary
     */
    public function getGetBinaryFileStreamResult()
    {
      return $this->GetBinaryFileStreamResult;
    }

    /**
     * @param base64Binary $GetBinaryFileStreamResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\Document_SSP\GetBinaryFileStreamResponse
     */
    public function setGetBinaryFileStreamResult($GetBinaryFileStreamResult)
    {
      $this->GetBinaryFileStreamResult = $GetBinaryFileStreamResult;
      return $this;
    }

}
