<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class AddSecondaryRemoteCopyByIDResponse
{

    /**
     * @var boolean $AddSecondaryRemoteCopyByIDResult
     */
    protected $AddSecondaryRemoteCopyByIDResult = null;

    /**
     * @param boolean $AddSecondaryRemoteCopyByIDResult
     */
    public function __construct($AddSecondaryRemoteCopyByIDResult = null)
    {
        $this->AddSecondaryRemoteCopyByIDResult = $AddSecondaryRemoteCopyByIDResult;
    }

    /**
     * @return boolean
     */
    public function getAddSecondaryRemoteCopyByIDResult()
    {
        return $this->AddSecondaryRemoteCopyByIDResult;
    }

    /**
     * @param boolean $AddSecondaryRemoteCopyByIDResult
     * @return AddSecondaryRemoteCopyByIDResponse
     */
    public function setAddSecondaryRemoteCopyByIDResult($AddSecondaryRemoteCopyByIDResult)
    {
        $this->AddSecondaryRemoteCopyByIDResult = $AddSecondaryRemoteCopyByIDResult;
        return $this;
    }

}
