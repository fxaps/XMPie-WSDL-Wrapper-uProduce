<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\PlanUtils_SSP;

class IsPlanSubsetOfComparedPlan
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
     * @var string $inPlanID
     */
    protected $inPlanID = null;

    /**
     * @var string $inComparedPlanID
     */
    protected $inComparedPlanID = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inPlanID
     * @param string $inComparedPlanID
     */
    public function __construct($inUsername = null, $inPassword = null, $inPlanID = null, $inComparedPlanID = null)
    {
        $this->inUsername = $inUsername;
        $this->inPassword = $inPassword;
        $this->inPlanID = $inPlanID;
        $this->inComparedPlanID = $inComparedPlanID;
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
     * @return IsPlanSubsetOfComparedPlan
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
     * @return IsPlanSubsetOfComparedPlan
     */
    public function setInPassword($inPassword)
    {
        $this->inPassword = $inPassword;
        return $this;
    }

    /**
     * @return string
     */
    public function getInPlanID()
    {
        return $this->inPlanID;
    }

    /**
     * @param string $inPlanID
     * @return IsPlanSubsetOfComparedPlan
     */
    public function setInPlanID($inPlanID)
    {
        $this->inPlanID = $inPlanID;
        return $this;
    }

    /**
     * @return string
     */
    public function getInComparedPlanID()
    {
        return $this->inComparedPlanID;
    }

    /**
     * @param string $inComparedPlanID
     * @return IsPlanSubsetOfComparedPlan
     */
    public function setInComparedPlanID($inComparedPlanID)
    {
        $this->inComparedPlanID = $inComparedPlanID;
        return $this;
    }

}
