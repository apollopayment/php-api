<?php namespace ApolloPayment\Enums;

enum TransactionStatus : string
{
    case Processed = "processed";
    case Error = "error";
    case Rejected = "rejected";
    case Pending = "pending";
}
