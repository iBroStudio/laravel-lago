<?php

namespace IBroStudio\Lago\Enums;

enum PaymentProviders: string
{
    case ADYEN = 'adyen';
    case GOCARDLESS = 'gocardless';
    case STRIPE = 'stripe';

}
