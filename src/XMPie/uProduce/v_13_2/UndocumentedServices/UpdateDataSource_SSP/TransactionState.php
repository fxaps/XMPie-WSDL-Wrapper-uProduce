<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_13_2\UndocumentedServices\UpdateDataSource_SSP;

class TransactionState
{
    const __default = 'NotStarted';
    const NotStarted = 'NotStarted';
    const InProcess = 'InProcess';
    const AwaitsCommit = 'AwaitsCommit';
    const Committing = 'Committing';
    const Done = 'Done';
    const Canceled = 'Canceled';
    const Error = 'Error';


}
