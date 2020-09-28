<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\PermissionsEx_SSP;

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
     * @return SetActorPermissionsResponse
     */
    public function setSetActorPermissionsResult($SetActorPermissionsResult)
    {
        $this->SetActorPermissionsResult = $SetActorPermissionsResult;
        return $this;
    }

}
