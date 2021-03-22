<?php

namespace Wnx\Emojis\Emojis;

/**
 * Boy Emoji class.
 *
 * @version v13.1
 *
 **/
class Boy
{
    public const SYMBOL = "👦";

    public const HEX = "1F466";

    public const CODE = "\u{1F466}";

    public const NAME = 'boy';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'person';

    public const NAME_WITH_UNDERSCORES = 'boy';

    public const TAGS = 'child';

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
