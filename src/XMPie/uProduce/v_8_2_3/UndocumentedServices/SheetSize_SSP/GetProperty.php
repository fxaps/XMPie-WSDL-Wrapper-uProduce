<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_8_2_3\UndocumentedServices\SheetSize_SSP;

class GetProperty
{

    /**
     * @var string $inUsername
     */
    protected $inUsername = null;

    /**
     * @var string $inPassword
     */
    protected $inPassword = null;

    /**
     * @var string $inSheetSizeID
     */
    protected $inSheetSizeID = null;

    /**
     * @var string $inPropertyName
     */
    protected $inPropertyName = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inSheetSizeID
     * @param string $inPropertyName
     */
    public function __construct($inUsername = null, $inPassword = null, $inSheetSizeID = null, $inPropertyName = null)
    {
        $this->inUsername = $inUsername;
        $this->inPassword = $inPassword;
        $this->inSheetSizeID = $inSheetSizeID;
        $this->inPropertyName = $inPropertyName;
    }

    /**
     * @return string
     */
    public function getInUsername()
    {
        return $this->inUsername;
    }

    /**
     * @param string $inUsername
     * @return GetProperty
     */
    public function setInUsername($inUsername)
    {
        $this->inUsername = $inUsername;
        return $this;
    }

    /**
     * @return string
     */
    public function getInPassword()
    {
        return $this->inPassword;
    }

    /**
     * @param string $inPassword
     * @return GetProperty
     */
    public function setInPassword($inPassword)
    {
        $this->inPassword = $inPassword;
        return $this;
    }

    /**
     * @return string
     */
    public function getInSheetSizeID()
    {
        return $this->inSheetSizeID;
    }

    /**
     * @param string $inSheetSizeID
     * @return GetProperty
     */
    public function setInSheetSizeID($inSheetSizeID)
    {
        $this->inSheetSizeID = $inSheetSizeID;
        return $this;
    }

    /**
     * @return string
     */
    public function getInPropertyName()
    {
        return $this->inPropertyName;
    }

    /**
     * @param string $inPropertyName
     * @return GetProperty
     */
    public function setInPropertyName($inPropertyName)
    {
        $this->inPropertyName = $inPropertyName;
        return $this;
    }

}
