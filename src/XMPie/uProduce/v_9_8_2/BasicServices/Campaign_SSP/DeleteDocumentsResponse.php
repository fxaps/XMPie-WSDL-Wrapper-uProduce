<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\Campaign_SSP;

class DeleteDocumentsResponse
{

    /**
     * @var boolean $DeleteDocumentsResult
     */
    protected $DeleteDocumentsResult = null;

    /**
     * @param boolean $DeleteDocumentsResult
     */
    public function __construct($DeleteDocumentsResult = null)
    {
        $this->DeleteDocumentsResult = $DeleteDocumentsResult;
    }

    /**
     * @return boolean
     */
    public function getDeleteDocumentsResult()
    {
        return $this->DeleteDocumentsResult;
    }

    /**
     * @param boolean $DeleteDocumentsResult
     * @return DeleteDocumentsResponse
     */
    public function setDeleteDocumentsResult($DeleteDocumentsResult)
    {
        $this->DeleteDocumentsResult = $DeleteDocumentsResult;
        return $this;
    }

}
