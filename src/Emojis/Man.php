<?php

namespace Wnx\Emojis\Emojis;

/**
 * Man Emoji class.
 *
 * @version v14.0
 *
 **/
class Man
{

    public const SYMBOL = "👨";

    public const HEX = "1F468";

    public const CODE = "\u{1F468}";

    public const NAME = 'man';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'person';

    public const NAME_WITH_UNDERSCORES = 'man';

    public const TAGS = 'mustache father dad';

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
