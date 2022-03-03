<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_11_1\UndocumentedServices\EmailServices_SSP;

class ExportAccountEmailSubscribersResponse
{

    /**
     * @var string $ExportAccountEmailSubscribersResult
     */
    protected $ExportAccountEmailSubscribersResult = null;

    /**
     * @param string $ExportAccountEmailSubscribersResult
     */
    public function __construct($ExportAccountEmailSubscribersResult = null)
    {
      $this->ExportAccountEmailSubscribersResult = $ExportAccountEmailSubscribersResult;
    }

    /**
     * @return string
     */
    public function getExportAccountEmailSubscribersResult()
    {
      return $this->ExportAccountEmailSubscribersResult;
    }

    /**
     * @param string $ExportAccountEmailSubscribersResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_1\UndocumentedServices\EmailServices_SSP\ExportAccountEmailSubscribersResponse
     */
    public function setExportAccountEmailSubscribersResult($ExportAccountEmailSubscribersResult)
    {
      $this->ExportAccountEmailSubscribersResult = $ExportAccountEmailSubscribersResult;
      return $this;
    }

}
