<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_13_2\UndocumentedServices\Population_SSP;

class GetNameResponse
{

    /**
     * @var string $GetNameResult
     */
    protected $GetNameResult = null;

    /**
     * @param string $GetNameResult
     */
    public function __construct($GetNameResult = null)
    {
      $this->GetNameResult = $GetNameResult;
    }

    /**
     * @return string
     */
    public function getGetNameResult()
    {
      return $this->GetNameResult;
    }

    /**
     * @param string $GetNameResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_13_2\UndocumentedServices\Population_SSP\GetNameResponse
     */
    public function setGetNameResult($GetNameResult)
    {
      $this->GetNameResult = $GetNameResult;
      return $this;
    }

}