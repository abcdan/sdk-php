<?php

namespace PlugAndPay\Sdk\Enum;

class PaymentStatus
{
    public const CREDIT_INVOICE = 'credit_invoice';
    public const CREDITED = 'credited';
    public const OPEN = 'open';
    public const PAID = 'paid';
    public const PROCESSING = 'processing';
    public const REVERSED = 'reversed';

    public const CASES = [
        self::CREDIT_INVOICE,
        self::CREDITED,
        self::OPEN,
        self::PAID,
        self::PROCESSING,
        self::REVERSED,
    ];
}