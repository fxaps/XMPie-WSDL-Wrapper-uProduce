<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\OtherServices\SystemManager_SSP;

class CloudGatewayConfiguration
{

    /**
     * @var string $Configuration
     */
    protected $Configuration = null;

    /**
     * @var ArrayOfProperty $Settings
     */
    protected $Settings = null;

    /**
     * @var ArrayOfCloudSubscription $Subscriptions
     */
    protected $Subscriptions = null;


    public function __construct()
    {

    }

    /**
     * @return string
     */
    public function getConfiguration()
    {
        return $this->Configuration;
    }

    /**
     * @param string $Configuration
     * @return CloudGatewayConfiguration
     */
    public function setConfiguration($Configuration)
    {
        $this->Configuration = $Configuration;
        return $this;
    }

    /**
     * @return ArrayOfProperty
     */
    public function getSettings()
    {
        return $this->Settings;
    }

    /**
     * @param ArrayOfProperty $Settings
     * @return CloudGatewayConfiguration
     */
    public function setSettings($Settings)
    {
        $this->Settings = $Settings;
        return $this;
    }

    /**
     * @return ArrayOfCloudSubscription
     */
    public function getSubscriptions()
    {
        return $this->Subscriptions;
    }

    /**
     * @param ArrayOfCloudSubscription $Subscriptions
     * @return CloudGatewayConfiguration
     */
    public function setSubscriptions($Subscriptions)
    {
        $this->Subscriptions = $Subscriptions;
        return $this;
    }

}
