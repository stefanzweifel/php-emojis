<?php

namespace Wnx\Emojis\Emojis;

/**
 * CounterclockwiseArrowsButton Emoji class.
 *
 * @version v14.0
 *
 **/
class CounterclockwiseArrowsButton
{

    public const SYMBOL = "🔄";

    public const HEX = "1F504";

    public const CODE = "\u{1F504}";

    public const NAME = 'counterclockwise arrows button';

    public const GROUP = 'Symbols';

    public const SUBGROUP = 'arrow';

    public const NAME_WITH_UNDERSCORES = 'counterclockwise_arrows_button';

    public const TAGS = 'sync';

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
