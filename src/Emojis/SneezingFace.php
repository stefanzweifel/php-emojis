<?php

namespace Wnx\Emojis\Emojis;

/**
 * SneezingFace Emoji class.
 *
 * @version v13.1
 *
 **/
class SneezingFace {

    public const SYMBOL = "🤧";

    public const HEX = "1F927";

    public const CODE = "\u{1F927}";

    public const NAME = 'sneezing face';

    public const GROUP = 'Smileys & Emotion';

    public const SUBGROUP = 'face-unwell';

    public const NAME_WITH_UNDERSCORES = 'sneezing_face';

    public const TAGS = 'achoo sick';

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