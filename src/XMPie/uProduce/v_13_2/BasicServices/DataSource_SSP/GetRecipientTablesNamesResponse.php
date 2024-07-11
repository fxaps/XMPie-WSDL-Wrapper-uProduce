<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_13_2\BasicServices\DataSource_SSP;

class GetRecipientTablesNamesResponse
{

    /**
     * @var ArrayOfString $GetRecipientTablesNamesResult
     */
    protected $GetRecipientTablesNamesResult = null;

    /**
     * @param ArrayOfString $GetRecipientTablesNamesResult
     */
    public function __construct($GetRecipientTablesNamesResult = null)
    {
      $this->GetRecipientTablesNamesResult = $GetRecipientTablesNamesResult;
    }

    /**
     * @return ArrayOfString
     */
    public function getGetRecipientTablesNamesResult()
    {
      return $this->GetRecipientTablesNamesResult;
    }

    /**
     * @param ArrayOfString $GetRecipientTablesNamesResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_13_2\BasicServices\DataSource_SSP\GetRecipientTablesNamesResponse
     */
    public function setGetRecipientTablesNamesResult($GetRecipientTablesNamesResult)
    {
      $this->GetRecipientTablesNamesResult = $GetRecipientTablesNamesResult;
      return $this;
    }

}
