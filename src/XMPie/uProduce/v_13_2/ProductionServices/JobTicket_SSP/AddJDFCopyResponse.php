<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_13_2\ProductionServices\JobTicket_SSP;

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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_13_2\ProductionServices\JobTicket_SSP\AddJDFCopyResponse
     */
    public function setAddJDFCopyResult($AddJDFCopyResult)
    {
      $this->AddJDFCopyResult = $AddJDFCopyResult;
      return $this;
    }

}
