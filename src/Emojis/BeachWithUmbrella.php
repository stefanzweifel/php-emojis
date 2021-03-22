<?php

namespace Wnx\Emojis\Emojis;

/**
 * BeachWithUmbrella Emoji class.
 *
 * @version v13.1
 *
 **/
class BeachWithUmbrella
{
    public const SYMBOL = "🏖️";

    public const HEX = "1F3D6 FE0F";

    public const CODE = "\u{1F3D6}\u{FE0F}";

    public const NAME = 'beach with umbrella';

    public const GROUP = 'Travel & Places';

    public const SUBGROUP = 'place-geographic';

    public const NAME_WITH_UNDERSCORES = 'beach_with_umbrella';

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
