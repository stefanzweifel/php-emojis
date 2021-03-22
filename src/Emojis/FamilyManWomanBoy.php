<?php

namespace Wnx\Emojis\Emojis;

/**
 * FamilyManWomanBoy Emoji class.
 *
 * @version v13.1
 *
 **/
class FamilyManWomanBoy {

    public const SYMBOL = "👨‍👩‍👦";

    public const HEX = "1F468 200D 1F469 200D 1F466";

    public const CODE = "\u{1F468}\u{200D}\u{1F469}\u{200D}\u{1F466}";

    public const NAME = 'family man woman boy';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'family';

    public const NAME_WITH_UNDERSCORES = 'family_man_woman_boy';

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