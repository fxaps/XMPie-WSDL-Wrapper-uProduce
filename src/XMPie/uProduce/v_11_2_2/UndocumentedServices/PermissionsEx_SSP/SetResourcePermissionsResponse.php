<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_11_2_2\UndocumentedServices\PermissionsEx_SSP;

class SetResourcePermissionsResponse
{

    /**
     * @var boolean $SetResourcePermissionsResult
     */
    protected $SetResourcePermissionsResult = null;

    /**
     * @param boolean $SetResourcePermissionsResult
     */
    public function __construct($SetResourcePermissionsResult = null)
    {
      $this->SetResourcePermissionsResult = $SetResourcePermissionsResult;
    }

    /**
     * @return boolean
     */
    public function getSetResourcePermissionsResult()
    {
      return $this->SetResourcePermissionsResult;
    }

    /**
     * @param boolean $SetResourcePermissionsResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_2_2\UndocumentedServices\PermissionsEx_SSP\SetResourcePermissionsResponse
     */
    public function setSetResourcePermissionsResult($SetResourcePermissionsResult)
    {
      $this->SetResourcePermissionsResult = $SetResourcePermissionsResult;
      return $this;
    }

}
