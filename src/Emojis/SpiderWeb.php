<?php

namespace Wnx\Emojis\Emojis;

/**
 * SpiderWeb Emoji class.
 *
 * @version v14.0
 *
 **/
class SpiderWeb
{

    public const SYMBOL = "🕸️";

    public const HEX = "1F578 FE0F";

    public const CODE = "\u{1F578}\u{FE0F}";

    public const NAME = 'spider web';

    public const GROUP = 'Animals & Nature';

    public const SUBGROUP = 'animal-bug';

    public const NAME_WITH_UNDERSCORES = 'spider_web';

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
