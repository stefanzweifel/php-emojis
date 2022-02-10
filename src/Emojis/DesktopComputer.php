<?php

namespace Wnx\Emojis\Emojis;

/**
 * DesktopComputer Emoji class.
 *
 * @version v14.0
 *
 **/
class DesktopComputer
{

    public const SYMBOL = "🖥️";

    public const HEX = "1F5A5 FE0F";

    public const CODE = "\u{1F5A5}\u{FE0F}";

    public const NAME = 'desktop computer';

    public const GROUP = 'Objects';

    public const SUBGROUP = 'computer';

    public const NAME_WITH_UNDERSCORES = 'desktop_computer';

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
