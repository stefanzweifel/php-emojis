<?php

namespace Wnx\Emojis\Emojis;

/**
 * ConfusedFace Emoji class.
 *
 * @version v13.1
 *
 **/
class ConfusedFace {

    public const SYMBOL = "😕";

    public const HEX = "1F615";

    public const CODE = "\u{1F615}";

    public const NAME = 'confused face';

    public const GROUP = 'Smileys & Emotion';

    public const SUBGROUP = 'face-concerned';

    public const NAME_WITH_UNDERSCORES = 'confused_face';

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