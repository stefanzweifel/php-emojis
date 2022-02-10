<?php

namespace Wnx\Emojis\Emojis;

/**
 * HeartExclamation Emoji class.
 *
 * @version v14.0
 *
 **/
class HeartExclamation
{

    public const SYMBOL = "❣️";

    public const HEX = "2763 FE0F";

    public const CODE = "\u{2763}\u{FE0F}";

    public const NAME = 'heart exclamation';

    public const GROUP = 'Smileys & Emotion';

    public const SUBGROUP = 'emotion';

    public const NAME_WITH_UNDERSCORES = 'heart_exclamation';

    public const TAGS = '';

    public function symbol(): string
    {
        return self::SYMBOL;
    }

    public function hex(): string
    {
        return self::HEX;
    }

    public function name(): string
    {
        return self::NAME;
    }

    public function group(): string
    {
        return self::GROUP;
    }

    public function subgroup(): string
    {
        return self::SUBGROUP;
    }

    public function name_with_underscores(): string
    {
        return self::NAME_WITH_UNDERSCORES;
    }

    public function tags(): string
    {
        return self::TAGS;
    }
}
