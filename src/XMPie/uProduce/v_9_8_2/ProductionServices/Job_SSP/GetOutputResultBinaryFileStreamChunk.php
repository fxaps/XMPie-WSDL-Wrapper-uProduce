<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\Job_SSP;

class GetOutputResultBinaryFileStreamChunk
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
     * @var string $inJobID
     */
    protected $inJobID = null;

    /**
     * @var int $inResultIndex
     */
    protected $inResultIndex = null;

    /**
     * @var int $inOffset
     */
    protected $inOffset = null;

    /**
     * @var int $inoutCount
     */
    protected $inoutCount = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inJobID
     * @param int $inResultIndex
     * @param int $inOffset
     * @param int $inoutCount
     */
    public function __construct($inUsername = null, $inPassword = null, $inJobID = null, $inResultIndex = null, $inOffset = null, $inoutCount = null)
    {
        $this->inUsername = $inUsername;
        $this->inPassword = $inPassword;
        $this->inJobID = $inJobID;
        $this->inResultIndex = $inResultIndex;
        $this->inOffset = $inOffset;
        $this->inoutCount = $inoutCount;
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
     * @return GetOutputResultBinaryFileStreamChunk
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
     * @return GetOutputResultBinaryFileStreamChunk
     */
    public function setInPassword($inPassword)
    {
        $this->inPassword = $inPassword;
        return $this;
    }

    /**
     * @return string
     */
    public function getInJobID()
    {
        return $this->inJobID;
    }

    /**
     * @param string $inJobID
     * @return GetOutputResultBinaryFileStreamChunk
     */
    public function setInJobID($inJobID)
    {
        $this->inJobID = $inJobID;
        return $this;
    }

    /**
     * @return int
     */
    public function getInResultIndex()
    {
        return $this->inResultIndex;
    }

    /**
     * @param int $inResultIndex
     * @return GetOutputResultBinaryFileStreamChunk
     */
    public function setInResultIndex($inResultIndex)
    {
        $this->inResultIndex = $inResultIndex;
        return $this;
    }

    /**
     * @return int
     */
    public function getInOffset()
    {
        return $this->inOffset;
    }

    /**
     * @param int $inOffset
     * @return GetOutputResultBinaryFileStreamChunk
     */
    public function setInOffset($inOffset)
    {
        $this->inOffset = $inOffset;
        return $this;
    }

    /**
     * @return int
     */
    public function getInoutCount()
    {
        return $this->inoutCount;
    }

    /**
     * @param int $inoutCount
     * @return GetOutputResultBinaryFileStreamChunk
     */
    public function setInoutCount($inoutCount)
    {
        $this->inoutCount = $inoutCount;
        return $this;
    }

}
