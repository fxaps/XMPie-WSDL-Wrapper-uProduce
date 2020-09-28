<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\OtherServices\GeneralUtils_SSP;

class CalluProduceAPIViaXmlResponse
{

    /**
     * @var string $CalluProduceAPIViaXmlResult
     */
    protected $CalluProduceAPIViaXmlResult = null;

    /**
     * @param string $CalluProduceAPIViaXmlResult
     */
    public function __construct($CalluProduceAPIViaXmlResult = null)
    {
        $this->CalluProduceAPIViaXmlResult = $CalluProduceAPIViaXmlResult;
    }

    /**
     * @return string
     */
    public function getCalluProduceAPIViaXmlResult()
    {
        return $this->CalluProduceAPIViaXmlResult;
    }

    /**
     * @param string $CalluProduceAPIViaXmlResult
     * @return CalluProduceAPIViaXmlResponse
     */
    public function setCalluProduceAPIViaXmlResult($CalluProduceAPIViaXmlResult)
    {
        $this->CalluProduceAPIViaXmlResult = $CalluProduceAPIViaXmlResult;
        return $this;
    }

}
