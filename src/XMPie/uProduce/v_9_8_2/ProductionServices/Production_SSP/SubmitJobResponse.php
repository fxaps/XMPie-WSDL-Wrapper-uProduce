<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\Production_SSP;

class SubmitJobResponse
{

    /**
     * @var string $SubmitJobResult
     */
    protected $SubmitJobResult = null;

    /**
     * @param string $SubmitJobResult
     */
    public function __construct($SubmitJobResult = null)
    {
        $this->SubmitJobResult = $SubmitJobResult;
    }

    /**
     * @return string
     */
    public function getSubmitJobResult()
    {
        return $this->SubmitJobResult;
    }

    /**
     * @param string $SubmitJobResult
     * @return SubmitJobResponse
     */
    public function setSubmitJobResult($SubmitJobResult)
    {
        $this->SubmitJobResult = $SubmitJobResult;
        return $this;
    }

}
