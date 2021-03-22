<?php

namespace Wnx\Emojis\Emojis;

/**
 * RepeatSingleButton Emoji class.
 *
 * @version v13.1
 *
 **/
class RepeatSingleButton {

    public const SYMBOL = "🔂";

    public const HEX = "1F502";

    public const CODE = "\u{1F502}";

    public const NAME = 'repeat single button';

    public const GROUP = 'Symbols';

    public const SUBGROUP = 'av-symbol';

    public const NAME_WITH_UNDERSCORES = 'repeat_single_button';

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