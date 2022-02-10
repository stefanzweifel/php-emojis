<?php

namespace Wnx\Emojis\Emojis;

/**
 * HeartWithArrow Emoji class.
 *
 * @version v14.0
 *
 **/
class HeartWithArrow
{

    public const SYMBOL = "💘";

    public const HEX = "1F498";

    public const CODE = "\u{1F498}";

    public const NAME = 'heart with arrow';

    public const GROUP = 'Smileys & Emotion';

    public const SUBGROUP = 'emotion';

    public const NAME_WITH_UNDERSCORES = 'heart_with_arrow';

    public const TAGS = 'love heart';

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
