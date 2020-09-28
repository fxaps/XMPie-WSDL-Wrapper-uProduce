<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\PlanUtils_SSP;

class PlanFunctionParameter
{

    /**
     * @var string $m_Name
     */
    protected $m_Name = null;

    /**
     * @var string $m_Type
     */
    protected $m_Type = null;

    /**
     * @var string $m_Comment
     */
    protected $m_Comment = null;


    public function __construct()
    {

    }

    /**
     * @return string
     */
    public function getM_Name()
    {
        return $this->m_Name;
    }

    /**
     * @param string $m_Name
     * @return PlanFunctionParameter
     */
    public function setM_Name($m_Name)
    {
        $this->m_Name = $m_Name;
        return $this;
    }

    /**
     * @return string
     */
    public function getM_Type()
    {
        return $this->m_Type;
    }

    /**
     * @param string $m_Type
     * @return PlanFunctionParameter
     */
    public function setM_Type($m_Type)
    {
        $this->m_Type = $m_Type;
        return $this;
    }

    /**
     * @return string
     */
    public function getM_Comment()
    {
        return $this->m_Comment;
    }

    /**
     * @param string $m_Comment
     * @return PlanFunctionParameter
     */
    public function setM_Comment($m_Comment)
    {
        $this->m_Comment = $m_Comment;
        return $this;
    }

}
