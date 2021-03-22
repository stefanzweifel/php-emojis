<?php

namespace Wnx\Emojis\Emojis;

/**
 * AngryFace Emoji class.
 *
 * @version v13.1
 *
 **/
class AngryFace {

    public const SYMBOL = "😠";

    public const HEX = "1F620";

    public const CODE = "\u{1F620}";

    public const NAME = 'angry face';

    public const GROUP = 'Smileys & Emotion';

    public const SUBGROUP = 'face-negative';

    public const NAME_WITH_UNDERSCORES = 'angry_face';

    public const TAGS = 'mad annoyed';

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
