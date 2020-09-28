<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\Population_SSP;

class GetPortGuidResponse
{

    /**
     * @var string $GetPortGuidResult
     */
    protected $GetPortGuidResult = null;

    /**
     * @param string $GetPortGuidResult
     */
    public function __construct($GetPortGuidResult = null)
    {
        $this->GetPortGuidResult = $GetPortGuidResult;
    }

    /**
     * @return string
     */
    public function getGetPortGuidResult()
    {
        return $this->GetPortGuidResult;
    }

    /**
     * @param string $GetPortGuidResult
     * @return GetPortGuidResponse
     */
    public function setGetPortGuidResult($GetPortGuidResult)
    {
        $this->GetPortGuidResult = $GetPortGuidResult;
        return $this;
    }

}
