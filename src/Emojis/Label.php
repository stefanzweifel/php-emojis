<?php

namespace Wnx\Emojis\Emojis;

/**
 * Label Emoji class.
 *
 * @version v13.1
 *
 **/
class Label {

    public const SYMBOL = "🏷️";

    public const HEX = "1F3F7 FE0F";

    public const CODE = "\u{1F3F7}\u{FE0F}";

    public const NAME = 'label';

    public const GROUP = 'Objects';

    public const SUBGROUP = 'book-paper';

    public const NAME_WITH_UNDERSCORES = 'label';

    public const TAGS = 'tag';

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