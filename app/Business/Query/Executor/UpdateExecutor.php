<?php

namespace App\Business\Query\Executor;

use App\Business\Interfaces\IQueryExecutor;
use App\Business\Query\Executor\QueryExecutor;
use App\Business\Query\QueryResponse;

class UpdateExecutor extends QueryExecutor implements IQueryExecutor
{
    public $executorIdentifier = 'UPDATE';

    public function execute($request, $query)
    {
        try
        {
            $result = $this->connection->update($this->query);
            $resultMessage = 'Query executed successfully! ' . $result . ' affected rows.'; // TODO: Use mix.
            
            $this->response = QueryResponse::getSuccess('UPDATE', $resultMessage);
        }
        catch (\Exception $exception)
        {
            $this->response = QueryResponse::getError($exception);
        }
    }
}