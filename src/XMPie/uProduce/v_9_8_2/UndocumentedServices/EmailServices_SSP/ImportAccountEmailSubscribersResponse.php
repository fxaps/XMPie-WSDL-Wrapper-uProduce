<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\EmailServices_SSP;

class ImportAccountEmailSubscribersResponse
{

    /**
     * @var boolean $ImportAccountEmailSubscribersResult
     */
    protected $ImportAccountEmailSubscribersResult = null;

    /**
     * @param boolean $ImportAccountEmailSubscribersResult
     */
    public function __construct($ImportAccountEmailSubscribersResult = null)
    {
      $this->ImportAccountEmailSubscribersResult = $ImportAccountEmailSubscribersResult;
    }

    /**
     * @return boolean
     */
    public function getImportAccountEmailSubscribersResult()
    {
      return $this->ImportAccountEmailSubscribersResult;
    }

    /**
     * @param boolean $ImportAccountEmailSubscribersResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\EmailServices_SSP\ImportAccountEmailSubscribersResponse
     */
    public function setImportAccountEmailSubscribersResult($ImportAccountEmailSubscribersResult)
    {
      $this->ImportAccountEmailSubscribersResult = $ImportAccountEmailSubscribersResult;
      return $this;
    }

}
