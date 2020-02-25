<?php
namespace LeoGalleguillos\Log\Helper;

use LeoGalleguillos\Log\Service as LogService;
use Zend\View\Helper\AbstractHelper;

class Throwable extends AbstractHelper
{
    public function __construct(
        LogService\Throwable $throwableService
    ) {
        $this->throwableService = $throwableService;
    }

    public function __invoke(\Throwable $throwable)
    {
        $this->throwableService->logThrowable($throwable);
    }
}
