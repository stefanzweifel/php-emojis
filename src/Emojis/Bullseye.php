<?php

namespace Wnx\Emojis\Emojis;

/**
 * Bullseye Emoji class.
 *
 * @version v13.1
 *
 **/
class Bullseye
{
    public const SYMBOL = "🎯";

    public const HEX = "1F3AF";

    public const CODE = "\u{1F3AF}";

    public const NAME = 'bullseye';

    public const GROUP = 'Activities';

    public const SUBGROUP = 'game';

    public const NAME_WITH_UNDERSCORES = 'bullseye';

    public const TAGS = 'target';

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
