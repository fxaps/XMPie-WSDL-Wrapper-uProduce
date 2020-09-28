<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ApplicationServices\Destination_SSP;

class GetNetworkPrinterListResponse
{

    /**
     * @var ArrayOfString $GetNetworkPrinterListResult
     */
    protected $GetNetworkPrinterListResult = null;

    /**
     * @param ArrayOfString $GetNetworkPrinterListResult
     */
    public function __construct($GetNetworkPrinterListResult = null)
    {
        $this->GetNetworkPrinterListResult = $GetNetworkPrinterListResult;
    }

    /**
     * @return ArrayOfString
     */
    public function getGetNetworkPrinterListResult()
    {
        return $this->GetNetworkPrinterListResult;
    }

    /**
     * @param ArrayOfString $GetNetworkPrinterListResult
     * @return GetNetworkPrinterListResponse
     */
    public function setGetNetworkPrinterListResult($GetNetworkPrinterListResult)
    {
        $this->GetNetworkPrinterListResult = $GetNetworkPrinterListResult;
        return $this;
    }

}
