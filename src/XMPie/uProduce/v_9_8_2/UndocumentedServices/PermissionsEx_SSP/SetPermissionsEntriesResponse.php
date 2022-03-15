<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\PermissionsEx_SSP;

class SetPermissionsEntriesResponse
{

    /**
     * @var boolean $SetPermissionsEntriesResult
     */
    protected $SetPermissionsEntriesResult = null;

    /**
     * @param boolean $SetPermissionsEntriesResult
     */
    public function __construct($SetPermissionsEntriesResult = null)
    {
      $this->SetPermissionsEntriesResult = $SetPermissionsEntriesResult;
    }

    /**
     * @return boolean
     */
    public function getSetPermissionsEntriesResult()
    {
      return $this->SetPermissionsEntriesResult;
    }

    /**
     * @param boolean $SetPermissionsEntriesResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\PermissionsEx_SSP\SetPermissionsEntriesResponse
     */
    public function setSetPermissionsEntriesResult($SetPermissionsEntriesResult)
    {
      $this->SetPermissionsEntriesResult = $SetPermissionsEntriesResult;
      return $this;
    }

}
