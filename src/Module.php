<?php
namespace LeoGalleguillos\Log;

use LeoGalleguillos\Log\Service as LogService;

class Module
{
    public function getConfig()
    {
        return [
            'view_helpers' => [
                'aliases' => [
                ],
                'factories' => [
                ],
            ],
        ];
    }

    public function getServiceConfig()
    {
        return [
            'factories' => [
                LogService\Throwable::class => function ($sm) {
                    return new LogService\Throwable();
                },
            ],
        ];
    }
}
