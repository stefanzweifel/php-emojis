<?php

namespace Wnx\Emojis\Emojis;

/**
 * Otter Emoji class.
 *
 * @version v14.0
 *
 **/
class Otter
{

    public const SYMBOL = "🦦";

    public const HEX = "1F9A6";

    public const CODE = "\u{1F9A6}";

    public const NAME = 'otter';

    public const GROUP = 'Animals & Nature';

    public const SUBGROUP = 'animal-mammal';

    public const NAME_WITH_UNDERSCORES = 'otter';

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
