<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class RemoveRemoteCopyResponse
{

    /**
     * @var boolean $RemoveRemoteCopyResult
     */
    protected $RemoveRemoteCopyResult = null;

    /**
     * @param boolean $RemoveRemoteCopyResult
     */
    public function __construct($RemoveRemoteCopyResult = null)
    {
        $this->RemoveRemoteCopyResult = $RemoveRemoteCopyResult;
    }

    /**
     * @return boolean
     */
    public function getRemoveRemoteCopyResult()
    {
        return $this->RemoveRemoteCopyResult;
    }

    /**
     * @param boolean $RemoveRemoteCopyResult
     * @return RemoveRemoteCopyResponse
     */
    public function setRemoveRemoteCopyResult($RemoveRemoteCopyResult)
    {
        $this->RemoveRemoteCopyResult = $RemoveRemoteCopyResult;
        return $this;
    }

}
