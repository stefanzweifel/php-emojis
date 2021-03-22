<?php

namespace Wnx\Emojis\Emojis;

/**
 * Lungs Emoji class.
 *
 * @version v13.1
 *
 **/
class Lungs
{
    public const SYMBOL = "🫁";

    public const HEX = "1FAC1";

    public const CODE = "\u{1FAC1}";

    public const NAME = 'lungs';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'body-parts';

    public const NAME_WITH_UNDERSCORES = 'lungs';

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
