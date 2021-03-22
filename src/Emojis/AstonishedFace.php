<?php

namespace Wnx\Emojis\Emojis;

/**
 * AstonishedFace Emoji class.
 *
 * @version v13.1
 *
 **/
class AstonishedFace {

    public const SYMBOL = "😲";

    public const HEX = "1F632";

    public const CODE = "\u{1F632}";

    public const NAME = 'astonished face';

    public const GROUP = 'Smileys & Emotion';

    public const SUBGROUP = 'face-concerned';

    public const NAME_WITH_UNDERSCORES = 'astonished_face';

    public const TAGS = 'amazed gasp';

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
