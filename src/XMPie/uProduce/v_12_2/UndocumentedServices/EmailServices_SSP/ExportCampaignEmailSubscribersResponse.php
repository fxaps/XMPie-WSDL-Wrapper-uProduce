<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_12_2\UndocumentedServices\EmailServices_SSP;

class ExportCampaignEmailSubscribersResponse
{

    /**
     * @var string $ExportCampaignEmailSubscribersResult
     */
    protected $ExportCampaignEmailSubscribersResult = null;

    /**
     * @param string $ExportCampaignEmailSubscribersResult
     */
    public function __construct($ExportCampaignEmailSubscribersResult = null)
    {
      $this->ExportCampaignEmailSubscribersResult = $ExportCampaignEmailSubscribersResult;
    }

    /**
     * @return string
     */
    public function getExportCampaignEmailSubscribersResult()
    {
      return $this->ExportCampaignEmailSubscribersResult;
    }

    /**
     * @param string $ExportCampaignEmailSubscribersResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_2\UndocumentedServices\EmailServices_SSP\ExportCampaignEmailSubscribersResponse
     */
    public function setExportCampaignEmailSubscribersResult($ExportCampaignEmailSubscribersResult)
    {
      $this->ExportCampaignEmailSubscribersResult = $ExportCampaignEmailSubscribersResult;
      return $this;
    }

}
