<?php

namespace Wnx\Emojis\Emojis;

/**
 * DisappointedFace Emoji class.
 *
 * @version v14.0
 *
 **/
class DisappointedFace
{

    public const SYMBOL = "😞";

    public const HEX = "1F61E";

    public const CODE = "\u{1F61E}";

    public const NAME = 'disappointed face';

    public const GROUP = 'Smileys & Emotion';

    public const SUBGROUP = 'face-concerned';

    public const NAME_WITH_UNDERSCORES = 'disappointed_face';

    public const TAGS = 'sad';

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
