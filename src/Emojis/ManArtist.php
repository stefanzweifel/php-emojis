<?php

namespace Wnx\Emojis\Emojis;

/**
 * ManArtist Emoji class.
 *
 * @version v13.1
 *
 **/
class ManArtist
{
    public const SYMBOL = "👨‍🎨";

    public const HEX = "1F468 200D 1F3A8";

    public const CODE = "\u{1F468}\u{200D}\u{1F3A8}";

    public const NAME = 'man artist';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'person-role';

    public const NAME_WITH_UNDERSCORES = 'man_artist';

    public const TAGS = 'painter';

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
