<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\MessagesUtils_SSP;

class DecodeSeverityResponse
{

    /**
     * @var string $DecodeSeverityResult
     */
    protected $DecodeSeverityResult = null;

    /**
     * @param string $DecodeSeverityResult
     */
    public function __construct($DecodeSeverityResult = null)
    {
        $this->DecodeSeverityResult = $DecodeSeverityResult;
    }

    /**
     * @return string
     */
    public function getDecodeSeverityResult()
    {
        return $this->DecodeSeverityResult;
    }

    /**
     * @param string $DecodeSeverityResult
     * @return DecodeSeverityResponse
     */
    public function setDecodeSeverityResult($DecodeSeverityResult)
    {
        $this->DecodeSeverityResult = $DecodeSeverityResult;
        return $this;
    }

}
