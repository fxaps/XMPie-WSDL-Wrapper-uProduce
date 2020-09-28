<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\UpdateDataSource_SSP;

class Start
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
     * @var string $inRecipientTableId
     */
    protected $inRecipientTableId = null;

    /**
     * @var string $inFileName
     */
    protected $inFileName = null;

    /**
     * @var string $inDataSourceType
     */
    protected $inDataSourceType = null;

    /**
     * @var string $inDelimiter
     */
    protected $inDelimiter = null;

    /**
     * @var TransactionType $inTransactionType
     */
    protected $inTransactionType = null;

    /**
     * @var string $inUploadedTableName
     */
    protected $inUploadedTableName = null;

    /**
     * @var string $inSelectedPrimaryKey
     */
    protected $inSelectedPrimaryKey = null;

    /**
     * @var UploadedFieldMappings $inMapping
     */
    protected $inMapping = null;

    /**
     * @var boolean $inAllowDuplicatesAfterMerge
     */
    protected $inAllowDuplicatesAfterMerge = null;

    /**
     * @var boolean $inAllowDuplicatesInUploadedFile
     */
    protected $inAllowDuplicatesInUploadedFile = null;

    /**
     * @var boolean $inIsDryRun
     */
    protected $inIsDryRun = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inRecipientTableId
     * @param string $inFileName
     * @param string $inDataSourceType
     * @param string $inDelimiter
     * @param TransactionType $inTransactionType
     * @param string $inUploadedTableName
     * @param string $inSelectedPrimaryKey
     * @param UploadedFieldMappings $inMapping
     * @param boolean $inAllowDuplicatesAfterMerge
     * @param boolean $inAllowDuplicatesInUploadedFile
     * @param boolean $inIsDryRun
     */
    public function __construct($inUsername = null, $inPassword = null, $inRecipientTableId = null, $inFileName = null, $inDataSourceType = null, $inDelimiter = null, $inTransactionType = null, $inUploadedTableName = null, $inSelectedPrimaryKey = null, $inMapping = null, $inAllowDuplicatesAfterMerge = null, $inAllowDuplicatesInUploadedFile = null, $inIsDryRun = null)
    {
        $this->inUsername = $inUsername;
        $this->inPassword = $inPassword;
        $this->inRecipientTableId = $inRecipientTableId;
        $this->inFileName = $inFileName;
        $this->inDataSourceType = $inDataSourceType;
        $this->inDelimiter = $inDelimiter;
        $this->inTransactionType = $inTransactionType;
        $this->inUploadedTableName = $inUploadedTableName;
        $this->inSelectedPrimaryKey = $inSelectedPrimaryKey;
        $this->inMapping = $inMapping;
        $this->inAllowDuplicatesAfterMerge = $inAllowDuplicatesAfterMerge;
        $this->inAllowDuplicatesInUploadedFile = $inAllowDuplicatesInUploadedFile;
        $this->inIsDryRun = $inIsDryRun;
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
     * @return Start
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
     * @return Start
     */
    public function setInPassword($inPassword)
    {
        $this->inPassword = $inPassword;
        return $this;
    }

    /**
     * @return string
     */
    public function getInRecipientTableId()
    {
        return $this->inRecipientTableId;
    }

    /**
     * @param string $inRecipientTableId
     * @return Start
     */
    public function setInRecipientTableId($inRecipientTableId)
    {
        $this->inRecipientTableId = $inRecipientTableId;
        return $this;
    }

    /**
     * @return string
     */
    public function getInFileName()
    {
        return $this->inFileName;
    }

    /**
     * @param string $inFileName
     * @return Start
     */
    public function setInFileName($inFileName)
    {
        $this->inFileName = $inFileName;
        return $this;
    }

    /**
     * @return string
     */
    public function getInDataSourceType()
    {
        return $this->inDataSourceType;
    }

    /**
     * @param string $inDataSourceType
     * @return Start
     */
    public function setInDataSourceType($inDataSourceType)
    {
        $this->inDataSourceType = $inDataSourceType;
        return $this;
    }

    /**
     * @return string
     */
    public function getInDelimiter()
    {
        return $this->inDelimiter;
    }

    /**
     * @param string $inDelimiter
     * @return Start
     */
    public function setInDelimiter($inDelimiter)
    {
        $this->inDelimiter = $inDelimiter;
        return $this;
    }

    /**
     * @return TransactionType
     */
    public function getInTransactionType()
    {
        return $this->inTransactionType;
    }

    /**
     * @param TransactionType $inTransactionType
     * @return Start
     */
    public function setInTransactionType($inTransactionType)
    {
        $this->inTransactionType = $inTransactionType;
        return $this;
    }

    /**
     * @return string
     */
    public function getInUploadedTableName()
    {
        return $this->inUploadedTableName;
    }

    /**
     * @param string $inUploadedTableName
     * @return Start
     */
    public function setInUploadedTableName($inUploadedTableName)
    {
        $this->inUploadedTableName = $inUploadedTableName;
        return $this;
    }

    /**
     * @return string
     */
    public function getInSelectedPrimaryKey()
    {
        return $this->inSelectedPrimaryKey;
    }

    /**
     * @param string $inSelectedPrimaryKey
     * @return Start
     */
    public function setInSelectedPrimaryKey($inSelectedPrimaryKey)
    {
        $this->inSelectedPrimaryKey = $inSelectedPrimaryKey;
        return $this;
    }

    /**
     * @return UploadedFieldMappings
     */
    public function getInMapping()
    {
        return $this->inMapping;
    }

    /**
     * @param UploadedFieldMappings $inMapping
     * @return Start
     */
    public function setInMapping($inMapping)
    {
        $this->inMapping = $inMapping;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getInAllowDuplicatesAfterMerge()
    {
        return $this->inAllowDuplicatesAfterMerge;
    }

    /**
     * @param boolean $inAllowDuplicatesAfterMerge
     * @return Start
     */
    public function setInAllowDuplicatesAfterMerge($inAllowDuplicatesAfterMerge)
    {
        $this->inAllowDuplicatesAfterMerge = $inAllowDuplicatesAfterMerge;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getInAllowDuplicatesInUploadedFile()
    {
        return $this->inAllowDuplicatesInUploadedFile;
    }

    /**
     * @param boolean $inAllowDuplicatesInUploadedFile
     * @return Start
     */
    public function setInAllowDuplicatesInUploadedFile($inAllowDuplicatesInUploadedFile)
    {
        $this->inAllowDuplicatesInUploadedFile = $inAllowDuplicatesInUploadedFile;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getInIsDryRun()
    {
        return $this->inIsDryRun;
    }

    /**
     * @param boolean $inIsDryRun
     * @return Start
     */
    public function setInIsDryRun($inIsDryRun)
    {
        $this->inIsDryRun = $inIsDryRun;
        return $this;
    }

}
