<?php

namespace Wnx\Emojis\Emojis;

/**
 * Paintbrush Emoji class.
 *
 * @version v13.1
 *
 **/
class Paintbrush
{
    public const SYMBOL = "🖌️";

    public const HEX = "1F58C FE0F";

    public const CODE = "\u{1F58C}\u{FE0F}";

    public const NAME = 'paintbrush';

    public const GROUP = 'Objects';

    public const SUBGROUP = 'writing';

    public const NAME_WITH_UNDERSCORES = 'paintbrush';

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
