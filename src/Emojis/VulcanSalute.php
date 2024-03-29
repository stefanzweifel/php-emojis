<?php

namespace Wnx\Emojis\Emojis;

/**
 * VulcanSalute Emoji class.
 *
 * @version v14.0
 *
 **/
class VulcanSalute
{

    public const SYMBOL = "🖖";

    public const HEX = "1F596";

    public const CODE = "\u{1F596}";

    public const NAME = 'vulcan salute';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'hand-fingers-open';

    public const NAME_WITH_UNDERSCORES = 'vulcan_salute';

    public const TAGS = 'prosper spock';

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
