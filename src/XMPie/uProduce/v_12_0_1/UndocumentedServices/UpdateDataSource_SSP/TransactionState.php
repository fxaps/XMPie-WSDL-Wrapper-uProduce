<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_12_0_1\UndocumentedServices\UpdateDataSource_SSP;

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