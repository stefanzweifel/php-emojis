<?php

namespace Wnx\Emojis\Emojis;

/**
 * MxClausMediumSkinTone Emoji class.
 *
 * @version v14.0
 *
 **/
class MxClausMediumSkinTone
{

    public const SYMBOL = "🧑🏽‍🎄";

    public const HEX = "1F9D1 1F3FD 200D 1F384";

    public const CODE = "\u{1F9D1}\u{1F3FD}\u{200D}\u{1F384}";

    public const NAME = 'mx claus medium skin tone';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'person-fantasy';

    public const NAME_WITH_UNDERSCORES = 'mx_claus_medium_skin_tone';

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
