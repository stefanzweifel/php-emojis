<?php

namespace Wnx\Emojis\Emojis;

/**
 * FrowningFace Emoji class.
 *
 * @version v14.0
 *
 **/
class FrowningFace
{

    public const SYMBOL = "☹️";

    public const HEX = "2639 FE0F";

    public const CODE = "\u{2639}\u{FE0F}";

    public const NAME = 'frowning face';

    public const GROUP = 'Smileys & Emotion';

    public const SUBGROUP = 'face-concerned';

    public const NAME_WITH_UNDERSCORES = 'frowning_face';

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
