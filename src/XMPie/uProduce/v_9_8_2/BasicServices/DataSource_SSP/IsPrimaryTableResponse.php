<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\DataSource_SSP;

class IsPrimaryTableResponse
{

    /**
     * @var boolean $IsPrimaryTableResult
     */
    protected $IsPrimaryTableResult = null;

    /**
     * @param boolean $IsPrimaryTableResult
     */
    public function __construct($IsPrimaryTableResult = null)
    {
        $this->IsPrimaryTableResult = $IsPrimaryTableResult;
    }

    /**
     * @return boolean
     */
    public function getIsPrimaryTableResult()
    {
        return $this->IsPrimaryTableResult;
    }

    /**
     * @param boolean $IsPrimaryTableResult
     * @return IsPrimaryTableResponse
     */
    public function setIsPrimaryTableResult($IsPrimaryTableResult)
    {
        $this->IsPrimaryTableResult = $IsPrimaryTableResult;
        return $this;
    }

}
