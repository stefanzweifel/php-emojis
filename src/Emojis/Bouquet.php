<?php

namespace Wnx\Emojis\Emojis;

/**
 * Bouquet Emoji class.
 *
 * @version v13.1
 *
 **/
class Bouquet
{
    public const SYMBOL = "💐";

    public const HEX = "1F490";

    public const CODE = "\u{1F490}";

    public const NAME = 'bouquet';

    public const GROUP = 'Animals & Nature';

    public const SUBGROUP = 'plant-flower';

    public const NAME_WITH_UNDERSCORES = 'bouquet';

    public const TAGS = 'flowers';

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
