<?php

namespace Wnx\Emojis\Emojis;

/**
 * ArtistPalette Emoji class.
 *
 * @version v13.1
 *
 **/
class ArtistPalette
{
    public const SYMBOL = "🎨";

    public const HEX = "1F3A8";

    public const CODE = "\u{1F3A8}";

    public const NAME = 'artist palette';

    public const GROUP = 'Activities';

    public const SUBGROUP = 'arts & crafts';

    public const NAME_WITH_UNDERSCORES = 'artist_palette';

    public const TAGS = 'design paint';

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
