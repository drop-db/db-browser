<?php

namespace App\Business\Query\Executors;

use App\Business\Query\ExecutorConstants;
use App\Business\Query\QueryExecutor;

/**
* Executor for Queries of insert type.
*
* @package App\Business\Query\Executors
*/
class InsertExecutor extends QueryExecutor
{
    /**
    * Gets the keyword of the type of the Query of the Executor.
    *
    * @return string
    */
    public function getTypeKeywords()
    {
        return ExecutorConstants::KEYWORD_INSERT;
    }

    /**
    * Executes Query and sets the response of execution.
    */
    public function execute()
    {
        $result = $this->connection->insert($this->query);

        $responseMessage = "Query executed successfully! $result rows inserted.";

        $successResponse = $this->getSuccessResponse();
        $successResponse->setMessage($responseMessage);

        $this->response = $successResponse->getJson();
    }
}
