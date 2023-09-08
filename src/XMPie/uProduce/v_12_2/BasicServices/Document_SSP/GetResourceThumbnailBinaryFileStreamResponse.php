<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_12_2\BasicServices\Document_SSP;

class GetResourceThumbnailBinaryFileStreamResponse
{

    /**
     * @var base64Binary $GetResourceThumbnailBinaryFileStreamResult
     */
    protected $GetResourceThumbnailBinaryFileStreamResult = null;

    /**
     * @param base64Binary $GetResourceThumbnailBinaryFileStreamResult
     */
    public function __construct($GetResourceThumbnailBinaryFileStreamResult = null)
    {
      $this->GetResourceThumbnailBinaryFileStreamResult = $GetResourceThumbnailBinaryFileStreamResult;
    }

    /**
     * @return base64Binary
     */
    public function getGetResourceThumbnailBinaryFileStreamResult()
    {
      return $this->GetResourceThumbnailBinaryFileStreamResult;
    }

    /**
     * @param base64Binary $GetResourceThumbnailBinaryFileStreamResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_2\BasicServices\Document_SSP\GetResourceThumbnailBinaryFileStreamResponse
     */
    public function setGetResourceThumbnailBinaryFileStreamResult($GetResourceThumbnailBinaryFileStreamResult)
    {
      $this->GetResourceThumbnailBinaryFileStreamResult = $GetResourceThumbnailBinaryFileStreamResult;
      return $this;
    }

}
