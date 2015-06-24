<?php
/**
 * Defines the logging config for HTTP applications
 */
use Monolog\Handler\ErrorLogHandler;
use Monolog\Logger;

/**
 * ----------------------------------------------------------
 * Create a Monolog logger
 * ----------------------------------------------------------
 */
$logger = new Logger("application");
$logger->pushHandler(new ErrorLogHandler());

return $logger;