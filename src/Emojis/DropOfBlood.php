<?php

namespace Wnx\Emojis\Emojis;

/**
 * DropOfBlood Emoji class.
 *
 * @version v13.1
 *
 **/
class DropOfBlood
{
    public const SYMBOL = "🩸";

    public const HEX = "1FA78";

    public const CODE = "\u{1FA78}";

    public const NAME = 'drop of blood';

    public const GROUP = 'Objects';

    public const SUBGROUP = 'medical';

    public const NAME_WITH_UNDERSCORES = 'drop_of_blood';

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
