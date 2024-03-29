<?php

namespace Wnx\Emojis\Emojis;

/**
 * ZanyFace Emoji class.
 *
 * @version v14.0
 *
 **/
class ZanyFace
{

    public const SYMBOL = "🤪";

    public const HEX = "1F92A";

    public const CODE = "\u{1F92A}";

    public const NAME = 'zany face';

    public const GROUP = 'Smileys & Emotion';

    public const SUBGROUP = 'face-tongue';

    public const NAME_WITH_UNDERSCORES = 'zany_face';

    public const TAGS = 'goofy wacky';

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
