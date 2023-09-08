<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_12_2\ProductionServices\JobTicket_SSP;

class GetFTPPasswordResponse
{

    /**
     * @var string $GetFTPPasswordResult
     */
    protected $GetFTPPasswordResult = null;

    /**
     * @param string $GetFTPPasswordResult
     */
    public function __construct($GetFTPPasswordResult = null)
    {
      $this->GetFTPPasswordResult = $GetFTPPasswordResult;
    }

    /**
     * @return string
     */
    public function getGetFTPPasswordResult()
    {
      return $this->GetFTPPasswordResult;
    }

    /**
     * @param string $GetFTPPasswordResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_2\ProductionServices\JobTicket_SSP\GetFTPPasswordResponse
     */
    public function setGetFTPPasswordResult($GetFTPPasswordResult)
    {
      $this->GetFTPPasswordResult = $GetFTPPasswordResult;
      return $this;
    }

}
