<?php

namespace App\Enums;

enum Period :string
{
    case ALL = "0";
    case YEARLY = "1";
    case MONTHLY = "2";
    case WEEKLY = "3";
    case DAILY = "4";
}
