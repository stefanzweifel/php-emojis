<?php

namespace Wnx\Emojis\Emojis;

/**
 * NerdFace Emoji class.
 *
 * @version v13.1
 *
 **/
class NerdFace {

    public const SYMBOL = "🤓";

    public const HEX = "1F913";

    public const CODE = "\u{1F913}";

    public const NAME = 'nerd face';

    public const GROUP = 'Smileys & Emotion';

    public const SUBGROUP = 'face-glasses';

    public const NAME_WITH_UNDERSCORES = 'nerd_face';

    public const TAGS = 'geek glasses';

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