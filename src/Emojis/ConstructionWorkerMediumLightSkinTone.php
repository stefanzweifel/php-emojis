<?php

namespace Wnx\Emojis\Emojis;

/**
 * ConstructionWorkerMediumLightSkinTone Emoji class.
 *
 * @version v14.0
 *
 **/
class ConstructionWorkerMediumLightSkinTone
{

    public const SYMBOL = "👷🏼";

    public const HEX = "1F477 1F3FC";

    public const CODE = "\u{1F477}\u{1F3FC}";

    public const NAME = 'construction worker medium-light skin tone';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'person-role';

    public const NAME_WITH_UNDERSCORES = 'construction_worker_medium-light_skin_tone';

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
