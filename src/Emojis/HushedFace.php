<?php

namespace Wnx\Emojis\Emojis;

/**
 * HushedFace Emoji class.
 *
 * @version v13.1
 *
 **/
class HushedFace {

    public const SYMBOL = "😯";

    public const HEX = "1F62F";

    public const CODE = "\u{1F62F}";

    public const NAME = 'hushed face';

    public const GROUP = 'Smileys & Emotion';

    public const SUBGROUP = 'face-concerned';

    public const NAME_WITH_UNDERSCORES = 'hushed_face';

    public const TAGS = 'silence speechless';

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
