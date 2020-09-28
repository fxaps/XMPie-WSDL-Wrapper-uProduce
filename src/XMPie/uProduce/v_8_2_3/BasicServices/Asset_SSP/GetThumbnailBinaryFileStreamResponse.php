<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_8_2_3\BasicServices\Asset_SSP;

class GetThumbnailBinaryFileStreamResponse
{

    /**
     * @var base64Binary $GetThumbnailBinaryFileStreamResult
     */
    protected $GetThumbnailBinaryFileStreamResult = null;

    /**
     * @param base64Binary $GetThumbnailBinaryFileStreamResult
     */
    public function __construct($GetThumbnailBinaryFileStreamResult = null)
    {
      $this->GetThumbnailBinaryFileStreamResult = $GetThumbnailBinaryFileStreamResult;
    }

    /**
     * @return base64Binary
     */
    public function getGetThumbnailBinaryFileStreamResult()
    {
      return $this->GetThumbnailBinaryFileStreamResult;
    }

    /**
     * @param base64Binary $GetThumbnailBinaryFileStreamResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_8_2_3\BasicServices\Asset_SSP\GetThumbnailBinaryFileStreamResponse
     */
    public function setGetThumbnailBinaryFileStreamResult($GetThumbnailBinaryFileStreamResult)
    {
      $this->GetThumbnailBinaryFileStreamResult = $GetThumbnailBinaryFileStreamResult;
      return $this;
    }

}
