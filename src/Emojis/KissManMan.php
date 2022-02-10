<?php

namespace Wnx\Emojis\Emojis;

/**
 * KissManMan Emoji class.
 *
 * @version v14.0
 *
 **/
class KissManMan
{

    public const SYMBOL = "👨‍❤️‍💋‍👨";

    public const HEX = "1F468 200D 2764 FE0F 200D 1F48B 200D 1F468";

    public const CODE = "\u{1F468}\u{200D}\u{2764}\u{FE0F}\u{200D}\u{1F48B}\u{200D}\u{1F468}";

    public const NAME = 'kiss man man';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'family';

    public const NAME_WITH_UNDERSCORES = 'kiss_man_man';

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
