<?php

namespace Wnx\Emojis\Emojis;

/**
 * Alien Emoji class.
 *
 * @version v14.0
 *
 **/
class Alien
{

    public const SYMBOL = "👽";

    public const HEX = "1F47D";

    public const CODE = "\u{1F47D}";

    public const NAME = 'alien';

    public const GROUP = 'Smileys & Emotion';

    public const SUBGROUP = 'face-costume';

    public const NAME_WITH_UNDERSCORES = 'alien';

    public const TAGS = 'ufo';

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
