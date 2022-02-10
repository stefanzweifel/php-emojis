<?php

namespace Wnx\Emojis\Emojis;

/**
 * SantaClaus Emoji class.
 *
 * @version v14.0
 *
 **/
class SantaClaus
{

    public const SYMBOL = "🎅";

    public const HEX = "1F385";

    public const CODE = "\u{1F385}";

    public const NAME = 'Santa Claus';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'person-fantasy';

    public const NAME_WITH_UNDERSCORES = 'Santa_Claus';

    public const TAGS = 'christmas';

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
