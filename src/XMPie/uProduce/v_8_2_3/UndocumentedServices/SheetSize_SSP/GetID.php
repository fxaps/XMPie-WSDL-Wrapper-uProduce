<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_8_2_3\UndocumentedServices\SheetSize_SSP;

class GetID
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
     * @var string $inSheetSizeName
     */
    protected $inSheetSizeName = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inSheetSizeName
     */
    public function __construct($inUsername = null, $inPassword = null, $inSheetSizeName = null)
    {
        $this->inUsername = $inUsername;
        $this->inPassword = $inPassword;
        $this->inSheetSizeName = $inSheetSizeName;
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
     * @return GetID
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
     * @return GetID
     */
    public function setInPassword($inPassword)
    {
        $this->inPassword = $inPassword;
        return $this;
    }

    /**
     * @return string
     */
    public function getInSheetSizeName()
    {
        return $this->inSheetSizeName;
    }

    /**
     * @param string $inSheetSizeName
     * @return GetID
     */
    public function setInSheetSizeName($inSheetSizeName)
    {
        $this->inSheetSizeName = $inSheetSizeName;
        return $this;
    }

}
