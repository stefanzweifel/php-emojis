<?php

namespace Wnx\Emojis\Emojis;

/**
 * PleadingFace Emoji class.
 *
 * @version v14.0
 *
 **/
class PleadingFace
{

    public const SYMBOL = "🥺";

    public const HEX = "1F97A";

    public const CODE = "\u{1F97A}";

    public const NAME = 'pleading face';

    public const GROUP = 'Smileys & Emotion';

    public const SUBGROUP = 'face-concerned';

    public const NAME_WITH_UNDERSCORES = 'pleading_face';

    public const TAGS = 'puppy eyes';

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
