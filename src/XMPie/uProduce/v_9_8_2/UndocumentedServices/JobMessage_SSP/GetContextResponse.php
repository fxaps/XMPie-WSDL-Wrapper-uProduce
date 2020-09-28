<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\JobMessage_SSP;

class GetContextResponse
{

    /**
     * @var string $GetContextResult
     */
    protected $GetContextResult = null;

    /**
     * @param string $GetContextResult
     */
    public function __construct($GetContextResult = null)
    {
        $this->GetContextResult = $GetContextResult;
    }

    /**
     * @return string
     */
    public function getGetContextResult()
    {
        return $this->GetContextResult;
    }

    /**
     * @param string $GetContextResult
     * @return GetContextResponse
     */
    public function setGetContextResult($GetContextResult)
    {
        $this->GetContextResult = $GetContextResult;
        return $this;
    }

}
