<?php

namespace Wnx\Emojis\Emojis;

/**
 * PersonGesturingNo Emoji class.
 *
 * @version v14.0
 *
 **/
class PersonGesturingNo
{

    public const SYMBOL = "🙅";

    public const HEX = "1F645";

    public const CODE = "\u{1F645}";

    public const NAME = 'person gesturing NO';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'person-gesture';

    public const NAME_WITH_UNDERSCORES = 'person_gesturing_NO';

    public const TAGS = 'stop halt denied';

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
