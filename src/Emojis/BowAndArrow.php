<?php

namespace Wnx\Emojis\Emojis;

/**
 * BowAndArrow Emoji class.
 *
 * @version v14.0
 *
 **/
class BowAndArrow
{

    public const SYMBOL = "🏹";

    public const HEX = "1F3F9";

    public const CODE = "\u{1F3F9}";

    public const NAME = 'bow and arrow';

    public const GROUP = 'Objects';

    public const SUBGROUP = 'tool';

    public const NAME_WITH_UNDERSCORES = 'bow_and_arrow';

    public const TAGS = 'archery';

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
