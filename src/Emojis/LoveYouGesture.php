<?php

namespace Wnx\Emojis\Emojis;

/**
 * LoveYouGesture Emoji class.
 *
 * @version v13.1
 *
 **/
class LoveYouGesture
{
    public const SYMBOL = "🤟";

    public const HEX = "1F91F";

    public const CODE = "\u{1F91F}";

    public const NAME = 'love-you gesture';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'hand-fingers-partial';

    public const NAME_WITH_UNDERSCORES = 'love-you_gesture';

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
