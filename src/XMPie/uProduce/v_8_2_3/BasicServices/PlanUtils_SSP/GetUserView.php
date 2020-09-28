<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_8_2_3\BasicServices\PlanUtils_SSP;

class GetUserView
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
     * @var string $inUserViewName
     */
    protected $inUserViewName = null;

    /**
     * @var string $inIOType
     */
    protected $inIOType = null;

    /**
     * @var boolean $inTrivialPlan
     */
    protected $inTrivialPlan = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inPlanID
     * @param string $inUserViewName
     * @param string $inIOType
     * @param boolean $inTrivialPlan
     */
    public function __construct($inUsername = null, $inPassword = null, $inPlanID = null, $inUserViewName = null, $inIOType = null, $inTrivialPlan = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inPlanID = $inPlanID;
      $this->inUserViewName = $inUserViewName;
      $this->inIOType = $inIOType;
      $this->inTrivialPlan = $inTrivialPlan;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_8_2_3\BasicServices\PlanUtils_SSP\GetUserView
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_8_2_3\BasicServices\PlanUtils_SSP\GetUserView
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_8_2_3\BasicServices\PlanUtils_SSP\GetUserView
     */
    public function setInPlanID($inPlanID)
    {
      $this->inPlanID = $inPlanID;
      return $this;
    }

    /**
     * @return string
     */
    public function getInUserViewName()
    {
      return $this->inUserViewName;
    }

    /**
     * @param string $inUserViewName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_8_2_3\BasicServices\PlanUtils_SSP\GetUserView
     */
    public function setInUserViewName($inUserViewName)
    {
      $this->inUserViewName = $inUserViewName;
      return $this;
    }

    /**
     * @return string
     */
    public function getInIOType()
    {
      return $this->inIOType;
    }

    /**
     * @param string $inIOType
     * @return \XMPieWsdlClient\XMPie\uProduce\v_8_2_3\BasicServices\PlanUtils_SSP\GetUserView
     */
    public function setInIOType($inIOType)
    {
      $this->inIOType = $inIOType;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInTrivialPlan()
    {
      return $this->inTrivialPlan;
    }

    /**
     * @param boolean $inTrivialPlan
     * @return \XMPieWsdlClient\XMPie\uProduce\v_8_2_3\BasicServices\PlanUtils_SSP\GetUserView
     */
    public function setInTrivialPlan($inTrivialPlan)
    {
      $this->inTrivialPlan = $inTrivialPlan;
      return $this;
    }

}
