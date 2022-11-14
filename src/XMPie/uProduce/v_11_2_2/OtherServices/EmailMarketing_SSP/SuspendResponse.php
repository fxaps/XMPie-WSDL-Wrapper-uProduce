<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_11_2_2\OtherServices\EmailMarketing_SSP;

class SuspendResponse
{

    /**
     * @var string $SuspendResult
     */
    protected $SuspendResult = null;

    /**
     * @param string $SuspendResult
     */
    public function __construct($SuspendResult = null)
    {
      $this->SuspendResult = $SuspendResult;
    }

    /**
     * @return string
     */
    public function getSuspendResult()
    {
      return $this->SuspendResult;
    }

    /**
     * @param string $SuspendResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_2_2\OtherServices\EmailMarketing_SSP\SuspendResponse
     */
    public function setSuspendResult($SuspendResult)
    {
      $this->SuspendResult = $SuspendResult;
      return $this;
    }

}
