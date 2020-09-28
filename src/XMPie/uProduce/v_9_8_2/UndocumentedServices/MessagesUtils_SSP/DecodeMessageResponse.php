<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\MessagesUtils_SSP;

class DecodeMessageResponse
{

    /**
     * @var string $DecodeMessageResult
     */
    protected $DecodeMessageResult = null;

    /**
     * @param string $DecodeMessageResult
     */
    public function __construct($DecodeMessageResult = null)
    {
        $this->DecodeMessageResult = $DecodeMessageResult;
    }

    /**
     * @return string
     */
    public function getDecodeMessageResult()
    {
        return $this->DecodeMessageResult;
    }

    /**
     * @param string $DecodeMessageResult
     * @return DecodeMessageResponse
     */
    public function setDecodeMessageResult($DecodeMessageResult)
    {
        $this->DecodeMessageResult = $DecodeMessageResult;
        return $this;
    }

}
