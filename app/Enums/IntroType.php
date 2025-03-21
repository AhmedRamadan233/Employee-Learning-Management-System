<?php

namespace App\Enums;

use App\Http\Enums\Enumable;

enum IntroType: string
{
    use Enumable;
    case Video = 'video';
    case Url = 'url';

    public function color(): string
    {
        return match ($this) {
            self::Video => 'bg-primary',
            self::Url => 'bg-secondary',
        };
    }
}
