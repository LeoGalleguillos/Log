<?php
namespace LeoGalleguillos\LogTest\Service;

use Exception;
use LeoGalleguillos\Log\Service as LogService;
use PHPUnit\Framework\TestCase;

class ThrowableTest extends TestCase
{
    protected function setUp(): void
    {
        $this->throwableService = new LogService\Throwable();
    }

    public function testLogThrowable()
    {
        $exception = new Exception();
        $this->throwableService->logThrowable(
            $exception
        );
    }
}
