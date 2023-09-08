<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_12_2\UndocumentedServices\UpdateDataSource_SSP;

class CommitResponse
{

    /**
     * @var StatusStructure $CommitResult
     */
    protected $CommitResult = null;

    /**
     * @param StatusStructure $CommitResult
     */
    public function __construct($CommitResult = null)
    {
      $this->CommitResult = $CommitResult;
    }

    /**
     * @return StatusStructure
     */
    public function getCommitResult()
    {
      return $this->CommitResult;
    }

    /**
     * @param StatusStructure $CommitResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_2\UndocumentedServices\UpdateDataSource_SSP\CommitResponse
     */
    public function setCommitResult($CommitResult)
    {
      $this->CommitResult = $CommitResult;
      return $this;
    }

}
