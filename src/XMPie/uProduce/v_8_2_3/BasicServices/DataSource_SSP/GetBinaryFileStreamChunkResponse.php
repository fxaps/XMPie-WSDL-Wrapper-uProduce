<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_8_2_3\BasicServices\DataSource_SSP;

class GetBinaryFileStreamChunkResponse
{

    /**
     * @var base64Binary $GetBinaryFileStreamChunkResult
     */
    protected $GetBinaryFileStreamChunkResult = null;

    /**
     * @var int $inoutCount
     */
    protected $inoutCount = null;

    /**
     * @param base64Binary $GetBinaryFileStreamChunkResult
     * @param int $inoutCount
     */
    public function __construct($GetBinaryFileStreamChunkResult = null, $inoutCount = null)
    {
      $this->GetBinaryFileStreamChunkResult = $GetBinaryFileStreamChunkResult;
      $this->inoutCount = $inoutCount;
    }

    /**
     * @return base64Binary
     */
    public function getGetBinaryFileStreamChunkResult()
    {
      return $this->GetBinaryFileStreamChunkResult;
    }

    /**
     * @param base64Binary $GetBinaryFileStreamChunkResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_8_2_3\BasicServices\DataSource_SSP\GetBinaryFileStreamChunkResponse
     */
    public function setGetBinaryFileStreamChunkResult($GetBinaryFileStreamChunkResult)
    {
      $this->GetBinaryFileStreamChunkResult = $GetBinaryFileStreamChunkResult;
      return $this;
    }

    /**
     * @return int
     */
    public function getInoutCount()
    {
      return $this->inoutCount;
    }

    /**
     * @param int $inoutCount
     * @return \XMPieWsdlClient\XMPie\uProduce\v_8_2_3\BasicServices\DataSource_SSP\GetBinaryFileStreamChunkResponse
     */
    public function setInoutCount($inoutCount)
    {
      $this->inoutCount = $inoutCount;
      return $this;
    }

}
