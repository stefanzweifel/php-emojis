<?php

namespace Wnx\Emojis\Emojis;

/**
 * ManSinger Emoji class.
 *
 * @version v14.0
 *
 **/
class ManSinger
{

    public const SYMBOL = "👨‍🎤";

    public const HEX = "1F468 200D 1F3A4";

    public const CODE = "\u{1F468}\u{200D}\u{1F3A4}";

    public const NAME = 'man singer';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'person-role';

    public const NAME_WITH_UNDERSCORES = 'man_singer';

    public const TAGS = 'rockstar';

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
