<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_10_2_1\ApplicationServices\Destination_SSP;

class CreateNewResponse
{

    /**
     * @var string $CreateNewResult
     */
    protected $CreateNewResult = null;

    /**
     * @param string $CreateNewResult
     */
    public function __construct($CreateNewResult = null)
    {
      $this->CreateNewResult = $CreateNewResult;
    }

    /**
     * @return string
     */
    public function getCreateNewResult()
    {
      return $this->CreateNewResult;
    }

    /**
     * @param string $CreateNewResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_10_2_1\ApplicationServices\Destination_SSP\CreateNewResponse
     */
    public function setCreateNewResult($CreateNewResult)
    {
      $this->CreateNewResult = $CreateNewResult;
      return $this;
    }

}
