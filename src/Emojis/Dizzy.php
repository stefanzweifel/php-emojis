<?php

namespace Wnx\Emojis\Emojis;

/**
 * Dizzy Emoji class.
 *
 * @version v13.1
 *
 **/
class Dizzy {

    public const SYMBOL = "💫";

    public const HEX = "1F4AB";

    public const CODE = "\u{1F4AB}";

    public const NAME = 'dizzy';

    public const GROUP = 'Smileys & Emotion';

    public const SUBGROUP = 'emotion';

    public const NAME_WITH_UNDERSCORES = 'dizzy';

    public const TAGS = 'star';

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
