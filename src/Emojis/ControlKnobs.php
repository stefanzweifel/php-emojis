<?php

namespace Wnx\Emojis\Emojis;

/**
 * ControlKnobs Emoji class.
 *
 * @version v13.1
 *
 **/
class ControlKnobs
{
    public const SYMBOL = "🎛️";

    public const HEX = "1F39B FE0F";

    public const CODE = "\u{1F39B}\u{FE0F}";

    public const NAME = 'control knobs';

    public const GROUP = 'Objects';

    public const SUBGROUP = 'music';

    public const NAME_WITH_UNDERSCORES = 'control_knobs';

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
