<?php

namespace Wnx\Emojis\Emojis;

/**
 * JapaneseVacancyButton Emoji class.
 *
 * @version v13.1
 *
 **/
class JapaneseVacancyButton {

    public const SYMBOL = "🈳";

    public const HEX = "1F233";

    public const CODE = "\u{1F233}";

    public const NAME = 'Japanese “vacancy” button';

    public const GROUP = 'Symbols';

    public const SUBGROUP = 'alphanum';

    public const NAME_WITH_UNDERSCORES = 'Japanese_“vacancy”_button';

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