<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_25_0\UndocumentedServices\PermissionsEx_SSP;

class SetActorPermissionsResponse
{

    /**
     * @var boolean $SetActorPermissionsResult
     */
    protected $SetActorPermissionsResult = null;

    /**
     * @param boolean $SetActorPermissionsResult
     */
    public function __construct($SetActorPermissionsResult = null)
    {
      $this->SetActorPermissionsResult = $SetActorPermissionsResult;
    }

    /**
     * @return boolean
     */
    public function getSetActorPermissionsResult()
    {
      return $this->SetActorPermissionsResult;
    }

    /**
     * @param boolean $SetActorPermissionsResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\UndocumentedServices\PermissionsEx_SSP\SetActorPermissionsResponse
     */
    public function setSetActorPermissionsResult($SetActorPermissionsResult)
    {
      $this->SetActorPermissionsResult = $SetActorPermissionsResult;
      return $this;
    }

}
