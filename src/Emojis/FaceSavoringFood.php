<?php

namespace Wnx\Emojis\Emojis;

/**
 * FaceSavoringFood Emoji class.
 *
 * @version v13.1
 *
 **/
class FaceSavoringFood {

    public const SYMBOL = "😋";

    public const HEX = "1F60B";

    public const CODE = "\u{1F60B}";

    public const NAME = 'face savoring food';

    public const GROUP = 'Smileys & Emotion';

    public const SUBGROUP = 'face-tongue';

    public const NAME_WITH_UNDERSCORES = 'face_savoring_food';

    public const TAGS = 'tongue lick';

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
