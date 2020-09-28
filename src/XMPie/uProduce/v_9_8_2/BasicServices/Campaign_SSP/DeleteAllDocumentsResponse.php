<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\Campaign_SSP;

class DeleteAllDocumentsResponse
{

    /**
     * @var boolean $DeleteAllDocumentsResult
     */
    protected $DeleteAllDocumentsResult = null;

    /**
     * @param boolean $DeleteAllDocumentsResult
     */
    public function __construct($DeleteAllDocumentsResult = null)
    {
        $this->DeleteAllDocumentsResult = $DeleteAllDocumentsResult;
    }

    /**
     * @return boolean
     */
    public function getDeleteAllDocumentsResult()
    {
        return $this->DeleteAllDocumentsResult;
    }

    /**
     * @param boolean $DeleteAllDocumentsResult
     * @return DeleteAllDocumentsResponse
     */
    public function setDeleteAllDocumentsResult($DeleteAllDocumentsResult)
    {
        $this->DeleteAllDocumentsResult = $DeleteAllDocumentsResult;
        return $this;
    }

}
