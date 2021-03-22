<?php

namespace Wnx\Emojis\Emojis;

/**
 * ShushingFace Emoji class.
 *
 * @version v13.1
 *
 **/
class ShushingFace {

    public const SYMBOL = "🤫";

    public const HEX = "1F92B";

    public const CODE = "\u{1F92B}";

    public const NAME = 'shushing face';

    public const GROUP = 'Smileys & Emotion';

    public const SUBGROUP = 'face-hand';

    public const NAME_WITH_UNDERSCORES = 'shushing_face';

    public const TAGS = 'silence quiet';

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
