<?php

/*
 * This file is part of tacraft-sociality/flarum-scroll-buttons.
 *
 * Copyright (c) 2026 TaCraft Sociality.
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace TacraftSociality\ScrollButtons;

use Flarum\Extend;

return [
    (new Extend\Frontend('forum'))
        ->js(__DIR__ . '/js/dist/forum.js')
        ->css(__DIR__ . '/less/forum.less'),

    (new Extend\Frontend('admin'))
        ->js(__DIR__ . '/js/dist/admin.js'),

    new Extend\Locales(__DIR__ . '/locale'),

    (new Extend\Settings)
        ->serializeToForum('scrollToTopButton', 'tacraft-sociality-scroll-buttons.scroll-to-top-button', 'boolval')
        ->serializeToForum('scrollToBottomButton', 'tacraft-sociality-scroll-buttons.scroll-to-bottom-button', 'boolval')
        ->serializeToForum('scrollToTopIcon', 'tacraft-sociality-scroll-buttons.scroll-to-top-icon')
        ->serializeToForum('scrollToBottomIcon', 'tacraft-sociality-scroll-buttons.scroll-to-bottom-icon')
        ->default('tacraft-sociality-scroll-buttons.scroll-to-top-button', true)
        ->default('tacraft-sociality-scroll-buttons.scroll-to-bottom-button', true),
];