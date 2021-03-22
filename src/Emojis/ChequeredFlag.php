<?php

namespace Wnx\Emojis\Emojis;

/**
 * ChequeredFlag Emoji class.
 *
 * @version v13.1
 *
 **/
class ChequeredFlag
{
    public const SYMBOL = "🏁";

    public const HEX = "1F3C1";

    public const CODE = "\u{1F3C1}";

    public const NAME = 'chequered flag';

    public const GROUP = 'Flags';

    public const SUBGROUP = 'flag';

    public const NAME_WITH_UNDERSCORES = 'chequered_flag';

    public const TAGS = 'milestone finish';

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
