<?php

namespace Wnx\Emojis\Emojis;

/**
 * PoutingFace Emoji class.
 *
 * @version v14.0
 *
 **/
class PoutingFace
{

    public const SYMBOL = "😡";

    public const HEX = "1F621";

    public const CODE = "\u{1F621}";

    public const NAME = 'pouting face';

    public const GROUP = 'Smileys & Emotion';

    public const SUBGROUP = 'face-negative';

    public const NAME_WITH_UNDERSCORES = 'pouting_face';

    public const TAGS = 'angry';

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
