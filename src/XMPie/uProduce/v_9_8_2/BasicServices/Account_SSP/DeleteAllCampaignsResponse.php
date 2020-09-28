<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\Account_SSP;

class DeleteAllCampaignsResponse
{

    /**
     * @var boolean $DeleteAllCampaignsResult
     */
    protected $DeleteAllCampaignsResult = null;

    /**
     * @param boolean $DeleteAllCampaignsResult
     */
    public function __construct($DeleteAllCampaignsResult = null)
    {
        $this->DeleteAllCampaignsResult = $DeleteAllCampaignsResult;
    }

    /**
     * @return boolean
     */
    public function getDeleteAllCampaignsResult()
    {
        return $this->DeleteAllCampaignsResult;
    }

    /**
     * @param boolean $DeleteAllCampaignsResult
     * @return DeleteAllCampaignsResponse
     */
    public function setDeleteAllCampaignsResult($DeleteAllCampaignsResult)
    {
        $this->DeleteAllCampaignsResult = $DeleteAllCampaignsResult;
        return $this;
    }

}
