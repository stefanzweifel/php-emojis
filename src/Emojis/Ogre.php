<?php

namespace Wnx\Emojis\Emojis;

/**
 * Ogre Emoji class.
 *
 * @version v14.0
 *
 **/
class Ogre
{

    public const SYMBOL = "👹";

    public const HEX = "1F479";

    public const CODE = "\u{1F479}";

    public const NAME = 'ogre';

    public const GROUP = 'Smileys & Emotion';

    public const SUBGROUP = 'face-costume';

    public const NAME_WITH_UNDERSCORES = 'ogre';

    public const TAGS = 'monster';

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
