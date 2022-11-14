<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_11_2_2\UndocumentedServices\SheetSize_SSP;

class GetIDResponse
{

    /**
     * @var string $GetIDResult
     */
    protected $GetIDResult = null;

    /**
     * @param string $GetIDResult
     */
    public function __construct($GetIDResult = null)
    {
      $this->GetIDResult = $GetIDResult;
    }

    /**
     * @return string
     */
    public function getGetIDResult()
    {
      return $this->GetIDResult;
    }

    /**
     * @param string $GetIDResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_2_2\UndocumentedServices\SheetSize_SSP\GetIDResponse
     */
    public function setGetIDResult($GetIDResult)
    {
      $this->GetIDResult = $GetIDResult;
      return $this;
    }

}
