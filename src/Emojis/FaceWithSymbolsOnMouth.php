<?php

namespace Wnx\Emojis\Emojis;

/**
 * FaceWithSymbolsOnMouth Emoji class.
 *
 * @version v13.1
 *
 **/
class FaceWithSymbolsOnMouth {

    public const SYMBOL = "🤬";

    public const HEX = "1F92C";

    public const CODE = "\u{1F92C}";

    public const NAME = 'face with symbols on mouth';

    public const GROUP = 'Smileys & Emotion';

    public const SUBGROUP = 'face-negative';

    public const NAME_WITH_UNDERSCORES = 'face_with_symbols_on_mouth';

    public const TAGS = 'foul';

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
