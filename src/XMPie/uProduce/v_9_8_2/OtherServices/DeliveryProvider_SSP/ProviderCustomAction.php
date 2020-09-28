<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\OtherServices\DeliveryProvider_SSP;

class ProviderCustomAction
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
     * @var string $inDeliveryProviderID
     */
    protected $inDeliveryProviderID = null;

    /**
     * @var string $action
     */
    protected $action = null;

    /**
     * @var string $actionParams
     */
    protected $actionParams = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inDeliveryProviderID
     * @param string $action
     * @param string $actionParams
     */
    public function __construct($inUsername = null, $inPassword = null, $inDeliveryProviderID = null, $action = null, $actionParams = null)
    {
        $this->inUsername = $inUsername;
        $this->inPassword = $inPassword;
        $this->inDeliveryProviderID = $inDeliveryProviderID;
        $this->action = $action;
        $this->actionParams = $actionParams;
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
     * @return ProviderCustomAction
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
     * @return ProviderCustomAction
     */
    public function setInPassword($inPassword)
    {
        $this->inPassword = $inPassword;
        return $this;
    }

    /**
     * @return string
     */
    public function getInDeliveryProviderID()
    {
        return $this->inDeliveryProviderID;
    }

    /**
     * @param string $inDeliveryProviderID
     * @return ProviderCustomAction
     */
    public function setInDeliveryProviderID($inDeliveryProviderID)
    {
        $this->inDeliveryProviderID = $inDeliveryProviderID;
        return $this;
    }

    /**
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @param string $action
     * @return ProviderCustomAction
     */
    public function setAction($action)
    {
        $this->action = $action;
        return $this;
    }

    /**
     * @return string
     */
    public function getActionParams()
    {
        return $this->actionParams;
    }

    /**
     * @param string $actionParams
     * @return ProviderCustomAction
     */
    public function setActionParams($actionParams)
    {
        $this->actionParams = $actionParams;
        return $this;
    }

}
