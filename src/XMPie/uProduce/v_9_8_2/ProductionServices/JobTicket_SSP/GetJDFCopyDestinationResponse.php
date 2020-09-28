<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class GetJDFCopyDestinationResponse
{

    /**
     * @var string $GetJDFCopyDestinationResult
     */
    protected $GetJDFCopyDestinationResult = null;

    /**
     * @param string $GetJDFCopyDestinationResult
     */
    public function __construct($GetJDFCopyDestinationResult = null)
    {
        $this->GetJDFCopyDestinationResult = $GetJDFCopyDestinationResult;
    }

    /**
     * @return string
     */
    public function getGetJDFCopyDestinationResult()
    {
        return $this->GetJDFCopyDestinationResult;
    }

    /**
     * @param string $GetJDFCopyDestinationResult
     * @return GetJDFCopyDestinationResponse
     */
    public function setGetJDFCopyDestinationResult($GetJDFCopyDestinationResult)
    {
        $this->GetJDFCopyDestinationResult = $GetJDFCopyDestinationResult;
        return $this;
    }

}
