<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_25_0\BasicServices\Campaign_SSP;

class DataSourceMapping
{

    /**
     * @var IDMapping $ID
     */
    protected $ID = null;

    /**
     * @param IDMapping $ID
     */
    public function __construct($ID = null)
    {
      $this->ID = $ID;
    }

    /**
     * @return IDMapping
     */
    public function getID()
    {
      return $this->ID;
    }

    /**
     * @param IDMapping $ID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\BasicServices\Campaign_SSP\DataSourceMapping
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

}
