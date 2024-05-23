<?php namespace ApolloPayment\Extends;

use ApolloPayment\Instance;

class Method
{
    protected Instance $instance;

    public function __construct(Instance $instance)
    {
        $this->instance = $instance;
        return $this;
    }
}
