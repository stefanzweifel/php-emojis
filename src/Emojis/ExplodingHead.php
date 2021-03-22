<?php

namespace Wnx\Emojis\Emojis;

/**
 * ExplodingHead Emoji class.
 *
 * @version v13.1
 *
 **/
class ExplodingHead
{
    public const SYMBOL = "🤯";

    public const HEX = "1F92F";

    public const CODE = "\u{1F92F}";

    public const NAME = 'exploding head';

    public const GROUP = 'Smileys & Emotion';

    public const SUBGROUP = 'face-unwell';

    public const NAME_WITH_UNDERSCORES = 'exploding_head';

    public const TAGS = 'mind blown';

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
