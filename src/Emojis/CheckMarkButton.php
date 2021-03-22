<?php

namespace Wnx\Emojis\Emojis;

/**
 * CheckMarkButton Emoji class.
 *
 * @version v13.1
 *
 **/
class CheckMarkButton
{
    public const SYMBOL = "✅";

    public const HEX = "2705";

    public const CODE = "\u{2705}";

    public const NAME = 'check mark button';

    public const GROUP = 'Symbols';

    public const SUBGROUP = 'other-symbol';

    public const NAME_WITH_UNDERSCORES = 'check_mark_button';

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
