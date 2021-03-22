<?php

namespace Wnx\Emojis\Emojis;

/**
 * KitchenKnife Emoji class.
 *
 * @version v13.1
 *
 **/
class KitchenKnife
{
    public const SYMBOL = "🔪";

    public const HEX = "1F52A";

    public const CODE = "\u{1F52A}";

    public const NAME = 'kitchen knife';

    public const GROUP = 'Food & Drink';

    public const SUBGROUP = 'dishware';

    public const NAME_WITH_UNDERSCORES = 'kitchen_knife';

    public const TAGS = 'cut chop';

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
