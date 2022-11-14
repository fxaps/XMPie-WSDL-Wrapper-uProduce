<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_11_2_2\BasicServices\Customer_SSP;

class GetSheetSizeIDResponse
{

    /**
     * @var string $GetSheetSizeIDResult
     */
    protected $GetSheetSizeIDResult = null;

    /**
     * @param string $GetSheetSizeIDResult
     */
    public function __construct($GetSheetSizeIDResult = null)
    {
      $this->GetSheetSizeIDResult = $GetSheetSizeIDResult;
    }

    /**
     * @return string
     */
    public function getGetSheetSizeIDResult()
    {
      return $this->GetSheetSizeIDResult;
    }

    /**
     * @param string $GetSheetSizeIDResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_2_2\BasicServices\Customer_SSP\GetSheetSizeIDResponse
     */
    public function setGetSheetSizeIDResult($GetSheetSizeIDResult)
    {
      $this->GetSheetSizeIDResult = $GetSheetSizeIDResult;
      return $this;
    }

}
