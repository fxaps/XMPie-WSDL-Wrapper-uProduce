<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class SetDocumentResourcesFolderResponse
{

    /**
     * @var boolean $SetDocumentResourcesFolderResult
     */
    protected $SetDocumentResourcesFolderResult = null;

    /**
     * @param boolean $SetDocumentResourcesFolderResult
     */
    public function __construct($SetDocumentResourcesFolderResult = null)
    {
        $this->SetDocumentResourcesFolderResult = $SetDocumentResourcesFolderResult;
    }

    /**
     * @return boolean
     */
    public function getSetDocumentResourcesFolderResult()
    {
        return $this->SetDocumentResourcesFolderResult;
    }

    /**
     * @param boolean $SetDocumentResourcesFolderResult
     * @return SetDocumentResourcesFolderResponse
     */
    public function setSetDocumentResourcesFolderResult($SetDocumentResourcesFolderResult)
    {
        $this->SetDocumentResourcesFolderResult = $SetDocumentResourcesFolderResult;
        return $this;
    }

}
