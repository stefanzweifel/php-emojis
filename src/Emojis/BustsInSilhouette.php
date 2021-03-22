<?php

namespace Wnx\Emojis\Emojis;

/**
 * BustsInSilhouette Emoji class.
 *
 * @version v13.1
 *
 **/
class BustsInSilhouette {

    public const SYMBOL = "👥";

    public const HEX = "1F465";

    public const CODE = "\u{1F465}";

    public const NAME = 'busts in silhouette';

    public const GROUP = 'People & Body';

    public const SUBGROUP = 'person-symbol';

    public const NAME_WITH_UNDERSCORES = 'busts_in_silhouette';

    public const TAGS = 'users group team';

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
