<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\Document_SSP;

class ReplaceFromDPKGResponse
{

    /**
     * @var boolean $ReplaceFromDPKGResult
     */
    protected $ReplaceFromDPKGResult = null;

    /**
     * @param boolean $ReplaceFromDPKGResult
     */
    public function __construct($ReplaceFromDPKGResult = null)
    {
        $this->ReplaceFromDPKGResult = $ReplaceFromDPKGResult;
    }

    /**
     * @return boolean
     */
    public function getReplaceFromDPKGResult()
    {
        return $this->ReplaceFromDPKGResult;
    }

    /**
     * @param boolean $ReplaceFromDPKGResult
     * @return ReplaceFromDPKGResponse
     */
    public function setReplaceFromDPKGResult($ReplaceFromDPKGResult)
    {
        $this->ReplaceFromDPKGResult = $ReplaceFromDPKGResult;
        return $this;
    }

}
