<?php

namespace Wnx\Emojis\Emojis;

/**
 * WomanArtistMediumLightSkinTone Emoji class.
 *
 * @version v13.1
 *
 **/
class WomanArtistMediumLightSkinTone
{
    public const SYMBOL = "👩🏼‍🎨";

    public const HEX = "1F469 1F3FC 200D 1F3A8";

    public const CODE = "\u{1F469}\u{1F3FC}\u{200D}\u{1F3A8}";

    public const NAME = 'woman artist medium-light skin tone';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'person-role';

    public const NAME_WITH_UNDERSCORES = 'woman_artist_medium-light_skin_tone';

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
