<?php

namespace Wnx\Emojis\Emojis;

/**
 * WomanFactoryWorkerDarkSkinTone Emoji class.
 *
 * @version v14.0
 *
 **/
class WomanFactoryWorkerDarkSkinTone
{

    public const SYMBOL = "👩🏿‍🏭";

    public const HEX = "1F469 1F3FF 200D 1F3ED";

    public const CODE = "\u{1F469}\u{1F3FF}\u{200D}\u{1F3ED}";

    public const NAME = 'woman factory worker dark skin tone';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'person-role';

    public const NAME_WITH_UNDERSCORES = 'woman_factory_worker_dark_skin_tone';

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
