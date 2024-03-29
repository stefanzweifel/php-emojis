<?php

namespace Wnx\Emojis\Emojis;

/**
 * TwoHearts Emoji class.
 *
 * @version v14.0
 *
 **/
class TwoHearts
{

    public const SYMBOL = "💕";

    public const HEX = "1F495";

    public const CODE = "\u{1F495}";

    public const NAME = 'two hearts';

    public const GROUP = 'Smileys & Emotion';

    public const SUBGROUP = 'emotion';

    public const NAME_WITH_UNDERSCORES = 'two_hearts';

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
