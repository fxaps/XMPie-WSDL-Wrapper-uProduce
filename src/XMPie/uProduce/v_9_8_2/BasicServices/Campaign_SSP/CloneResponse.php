<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\Campaign_SSP;

class CloneResponse
{

    /**
     * @var CampaignMapping $CloneResult
     */
    protected $CloneResult = null;

    /**
     * @param CampaignMapping $CloneResult
     */
    public function __construct($CloneResult = null)
    {
        $this->CloneResult = $CloneResult;
    }

    /**
     * @return CampaignMapping
     */
    public function getCloneResult()
    {
        return $this->CloneResult;
    }

    /**
     * @param CampaignMapping $CloneResult
     * @return CloneResponse
     */
    public function setCloneResult($CloneResult)
    {
        $this->CloneResult = $CloneResult;
        return $this;
    }

}
