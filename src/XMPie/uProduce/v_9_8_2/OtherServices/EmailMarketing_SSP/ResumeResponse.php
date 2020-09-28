<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\OtherServices\EmailMarketing_SSP;

class ResumeResponse
{

    /**
     * @var string $ResumeResult
     */
    protected $ResumeResult = null;

    /**
     * @param string $ResumeResult
     */
    public function __construct($ResumeResult = null)
    {
        $this->ResumeResult = $ResumeResult;
    }

    /**
     * @return string
     */
    public function getResumeResult()
    {
        return $this->ResumeResult;
    }

    /**
     * @param string $ResumeResult
     * @return ResumeResponse
     */
    public function setResumeResult($ResumeResult)
    {
        $this->ResumeResult = $ResumeResult;
        return $this;
    }

}
