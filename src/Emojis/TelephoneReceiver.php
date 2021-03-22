<?php

namespace Wnx\Emojis\Emojis;

/**
 * TelephoneReceiver Emoji class.
 *
 * @version v13.1
 *
 **/
class TelephoneReceiver {

    public const SYMBOL = "📞";

    public const HEX = "1F4DE";

    public const CODE = "\u{1F4DE}";

    public const NAME = 'telephone receiver';

    public const GROUP = 'Objects';

    public const SUBGROUP = 'phone';

    public const NAME_WITH_UNDERSCORES = 'telephone_receiver';

    public const TAGS = 'phone call';

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
