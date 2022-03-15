<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\UpdateDataSource_SSP;

class CancelResponse
{

    /**
     * @var StatusStructure $CancelResult
     */
    protected $CancelResult = null;

    /**
     * @param StatusStructure $CancelResult
     */
    public function __construct($CancelResult = null)
    {
      $this->CancelResult = $CancelResult;
    }

    /**
     * @return StatusStructure
     */
    public function getCancelResult()
    {
      return $this->CancelResult;
    }

    /**
     * @param StatusStructure $CancelResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\UpdateDataSource_SSP\CancelResponse
     */
    public function setCancelResult($CancelResult)
    {
      $this->CancelResult = $CancelResult;
      return $this;
    }

}
