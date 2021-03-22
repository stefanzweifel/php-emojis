<?php

namespace Wnx\Emojis\Emojis;

/**
 * MobilePhoneOff Emoji class.
 *
 * @version v13.1
 *
 **/
class MobilePhoneOff {

    public const SYMBOL = "📴";

    public const HEX = "1F4F4";

    public const CODE = "\u{1F4F4}";

    public const NAME = 'mobile phone off';

    public const GROUP = 'Symbols';

    public const SUBGROUP = 'av-symbol';

    public const NAME_WITH_UNDERSCORES = 'mobile_phone_off';

    public const TAGS = 'mute off';

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
