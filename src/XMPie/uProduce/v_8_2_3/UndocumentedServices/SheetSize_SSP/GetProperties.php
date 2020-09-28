<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_8_2_3\UndocumentedServices\SheetSize_SSP;

class GetProperties
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
     * @var ArrayOfString $inPropertiesNames
     */
    protected $inPropertiesNames = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inSheetSizeID
     * @param ArrayOfString $inPropertiesNames
     */
    public function __construct($inUsername = null, $inPassword = null, $inSheetSizeID = null, $inPropertiesNames = null)
    {
        $this->inUsername = $inUsername;
        $this->inPassword = $inPassword;
        $this->inSheetSizeID = $inSheetSizeID;
        $this->inPropertiesNames = $inPropertiesNames;
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
     * @return GetProperties
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
     * @return GetProperties
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
     * @return GetProperties
     */
    public function setInSheetSizeID($inSheetSizeID)
    {
        $this->inSheetSizeID = $inSheetSizeID;
        return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getInPropertiesNames()
    {
        return $this->inPropertiesNames;
    }

    /**
     * @param ArrayOfString $inPropertiesNames
     * @return GetProperties
     */
    public function setInPropertiesNames($inPropertiesNames)
    {
        $this->inPropertiesNames = $inPropertiesNames;
        return $this;
    }

}
