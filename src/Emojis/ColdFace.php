<?php

namespace Wnx\Emojis\Emojis;

/**
 * ColdFace Emoji class.
 *
 * @version v13.1
 *
 **/
class ColdFace
{
    public const SYMBOL = "🥶";

    public const HEX = "1F976";

    public const CODE = "\u{1F976}";

    public const NAME = 'cold face';

    public const GROUP = 'Smileys & Emotion';

    public const SUBGROUP = 'face-unwell';

    public const NAME_WITH_UNDERSCORES = 'cold_face';

    public const TAGS = 'freezing ice';

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
