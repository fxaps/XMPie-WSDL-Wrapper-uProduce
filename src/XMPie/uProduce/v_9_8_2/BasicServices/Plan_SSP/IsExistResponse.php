<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\Plan_SSP;

class IsExistResponse
{

    /**
     * @var boolean $IsExistResult
     */
    protected $IsExistResult = null;

    /**
     * @param boolean $IsExistResult
     */
    public function __construct($IsExistResult = null)
    {
        $this->IsExistResult = $IsExistResult;
    }

    /**
     * @return boolean
     */
    public function getIsExistResult()
    {
        return $this->IsExistResult;
    }

    /**
     * @param boolean $IsExistResult
     * @return IsExistResponse
     */
    public function setIsExistResult($IsExistResult)
    {
        $this->IsExistResult = $IsExistResult;
        return $this;
    }

}
