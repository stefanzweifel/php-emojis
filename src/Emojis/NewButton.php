<?php

namespace Wnx\Emojis\Emojis;

/**
 * NewButton Emoji class.
 *
 * @version v13.1
 *
 **/
class NewButton
{
    public const SYMBOL = "🆕";

    public const HEX = "1F195";

    public const CODE = "\u{1F195}";

    public const NAME = 'NEW button';

    public const GROUP = 'Symbols';

    public const SUBGROUP = 'alphanum';

    public const NAME_WITH_UNDERSCORES = 'NEW_button';

    public const TAGS = 'fresh';

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
