<?php

namespace Wnx\Emojis\Emojis;

/**
 * InputSymbols Emoji class.
 *
 * @version v14.0
 *
 **/
class InputSymbols
{

    public const SYMBOL = "🔣";

    public const HEX = "1F523";

    public const CODE = "\u{1F523}";

    public const NAME = 'input symbols';

    public const GROUP = 'Symbols';

    public const SUBGROUP = 'alphanum';

    public const NAME_WITH_UNDERSCORES = 'input_symbols';

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
