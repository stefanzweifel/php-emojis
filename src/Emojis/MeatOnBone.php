<?php

namespace Wnx\Emojis\Emojis;

/**
 * MeatOnBone Emoji class.
 *
 * @version v14.0
 *
 **/
class MeatOnBone
{

    public const SYMBOL = "🍖";

    public const HEX = "1F356";

    public const CODE = "\u{1F356}";

    public const NAME = 'meat on bone';

    public const GROUP = 'Food & Drink';

    public const SUBGROUP = 'food-prepared';

    public const NAME_WITH_UNDERSCORES = 'meat_on_bone';

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
