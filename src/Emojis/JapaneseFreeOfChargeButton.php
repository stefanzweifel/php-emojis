<?php

namespace Wnx\Emojis\Emojis;

/**
 * JapaneseFreeOfChargeButton Emoji class.
 *
 * @version v14.0
 *
 **/
class JapaneseFreeOfChargeButton
{

    public const SYMBOL = "🈚";

    public const HEX = "1F21A";

    public const CODE = "\u{1F21A}";

    public const NAME = 'Japanese “free of charge” button';

    public const GROUP = 'Symbols';

    public const SUBGROUP = 'alphanum';

    public const NAME_WITH_UNDERSCORES = 'Japanese_“free_of_charge”_button';

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
