<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\Document_SSP;

class ReplaceFromFileResponse
{

    /**
     * @var boolean $ReplaceFromFileResult
     */
    protected $ReplaceFromFileResult = null;

    /**
     * @param boolean $ReplaceFromFileResult
     */
    public function __construct($ReplaceFromFileResult = null)
    {
        $this->ReplaceFromFileResult = $ReplaceFromFileResult;
    }

    /**
     * @return boolean
     */
    public function getReplaceFromFileResult()
    {
        return $this->ReplaceFromFileResult;
    }

    /**
     * @param boolean $ReplaceFromFileResult
     * @return ReplaceFromFileResponse
     */
    public function setReplaceFromFileResult($ReplaceFromFileResult)
    {
        $this->ReplaceFromFileResult = $ReplaceFromFileResult;
        return $this;
    }

}
