<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class RemoveJDFCopyResponse
{

    /**
     * @var boolean $RemoveJDFCopyResult
     */
    protected $RemoveJDFCopyResult = null;

    /**
     * @param boolean $RemoveJDFCopyResult
     */
    public function __construct($RemoveJDFCopyResult = null)
    {
        $this->RemoveJDFCopyResult = $RemoveJDFCopyResult;
    }

    /**
     * @return boolean
     */
    public function getRemoveJDFCopyResult()
    {
        return $this->RemoveJDFCopyResult;
    }

    /**
     * @param boolean $RemoveJDFCopyResult
     * @return RemoveJDFCopyResponse
     */
    public function setRemoveJDFCopyResult($RemoveJDFCopyResult)
    {
        $this->RemoveJDFCopyResult = $RemoveJDFCopyResult;
        return $this;
    }

}
