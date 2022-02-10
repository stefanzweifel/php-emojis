<?php

namespace Wnx\Emojis\Emojis;

/**
 * MusicalKeyboard Emoji class.
 *
 * @version v14.0
 *
 **/
class MusicalKeyboard
{

    public const SYMBOL = "🎹";

    public const HEX = "1F3B9";

    public const CODE = "\u{1F3B9}";

    public const NAME = 'musical keyboard';

    public const GROUP = 'Objects';

    public const SUBGROUP = 'musical-instrument';

    public const NAME_WITH_UNDERSCORES = 'musical_keyboard';

    public const TAGS = 'piano';

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
