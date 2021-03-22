<?php

namespace Wnx\Emojis\Emojis;

/**
 * Collision Emoji class.
 *
 * @version v13.1
 *
 **/
class Collision {

    public const SYMBOL = "💥";

    public const HEX = "1F4A5";

    public const CODE = "\u{1F4A5}";

    public const NAME = 'collision';

    public const GROUP = 'Smileys & Emotion';

    public const SUBGROUP = 'emotion';

    public const NAME_WITH_UNDERSCORES = 'collision';

    public const TAGS = 'explode';

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
