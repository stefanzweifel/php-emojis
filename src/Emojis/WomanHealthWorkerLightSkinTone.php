<?php

namespace Wnx\Emojis\Emojis;

/**
 * WomanHealthWorkerLightSkinTone Emoji class.
 *
 * @version v13.1
 *
 **/
class WomanHealthWorkerLightSkinTone {

    public const SYMBOL = "👩🏻‍⚕️";

    public const HEX = "1F469 1F3FB 200D 2695 FE0F";

    public const CODE = "\u{1F469}\u{1F3FB}\u{200D}\u{2695}\u{FE0F}";

    public const NAME = 'woman health worker light skin tone';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'person-role';

    public const NAME_WITH_UNDERSCORES = 'woman_health_worker_light_skin_tone';

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
