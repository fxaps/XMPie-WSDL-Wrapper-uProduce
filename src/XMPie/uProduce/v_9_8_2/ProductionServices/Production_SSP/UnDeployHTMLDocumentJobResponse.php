<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\Production_SSP;

class UnDeployHTMLDocumentJobResponse
{

    /**
     * @var boolean $UnDeployHTMLDocumentJobResult
     */
    protected $UnDeployHTMLDocumentJobResult = null;

    /**
     * @param boolean $UnDeployHTMLDocumentJobResult
     */
    public function __construct($UnDeployHTMLDocumentJobResult = null)
    {
        $this->UnDeployHTMLDocumentJobResult = $UnDeployHTMLDocumentJobResult;
    }

    /**
     * @return boolean
     */
    public function getUnDeployHTMLDocumentJobResult()
    {
        return $this->UnDeployHTMLDocumentJobResult;
    }

    /**
     * @param boolean $UnDeployHTMLDocumentJobResult
     * @return UnDeployHTMLDocumentJobResponse
     */
    public function setUnDeployHTMLDocumentJobResult($UnDeployHTMLDocumentJobResult)
    {
        $this->UnDeployHTMLDocumentJobResult = $UnDeployHTMLDocumentJobResult;
        return $this;
    }

}
