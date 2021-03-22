<?php

namespace Wnx\Emojis\Emojis;

/**
 * WomanRunning Emoji class.
 *
 * @version v13.1
 *
 **/
class WomanRunning {

    public const SYMBOL = "🏃‍♀️";

    public const HEX = "1F3C3 200D 2640 FE0F";

    public const CODE = "\u{1F3C3}\u{200D}\u{2640}\u{FE0F}";

    public const NAME = 'woman running';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'person-activity';

    public const NAME_WITH_UNDERSCORES = 'woman_running';

    public const TAGS = 'exercise workout marathon';

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
