<?php

namespace Wnx\Emojis\Emojis;

/**
 * TeacupWithoutHandle Emoji class.
 *
 * @version v14.0
 *
 **/
class TeacupWithoutHandle
{

    public const SYMBOL = "🍵";

    public const HEX = "1F375";

    public const CODE = "\u{1F375}";

    public const NAME = 'teacup without handle';

    public const GROUP = 'Food & Drink';

    public const SUBGROUP = 'drink';

    public const NAME_WITH_UNDERSCORES = 'teacup_without_handle';

    public const TAGS = 'green breakfast';

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
