<?php

namespace Wnx\Emojis\Emojis;

/**
 * ThoughtBalloon Emoji class.
 *
 * @version v13.1
 *
 **/
class ThoughtBalloon
{
    public const SYMBOL = "💭";

    public const HEX = "1F4AD";

    public const CODE = "\u{1F4AD}";

    public const NAME = 'thought balloon';

    public const GROUP = 'Smileys & Emotion';

    public const SUBGROUP = 'emotion';

    public const NAME_WITH_UNDERSCORES = 'thought_balloon';

    public const TAGS = 'thinking';

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
