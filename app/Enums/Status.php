<?php

namespace App\Enums;

enum Status: string
{
    public const NEW = 'new';
    public const IN_PROGRESS = 'in_progress';
    public const DONE = 'done';
}
