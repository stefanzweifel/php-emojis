<?php

namespace Wnx\Emojis\Emojis;

/**
 * FieldHockey Emoji class.
 *
 * @version v13.1
 *
 **/
class FieldHockey {

    public const SYMBOL = "🏑";

    public const HEX = "1F3D1";

    public const CODE = "\u{1F3D1}";

    public const NAME = 'field hockey';

    public const GROUP = 'Activities';

    public const SUBGROUP = 'sport';

    public const NAME_WITH_UNDERSCORES = 'field_hockey';

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
