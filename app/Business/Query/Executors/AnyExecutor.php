<?php

namespace App\Business\Query\Executors;

use App\Business\Query\ExecutorConstants;

/**
* Executor for Queries of unknown type.
*
* @package App\Business\Query\Executors
*/
class AnyExecutor extends BaseSelectExecutor
{
    /**
    * Gets the keyword of the type of the Query of the Executor.
    *
    * @return string
    */
    public function getTypeKeywords()
    {
        return ExecutorConstants::KEYWORD_ANY;
    }
}
