<?php

namespace Wnx\Emojis\Emojis;

/**
 * DroolingFace Emoji class.
 *
 * @version v13.1
 *
 **/
class DroolingFace {

    public const SYMBOL = "🤤";

    public const HEX = "1F924";

    public const CODE = "\u{1F924}";

    public const NAME = 'drooling face';

    public const GROUP = 'Smileys & Emotion';

    public const SUBGROUP = 'face-sleepy';

    public const NAME_WITH_UNDERSCORES = 'drooling_face';

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
