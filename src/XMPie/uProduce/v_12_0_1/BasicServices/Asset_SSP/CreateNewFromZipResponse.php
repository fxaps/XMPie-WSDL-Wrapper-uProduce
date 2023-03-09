<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_12_0_1\BasicServices\Asset_SSP;

class CreateNewFromZipResponse
{

    /**
     * @var ArrayOfString $CreateNewFromZipResult
     */
    protected $CreateNewFromZipResult = null;

    /**
     * @param ArrayOfString $CreateNewFromZipResult
     */
    public function __construct($CreateNewFromZipResult = null)
    {
      $this->CreateNewFromZipResult = $CreateNewFromZipResult;
    }

    /**
     * @return ArrayOfString
     */
    public function getCreateNewFromZipResult()
    {
      return $this->CreateNewFromZipResult;
    }

    /**
     * @param ArrayOfString $CreateNewFromZipResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_0_1\BasicServices\Asset_SSP\CreateNewFromZipResponse
     */
    public function setCreateNewFromZipResult($CreateNewFromZipResult)
    {
      $this->CreateNewFromZipResult = $CreateNewFromZipResult;
      return $this;
    }

}
