<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\Customer_SSP;

class GetConfigFilesDataSetResponse
{

    /**
     * @var GetConfigFilesDataSetResult $GetConfigFilesDataSetResult
     */
    protected $GetConfigFilesDataSetResult = null;

    /**
     * @param GetConfigFilesDataSetResult $GetConfigFilesDataSetResult
     */
    public function __construct($GetConfigFilesDataSetResult = null)
    {
        $this->GetConfigFilesDataSetResult = $GetConfigFilesDataSetResult;
    }

    /**
     * @return GetConfigFilesDataSetResult
     */
    public function getGetConfigFilesDataSetResult()
    {
        return $this->GetConfigFilesDataSetResult;
    }

    /**
     * @param GetConfigFilesDataSetResult $GetConfigFilesDataSetResult
     * @return GetConfigFilesDataSetResponse
     */
    public function setGetConfigFilesDataSetResult($GetConfigFilesDataSetResult)
    {
        $this->GetConfigFilesDataSetResult = $GetConfigFilesDataSetResult;
        return $this;
    }

}
