<?php
namespace LeoGalleguillos\Log\Service;

class Throwable
{
    public function logThrowable(\Throwable $throwable)
    {
        $logger = new \Zend\Log\Logger;
        $writer = new \Zend\Log\Writer\Stream('php://stderr');
        $logger->addWriter($writer);
        $logger->log(
            \Zend\Log\Logger::INFO,
            get_class($throwable)
        );
        $logger->log(
            \Zend\Log\Logger::INFO,
            $throwable->getFile() . ':' . $throwable->getLine()
        );
        $logger->log(
            \Zend\Log\Logger::INFO,
            $throwable->getMessage()
        );
        $logger->log(
            \Zend\Log\Logger::INFO,
            $throwable->getTraceAsString()
        );
        ksort($_GET);
        $logger->log(
            \Zend\Log\Logger::INFO,
            '$_GET ' . print_r($_GET, true)
        );
        ksort($_POST);
        $logger->log(
            \Zend\Log\Logger::INFO,
            '$_POST ' . print_r($_POST, true)
        );
        ksort($_SERVER);
        $logger->log(
            \Zend\Log\Logger::INFO,
            '$_SERVER ' . print_r($_SERVER, true)
        );
    }
}
