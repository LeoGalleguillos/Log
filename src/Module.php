<?php
namespace LeoGalleguillos\Log;

use LeoGalleguillos\Log\Helper as LogHelper;
use LeoGalleguillos\Log\Service as LogService;

class Module
{
    public function getConfig()
    {
        return [
            'view_helpers' => [
                'aliases' => [
                    'logThrowable' => LogHelper\Throwable::class,
                ],
                'factories' => [
                    LogHelper\Throwable::class => function ($sm) {
                        return new LogHelper\Throwable(
                            $sm->get(LogService\Throwable::class)
                        );
                    },
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
