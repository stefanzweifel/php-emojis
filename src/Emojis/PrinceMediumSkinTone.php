<?php

namespace Wnx\Emojis\Emojis;

/**
 * PrinceMediumSkinTone Emoji class.
 *
 * @version v13.1
 *
 **/
class PrinceMediumSkinTone
{
    public const SYMBOL = "🤴🏽";

    public const HEX = "1F934 1F3FD";

    public const CODE = "\u{1F934}\u{1F3FD}";

    public const NAME = 'prince medium skin tone';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'person-role';

    public const NAME_WITH_UNDERSCORES = 'prince_medium_skin_tone';

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
