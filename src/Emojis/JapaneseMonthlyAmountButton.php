<?php

namespace Wnx\Emojis\Emojis;

/**
 * JapaneseMonthlyAmountButton Emoji class.
 *
 * @version v13.1
 *
 **/
class JapaneseMonthlyAmountButton
{
    public const SYMBOL = "🈷️";

    public const HEX = "1F237 FE0F";

    public const CODE = "\u{1F237}\u{FE0F}";

    public const NAME = 'Japanese “monthly amount” button';

    public const GROUP = 'Symbols';

    public const SUBGROUP = 'alphanum';

    public const NAME_WITH_UNDERSCORES = 'Japanese_“monthly_amount”_button';

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
