<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\Document_SSP;

class CreateResourceThumbnailToTempStorageResponse
{

    /**
     * @var string $CreateResourceThumbnailToTempStorageResult
     */
    protected $CreateResourceThumbnailToTempStorageResult = null;

    /**
     * @param string $CreateResourceThumbnailToTempStorageResult
     */
    public function __construct($CreateResourceThumbnailToTempStorageResult = null)
    {
        $this->CreateResourceThumbnailToTempStorageResult = $CreateResourceThumbnailToTempStorageResult;
    }

    /**
     * @return string
     */
    public function getCreateResourceThumbnailToTempStorageResult()
    {
        return $this->CreateResourceThumbnailToTempStorageResult;
    }

    /**
     * @param string $CreateResourceThumbnailToTempStorageResult
     * @return CreateResourceThumbnailToTempStorageResponse
     */
    public function setCreateResourceThumbnailToTempStorageResult($CreateResourceThumbnailToTempStorageResult)
    {
        $this->CreateResourceThumbnailToTempStorageResult = $CreateResourceThumbnailToTempStorageResult;
        return $this;
    }

}
