<?php

namespace ApolloPayment\Enums;

enum TransactionStage: string
{
    case Deposit = 'DEPOSIT';
    case Withdrawal = 'WITHDRAWAL';
}
