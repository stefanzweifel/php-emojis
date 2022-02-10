<?php

namespace Wnx\Emojis\Emojis;

/**
 * HandshakeMediumSkinToneDarkSkinTone Emoji class.
 *
 * @version v14.0
 *
 **/
class HandshakeMediumSkinToneDarkSkinTone
{

    public const SYMBOL = "🫱🏽‍🫲🏿";

    public const HEX = "1FAF1 1F3FD 200D 1FAF2 1F3FF";

    public const CODE = "\u{1FAF1}\u{1F3FD}\u{200D}\u{1FAF2}\u{1F3FF}";

    public const NAME = 'handshake medium skin tone dark skin tone';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'hands';

    public const NAME_WITH_UNDERSCORES = 'handshake_medium_skin_tone_dark_skin_tone';

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
