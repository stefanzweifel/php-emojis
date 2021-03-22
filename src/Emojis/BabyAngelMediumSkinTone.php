<?php

namespace Wnx\Emojis\Emojis;

/**
 * BabyAngelMediumSkinTone Emoji class.
 *
 * @version v13.1
 *
 **/
class BabyAngelMediumSkinTone {

    public const SYMBOL = "👼🏽";

    public const HEX = "1F47C 1F3FD";

    public const CODE = "\u{1F47C}\u{1F3FD}";

    public const NAME = 'baby angel medium skin tone';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'person-fantasy';

    public const NAME_WITH_UNDERSCORES = 'baby_angel_medium_skin_tone';

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