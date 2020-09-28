<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\Font_SSP;

class GetAllPropertiesResponse
{

    /**
     * @var ArrayOfProperty $GetAllPropertiesResult
     */
    protected $GetAllPropertiesResult = null;

    /**
     * @param ArrayOfProperty $GetAllPropertiesResult
     */
    public function __construct($GetAllPropertiesResult = null)
    {
        $this->GetAllPropertiesResult = $GetAllPropertiesResult;
    }

    /**
     * @return ArrayOfProperty
     */
    public function getGetAllPropertiesResult()
    {
        return $this->GetAllPropertiesResult;
    }

    /**
     * @param ArrayOfProperty $GetAllPropertiesResult
     * @return GetAllPropertiesResponse
     */
    public function setGetAllPropertiesResult($GetAllPropertiesResult)
    {
        $this->GetAllPropertiesResult = $GetAllPropertiesResult;
        return $this;
    }

}
