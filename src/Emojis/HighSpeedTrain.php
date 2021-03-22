<?php

namespace Wnx\Emojis\Emojis;

/**
 * HighSpeedTrain Emoji class.
 *
 * @version v13.1
 *
 **/
class HighSpeedTrain {

    public const SYMBOL = "🚄";

    public const HEX = "1F684";

    public const CODE = "\u{1F684}";

    public const NAME = 'high-speed train';

    public const GROUP = 'Travel & Places';

    public const SUBGROUP = 'transport-ground';

    public const NAME_WITH_UNDERSCORES = 'high-speed_train';

    public const TAGS = 'train';

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