<?php

namespace Wnx\Emojis\Emojis;

/**
 * SweatDroplets Emoji class.
 *
 * @version v14.0
 *
 **/
class SweatDroplets
{

    public const SYMBOL = "💦";

    public const HEX = "1F4A6";

    public const CODE = "\u{1F4A6}";

    public const NAME = 'sweat droplets';

    public const GROUP = 'Smileys & Emotion';

    public const SUBGROUP = 'emotion';

    public const NAME_WITH_UNDERSCORES = 'sweat_droplets';

    public const TAGS = 'water workout';

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
