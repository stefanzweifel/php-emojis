<?php

namespace Wnx\Emojis\Emojis;

/**
 * Battery Emoji class.
 *
 * @version v14.0
 *
 **/
class Battery
{

    public const SYMBOL = "🔋";

    public const HEX = "1F50B";

    public const CODE = "\u{1F50B}";

    public const NAME = 'battery';

    public const GROUP = 'Objects';

    public const SUBGROUP = 'computer';

    public const NAME_WITH_UNDERSCORES = 'battery';

    public const TAGS = 'power';

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
