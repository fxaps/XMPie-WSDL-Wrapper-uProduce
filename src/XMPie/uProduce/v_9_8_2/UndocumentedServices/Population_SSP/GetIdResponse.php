<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\Population_SSP;

class GetIdResponse
{

    /**
     * @var string $GetIdResult
     */
    protected $GetIdResult = null;

    /**
     * @param string $GetIdResult
     */
    public function __construct($GetIdResult = null)
    {
        $this->GetIdResult = $GetIdResult;
    }

    /**
     * @return string
     */
    public function getGetIdResult()
    {
        return $this->GetIdResult;
    }

    /**
     * @param string $GetIdResult
     * @return GetIdResponse
     */
    public function setGetIdResult($GetIdResult)
    {
        $this->GetIdResult = $GetIdResult;
        return $this;
    }

}
