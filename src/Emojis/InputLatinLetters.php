<?php

namespace Wnx\Emojis\Emojis;

/**
 * InputLatinLetters Emoji class.
 *
 * @version v13.1
 *
 **/
class InputLatinLetters {

    public const SYMBOL = "🔤";

    public const HEX = "1F524";

    public const CODE = "\u{1F524}";

    public const NAME = 'input latin letters';

    public const GROUP = 'Symbols';

    public const SUBGROUP = 'alphanum';

    public const NAME_WITH_UNDERSCORES = 'input_latin_letters';

    public const TAGS = 'alphabet';

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
