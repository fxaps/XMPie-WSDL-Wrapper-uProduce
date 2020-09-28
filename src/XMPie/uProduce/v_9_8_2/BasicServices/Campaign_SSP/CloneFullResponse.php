<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\Campaign_SSP;

class CloneFullResponse
{

    /**
     * @var CampaignMapping $CloneFullResult
     */
    protected $CloneFullResult = null;

    /**
     * @param CampaignMapping $CloneFullResult
     */
    public function __construct($CloneFullResult = null)
    {
        $this->CloneFullResult = $CloneFullResult;
    }

    /**
     * @return CampaignMapping
     */
    public function getCloneFullResult()
    {
        return $this->CloneFullResult;
    }

    /**
     * @param CampaignMapping $CloneFullResult
     * @return CloneFullResponse
     */
    public function setCloneFullResult($CloneFullResult)
    {
        $this->CloneFullResult = $CloneFullResult;
        return $this;
    }

}
