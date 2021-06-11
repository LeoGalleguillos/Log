<?php
namespace LeoGalleguillos\LogTest\Helper;

use Exception;
use LeoGalleguillos\Log\Helper as LogHelper;
use LeoGalleguillos\Log\Service as LogService;
use PHPUnit\Framework\TestCase;

class ThrowableTest extends TestCase
{
    protected function setUp(): void
    {
        $this->throwableService = $this->createMock(
            LogService\Throwable::class
        );
        $this->throwableHelper = new LogHelper\Throwable(
            $this->throwableService
        );
    }

    public function testInvoke()
    {
        $exception = new Exception();

        $this->throwableHelper->__invoke(
            $exception
        );
    }
}
