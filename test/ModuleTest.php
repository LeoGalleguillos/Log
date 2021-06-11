<?php
namespace LeoGalleguillos\LogModuleTest;

use LeoGalleguillos\Log\Module;
use LeoGalleguillos\Test\ModuleTestCase;

class ModuleTest extends ModuleTestCase
{
    protected function setUp(): void
    {
        $this->module = new Module();
    }
}
