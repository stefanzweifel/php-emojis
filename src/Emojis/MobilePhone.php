<?php

namespace Wnx\Emojis\Emojis;

/**
 * MobilePhone Emoji class.
 *
 * @version v13.1
 *
 **/
class MobilePhone
{
    public const SYMBOL = "📱";

    public const HEX = "1F4F1";

    public const CODE = "\u{1F4F1}";

    public const NAME = 'mobile phone';

    public const GROUP = 'Objects';

    public const SUBGROUP = 'phone';

    public const NAME_WITH_UNDERSCORES = 'mobile_phone';

    public const TAGS = 'smartphone mobile';

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
