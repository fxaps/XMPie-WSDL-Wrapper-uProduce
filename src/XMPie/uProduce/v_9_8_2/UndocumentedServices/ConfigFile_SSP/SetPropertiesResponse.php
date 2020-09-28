<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\ConfigFile_SSP;

class SetPropertiesResponse
{

    /**
     * @var boolean $SetPropertiesResult
     */
    protected $SetPropertiesResult = null;

    /**
     * @param boolean $SetPropertiesResult
     */
    public function __construct($SetPropertiesResult = null)
    {
        $this->SetPropertiesResult = $SetPropertiesResult;
    }

    /**
     * @return boolean
     */
    public function getSetPropertiesResult()
    {
        return $this->SetPropertiesResult;
    }

    /**
     * @param boolean $SetPropertiesResult
     * @return SetPropertiesResponse
     */
    public function setSetPropertiesResult($SetPropertiesResult)
    {
        $this->SetPropertiesResult = $SetPropertiesResult;
        return $this;
    }

}
