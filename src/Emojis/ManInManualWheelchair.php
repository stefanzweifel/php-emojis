<?php

namespace Wnx\Emojis\Emojis;

/**
 * ManInManualWheelchair Emoji class.
 *
 * @version v14.0
 *
 **/
class ManInManualWheelchair
{

    public const SYMBOL = "👨‍🦽";

    public const HEX = "1F468 200D 1F9BD";

    public const CODE = "\u{1F468}\u{200D}\u{1F9BD}";

    public const NAME = 'man in manual wheelchair';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'person-activity';

    public const NAME_WITH_UNDERSCORES = 'man_in_manual_wheelchair';

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
