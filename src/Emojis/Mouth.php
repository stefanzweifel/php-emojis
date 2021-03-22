<?php

namespace Wnx\Emojis\Emojis;

/**
 * Mouth Emoji class.
 *
 * @version v13.1
 *
 **/
class Mouth
{
    public const SYMBOL = "👄";

    public const HEX = "1F444";

    public const CODE = "\u{1F444}";

    public const NAME = 'mouth';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'body-parts';

    public const NAME_WITH_UNDERSCORES = 'mouth';

    public const TAGS = 'kiss';

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
