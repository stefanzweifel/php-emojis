<?php

namespace Wnx\Emojis\Emojis;

/**
 * LeafFlutteringInWind Emoji class.
 *
 * @version v13.1
 *
 **/
class LeafFlutteringInWind {

    public const SYMBOL = "🍃";

    public const HEX = "1F343";

    public const CODE = "\u{1F343}";

    public const NAME = 'leaf fluttering in wind';

    public const GROUP = 'Animals & Nature';

    public const SUBGROUP = 'plant-other';

    public const NAME_WITH_UNDERSCORES = 'leaf_fluttering_in_wind';

    public const TAGS = 'leaf';

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
