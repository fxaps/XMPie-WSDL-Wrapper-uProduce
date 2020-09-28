<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\Customer_SSP;

class DeleteAllConfigFilesResponse
{

    /**
     * @var boolean $DeleteAllConfigFilesResult
     */
    protected $DeleteAllConfigFilesResult = null;

    /**
     * @param boolean $DeleteAllConfigFilesResult
     */
    public function __construct($DeleteAllConfigFilesResult = null)
    {
        $this->DeleteAllConfigFilesResult = $DeleteAllConfigFilesResult;
    }

    /**
     * @return boolean
     */
    public function getDeleteAllConfigFilesResult()
    {
        return $this->DeleteAllConfigFilesResult;
    }

    /**
     * @param boolean $DeleteAllConfigFilesResult
     * @return DeleteAllConfigFilesResponse
     */
    public function setDeleteAllConfigFilesResult($DeleteAllConfigFilesResult)
    {
        $this->DeleteAllConfigFilesResult = $DeleteAllConfigFilesResult;
        return $this;
    }

}
