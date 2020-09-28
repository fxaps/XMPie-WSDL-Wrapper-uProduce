<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class GetUMailOrigZipResponse
{

    /**
     * @var string $GetUMailOrigZipResult
     */
    protected $GetUMailOrigZipResult = null;

    /**
     * @param string $GetUMailOrigZipResult
     */
    public function __construct($GetUMailOrigZipResult = null)
    {
        $this->GetUMailOrigZipResult = $GetUMailOrigZipResult;
    }

    /**
     * @return string
     */
    public function getGetUMailOrigZipResult()
    {
        return $this->GetUMailOrigZipResult;
    }

    /**
     * @param string $GetUMailOrigZipResult
     * @return GetUMailOrigZipResponse
     */
    public function setGetUMailOrigZipResult($GetUMailOrigZipResult)
    {
        $this->GetUMailOrigZipResult = $GetUMailOrigZipResult;
        return $this;
    }

}
