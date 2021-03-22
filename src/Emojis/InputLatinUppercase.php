<?php

namespace Wnx\Emojis\Emojis;

/**
 * InputLatinUppercase Emoji class.
 *
 * @version v13.1
 *
 **/
class InputLatinUppercase {

    public const SYMBOL = "🔠";

    public const HEX = "1F520";

    public const CODE = "\u{1F520}";

    public const NAME = 'input latin uppercase';

    public const GROUP = 'Symbols';

    public const SUBGROUP = 'alphanum';

    public const NAME_WITH_UNDERSCORES = 'input_latin_uppercase';

    public const TAGS = 'letters';

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
