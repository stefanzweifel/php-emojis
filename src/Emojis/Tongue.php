<?php

namespace Wnx\Emojis\Emojis;

/**
 * Tongue Emoji class.
 *
 * @version v13.1
 *
 **/
class Tongue
{
    public const SYMBOL = "👅";

    public const HEX = "1F445";

    public const CODE = "\u{1F445}";

    public const NAME = 'tongue';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'body-parts';

    public const NAME_WITH_UNDERSCORES = 'tongue';

    public const TAGS = 'taste';

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
