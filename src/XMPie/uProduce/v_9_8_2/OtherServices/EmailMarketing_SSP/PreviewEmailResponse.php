<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\OtherServices\EmailMarketing_SSP;

class PreviewEmailResponse
{

    /**
     * @var string $PreviewEmailResult
     */
    protected $PreviewEmailResult = null;

    /**
     * @param string $PreviewEmailResult
     */
    public function __construct($PreviewEmailResult = null)
    {
        $this->PreviewEmailResult = $PreviewEmailResult;
    }

    /**
     * @return string
     */
    public function getPreviewEmailResult()
    {
        return $this->PreviewEmailResult;
    }

    /**
     * @param string $PreviewEmailResult
     * @return PreviewEmailResponse
     */
    public function setPreviewEmailResult($PreviewEmailResult)
    {
        $this->PreviewEmailResult = $PreviewEmailResult;
        return $this;
    }

}
