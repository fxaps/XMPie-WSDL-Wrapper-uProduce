<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_10_2_1\BasicServices\Plan_SSP;

class CloneResponse
{

    /**
     * @var PlanMapping $CloneResult
     */
    protected $CloneResult = null;

    /**
     * @param PlanMapping $CloneResult
     */
    public function __construct($CloneResult = null)
    {
      $this->CloneResult = $CloneResult;
    }

    /**
     * @return PlanMapping
     */
    public function getCloneResult()
    {
      return $this->CloneResult;
    }

    /**
     * @param PlanMapping $CloneResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_10_2_1\BasicServices\Plan_SSP\CloneResponse
     */
    public function setCloneResult($CloneResult)
    {
      $this->CloneResult = $CloneResult;
      return $this;
    }

}
