<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\Document_SSP;

class ReplaceFromLocalEmailHostingResponse
{

    /**
     * @var boolean $ReplaceFromLocalEmailHostingResult
     */
    protected $ReplaceFromLocalEmailHostingResult = null;

    /**
     * @param boolean $ReplaceFromLocalEmailHostingResult
     */
    public function __construct($ReplaceFromLocalEmailHostingResult = null)
    {
        $this->ReplaceFromLocalEmailHostingResult = $ReplaceFromLocalEmailHostingResult;
    }

    /**
     * @return boolean
     */
    public function getReplaceFromLocalEmailHostingResult()
    {
        return $this->ReplaceFromLocalEmailHostingResult;
    }

    /**
     * @param boolean $ReplaceFromLocalEmailHostingResult
     * @return ReplaceFromLocalEmailHostingResponse
     */
    public function setReplaceFromLocalEmailHostingResult($ReplaceFromLocalEmailHostingResult)
    {
        $this->ReplaceFromLocalEmailHostingResult = $ReplaceFromLocalEmailHostingResult;
        return $this;
    }

}
