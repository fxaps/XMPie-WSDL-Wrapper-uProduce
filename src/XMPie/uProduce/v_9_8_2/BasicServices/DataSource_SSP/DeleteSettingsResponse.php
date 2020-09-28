<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\DataSource_SSP;

class DeleteSettingsResponse
{

    /**
     * @var boolean $DeleteSettingsResult
     */
    protected $DeleteSettingsResult = null;

    /**
     * @param boolean $DeleteSettingsResult
     */
    public function __construct($DeleteSettingsResult = null)
    {
        $this->DeleteSettingsResult = $DeleteSettingsResult;
    }

    /**
     * @return boolean
     */
    public function getDeleteSettingsResult()
    {
        return $this->DeleteSettingsResult;
    }

    /**
     * @param boolean $DeleteSettingsResult
     * @return DeleteSettingsResponse
     */
    public function setDeleteSettingsResult($DeleteSettingsResult)
    {
        $this->DeleteSettingsResult = $DeleteSettingsResult;
        return $this;
    }

}
