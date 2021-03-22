<?php

namespace Wnx\Emojis\Emojis;

/**
 * SkullAndCrossbones Emoji class.
 *
 * @version v13.1
 *
 **/
class SkullAndCrossbones
{
    public const SYMBOL = "☠️";

    public const HEX = "2620 FE0F";

    public const CODE = "\u{2620}\u{FE0F}";

    public const NAME = 'skull and crossbones';

    public const GROUP = 'Smileys & Emotion';

    public const SUBGROUP = 'face-negative';

    public const NAME_WITH_UNDERSCORES = 'skull_and_crossbones';

    public const TAGS = 'danger pirate';

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
