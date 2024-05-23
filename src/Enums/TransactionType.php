<?php namespace ApolloPayment\Enums;

enum TransactionType : string
{
    case Withdrawal = 'withdrawal';
    case Deposit = 'deposit';
}
