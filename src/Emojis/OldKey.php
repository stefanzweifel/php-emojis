<?php

namespace Wnx\Emojis\Emojis;

/**
 * OldKey Emoji class.
 *
 * @version v13.1
 *
 **/
class OldKey
{
    public const SYMBOL = "🗝️";

    public const HEX = "1F5DD FE0F";

    public const CODE = "\u{1F5DD}\u{FE0F}";

    public const NAME = 'old key';

    public const GROUP = 'Objects';

    public const SUBGROUP = 'lock';

    public const NAME_WITH_UNDERSCORES = 'old_key';

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
