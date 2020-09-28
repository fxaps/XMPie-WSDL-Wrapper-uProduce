<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_8_2_3\Fabricator;


use XMPieWsdlClient\XMPie\uProduce\v_8_2_3\UndocumentedServices\XMPieInternalAPI_SSP\GetIDByGUID;
use XMPieWsdlClient\XMPie\uProduce\v_8_2_3\UndocumentedServices\XMPieInternalAPI_SSP\GetIDByGUIDResponse;


class FabricateXMPieInternalAPI_SSP
{
    private $paramAutoSet;

    /**
     * Constructor.
     *
     * @param array $paramAutoSet
     */
    public function __construct($paramAutoSet = [])
    {
        $this->setParamAutoSet($paramAutoSet);
    }


    /**
     * @return array
     */
    public function getParamAutoSet()
    {
        return $this->paramAutoSet;
    }


    /**
     * @param array $paramAutoSet
     */
    public function setParamAutoSet($paramAutoSet)
    {
        $this->paramAutoSet = $paramAutoSet;
    }


    /**
     * @param array $paramAutoSet
     * @return GetIDByGUID
     */
    public function GetIDByGUID($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetIDByGUID = new GetIDByGUID();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetIDByGUID, $methodName)) {
                $GetIDByGUID->$methodName($paramValue);
            }
        }
        return $GetIDByGUID;
    }


    /**
     * @param array $paramAutoSet
     * @return GetIDByGUIDResponse
     */
    public function GetIDByGUIDResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetIDByGUIDResponse = new GetIDByGUIDResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetIDByGUIDResponse, $methodName)) {
                $GetIDByGUIDResponse->$methodName($paramValue);
            }
        }
        return $GetIDByGUIDResponse;
    }


}

?>
