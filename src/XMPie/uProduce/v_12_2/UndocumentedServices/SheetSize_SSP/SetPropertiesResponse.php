<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_12_2\UndocumentedServices\SheetSize_SSP;

class SetPropertiesResponse
{

    /**
     * @var boolean $SetPropertiesResult
     */
    protected $SetPropertiesResult = null;

    /**
     * @param boolean $SetPropertiesResult
     */
    public function __construct($SetPropertiesResult = null)
    {
      $this->SetPropertiesResult = $SetPropertiesResult;
    }

    /**
     * @return boolean
     */
    public function getSetPropertiesResult()
    {
      return $this->SetPropertiesResult;
    }

    /**
     * @param boolean $SetPropertiesResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_2\UndocumentedServices\SheetSize_SSP\SetPropertiesResponse
     */
    public function setSetPropertiesResult($SetPropertiesResult)
    {
      $this->SetPropertiesResult = $SetPropertiesResult;
      return $this;
    }

}
