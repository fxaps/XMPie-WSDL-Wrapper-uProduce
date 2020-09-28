<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_8_2_3\UndocumentedServices\SheetSize_SSP;

class Delete
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
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inSheetSizeID
     */
    public function __construct($inUsername = null, $inPassword = null, $inSheetSizeID = null)
    {
        $this->inUsername = $inUsername;
        $this->inPassword = $inPassword;
        $this->inSheetSizeID = $inSheetSizeID;
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
     * @return Delete
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
     * @return Delete
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
     * @return Delete
     */
    public function setInSheetSizeID($inSheetSizeID)
    {
        $this->inSheetSizeID = $inSheetSizeID;
        return $this;
    }

}
