<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class AddJDFCopyResponse
{

    /**
     * @var boolean $AddJDFCopyResult
     */
    protected $AddJDFCopyResult = null;

    /**
     * @param boolean $AddJDFCopyResult
     */
    public function __construct($AddJDFCopyResult = null)
    {
        $this->AddJDFCopyResult = $AddJDFCopyResult;
    }

    /**
     * @return boolean
     */
    public function getAddJDFCopyResult()
    {
        return $this->AddJDFCopyResult;
    }

    /**
     * @param boolean $AddJDFCopyResult
     * @return AddJDFCopyResponse
     */
    public function setAddJDFCopyResult($AddJDFCopyResult)
    {
        $this->AddJDFCopyResult = $AddJDFCopyResult;
        return $this;
    }

}
