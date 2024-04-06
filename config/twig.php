<?php

return [
    APP_VIEWS_PATH,
    ...\Bolero\Plugins\Authentication\Authentication::viewsPaths(),
    ...\Bolero\Plugins\Dashboard\Dashboard::viewsPaths(),
];
