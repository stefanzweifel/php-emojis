<?php

namespace Wnx\Emojis\Emojis;

/**
 * Megaphone Emoji class.
 *
 * @version v13.1
 *
 **/
class Megaphone
{
    public const SYMBOL = "📣";

    public const HEX = "1F4E3";

    public const CODE = "\u{1F4E3}";

    public const NAME = 'megaphone';

    public const GROUP = 'Objects';

    public const SUBGROUP = 'sound';

    public const NAME_WITH_UNDERSCORES = 'megaphone';

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
