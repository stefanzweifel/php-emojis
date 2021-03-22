<?php

namespace Wnx\Emojis\Emojis;

/**
 * PartyingFace Emoji class.
 *
 * @version v13.1
 *
 **/
class PartyingFace {

    public const SYMBOL = "🥳";

    public const HEX = "1F973";

    public const CODE = "\u{1F973}";

    public const NAME = 'partying face';

    public const GROUP = 'Smileys & Emotion';

    public const SUBGROUP = 'face-hat';

    public const NAME_WITH_UNDERSCORES = 'partying_face';

    public const TAGS = 'celebration birthday';

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
