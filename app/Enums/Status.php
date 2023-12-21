<?php

namespace App\Enums;

enum Status: string
{
    case NEW = 'new';
    case IN_PROGRESS = 'in_progress';
    case DONE = 'done';
}
