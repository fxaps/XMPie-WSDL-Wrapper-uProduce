<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\CustomButton_SSP;

class ExecuteResponse
{

    /**
     * @var boolean $ExecuteResult
     */
    protected $ExecuteResult = null;

    /**
     * @param boolean $ExecuteResult
     */
    public function __construct($ExecuteResult = null)
    {
      $this->ExecuteResult = $ExecuteResult;
    }

    /**
     * @return boolean
     */
    public function getExecuteResult()
    {
      return $this->ExecuteResult;
    }

    /**
     * @param boolean $ExecuteResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\CustomButton_SSP\ExecuteResponse
     */
    public function setExecuteResult($ExecuteResult)
    {
      $this->ExecuteResult = $ExecuteResult;
      return $this;
    }

}
