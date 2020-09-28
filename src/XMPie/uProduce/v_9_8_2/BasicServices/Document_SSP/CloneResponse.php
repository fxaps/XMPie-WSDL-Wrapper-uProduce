<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\Document_SSP;

class CloneResponse
{

    /**
     * @var DocumentMapping $CloneResult
     */
    protected $CloneResult = null;

    /**
     * @param DocumentMapping $CloneResult
     */
    public function __construct($CloneResult = null)
    {
        $this->CloneResult = $CloneResult;
    }

    /**
     * @return DocumentMapping
     */
    public function getCloneResult()
    {
        return $this->CloneResult;
    }

    /**
     * @param DocumentMapping $CloneResult
     * @return CloneResponse
     */
    public function setCloneResult($CloneResult)
    {
        $this->CloneResult = $CloneResult;
        return $this;
    }

}
