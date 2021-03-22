<?php

namespace Wnx\Emojis\Emojis;

/**
 * SleepingFace Emoji class.
 *
 * @version v13.1
 *
 **/
class SleepingFace {

    public const SYMBOL = "😴";

    public const HEX = "1F634";

    public const CODE = "\u{1F634}";

    public const NAME = 'sleeping face';

    public const GROUP = 'Smileys & Emotion';

    public const SUBGROUP = 'face-sleepy';

    public const NAME_WITH_UNDERSCORES = 'sleeping_face';

    public const TAGS = 'zzz';

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
