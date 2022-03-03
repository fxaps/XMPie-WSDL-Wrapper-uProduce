<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_11_1\UndocumentedServices\Population_SSP;

class IsAdaptedToWebResponse
{

    /**
     * @var boolean $IsAdaptedToWebResult
     */
    protected $IsAdaptedToWebResult = null;

    /**
     * @param boolean $IsAdaptedToWebResult
     */
    public function __construct($IsAdaptedToWebResult = null)
    {
      $this->IsAdaptedToWebResult = $IsAdaptedToWebResult;
    }

    /**
     * @return boolean
     */
    public function getIsAdaptedToWebResult()
    {
      return $this->IsAdaptedToWebResult;
    }

    /**
     * @param boolean $IsAdaptedToWebResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_1\UndocumentedServices\Population_SSP\IsAdaptedToWebResponse
     */
    public function setIsAdaptedToWebResult($IsAdaptedToWebResult)
    {
      $this->IsAdaptedToWebResult = $IsAdaptedToWebResult;
      return $this;
    }

}
