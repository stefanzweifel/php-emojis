<?php

namespace Wnx\Emojis\Emojis;

/**
 * Eyes Emoji class.
 *
 * @version v13.1
 *
 **/
class Eyes
{
    public const SYMBOL = "👀";

    public const HEX = "1F440";

    public const CODE = "\u{1F440}";

    public const NAME = 'eyes';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'body-parts';

    public const NAME_WITH_UNDERSCORES = 'eyes';

    public const TAGS = 'look see watch';

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
