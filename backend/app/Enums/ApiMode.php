<?php

namespace App\Enums;

enum ApiMode :string
{
    case Concrete = 'concrete';
    case Mock = 'mock';
}
