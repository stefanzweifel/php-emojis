<?php

namespace Wnx\Emojis\Emojis;

/**
 * StarStruck Emoji class.
 *
 * @version v14.0
 *
 **/
class StarStruck
{

    public const SYMBOL = "🤩";

    public const HEX = "1F929";

    public const CODE = "\u{1F929}";

    public const NAME = 'star-struck';

    public const GROUP = 'Smileys & Emotion';

    public const SUBGROUP = 'face-affection';

    public const NAME_WITH_UNDERSCORES = 'star-struck';

    public const TAGS = 'eyes';

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
