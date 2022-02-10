<?php

namespace Wnx\Emojis\Emojis;

/**
 * ArticulatedLorry Emoji class.
 *
 * @version v14.0
 *
 **/
class ArticulatedLorry
{

    public const SYMBOL = "🚛";

    public const HEX = "1F69B";

    public const CODE = "\u{1F69B}";

    public const NAME = 'articulated lorry';

    public const GROUP = 'Travel & Places';

    public const SUBGROUP = 'transport-ground';

    public const NAME_WITH_UNDERSCORES = 'articulated_lorry';

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
