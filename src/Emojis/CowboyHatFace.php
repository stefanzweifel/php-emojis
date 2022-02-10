<?php

namespace Wnx\Emojis\Emojis;

/**
 * CowboyHatFace Emoji class.
 *
 * @version v14.0
 *
 **/
class CowboyHatFace
{

    public const SYMBOL = "🤠";

    public const HEX = "1F920";

    public const CODE = "\u{1F920}";

    public const NAME = 'cowboy hat face';

    public const GROUP = 'Smileys & Emotion';

    public const SUBGROUP = 'face-hat';

    public const NAME_WITH_UNDERSCORES = 'cowboy_hat_face';

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
