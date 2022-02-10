<?php

namespace Wnx\Emojis\Emojis;

/**
 * MartialArtsUniform Emoji class.
 *
 * @version v14.0
 *
 **/
class MartialArtsUniform
{

    public const SYMBOL = "🥋";

    public const HEX = "1F94B";

    public const CODE = "\u{1F94B}";

    public const NAME = 'martial arts uniform';

    public const GROUP = 'Activities';

    public const SUBGROUP = 'sport';

    public const NAME_WITH_UNDERSCORES = 'martial_arts_uniform';

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
