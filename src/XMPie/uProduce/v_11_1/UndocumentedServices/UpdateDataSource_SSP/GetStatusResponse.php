<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_11_1\UndocumentedServices\UpdateDataSource_SSP;

class GetStatusResponse
{

    /**
     * @var StatusStructure $GetStatusResult
     */
    protected $GetStatusResult = null;

    /**
     * @param StatusStructure $GetStatusResult
     */
    public function __construct($GetStatusResult = null)
    {
      $this->GetStatusResult = $GetStatusResult;
    }

    /**
     * @return StatusStructure
     */
    public function getGetStatusResult()
    {
      return $this->GetStatusResult;
    }

    /**
     * @param StatusStructure $GetStatusResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_1\UndocumentedServices\UpdateDataSource_SSP\GetStatusResponse
     */
    public function setGetStatusResult($GetStatusResult)
    {
      $this->GetStatusResult = $GetStatusResult;
      return $this;
    }

}
