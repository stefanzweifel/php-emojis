<?php

namespace Wnx\Emojis\Emojis;

/**
 * Sauropod Emoji class.
 *
 * @version v14.0
 *
 **/
class Sauropod
{

    public const SYMBOL = "🦕";

    public const HEX = "1F995";

    public const CODE = "\u{1F995}";

    public const NAME = 'sauropod';

    public const GROUP = 'Animals & Nature';

    public const SUBGROUP = 'animal-reptile';

    public const NAME_WITH_UNDERSCORES = 'sauropod';

    public const TAGS = 'dinosaur';

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
