<?php

namespace Wnx\Emojis\Emojis;

/**
 * CallMeHandDarkSkinTone Emoji class.
 *
 * @version v14.0
 *
 **/
class CallMeHandDarkSkinTone
{

    public const SYMBOL = "🤙🏿";

    public const HEX = "1F919 1F3FF";

    public const CODE = "\u{1F919}\u{1F3FF}";

    public const NAME = 'call me hand dark skin tone';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'hand-fingers-partial';

    public const NAME_WITH_UNDERSCORES = 'call_me_hand_dark_skin_tone';

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
