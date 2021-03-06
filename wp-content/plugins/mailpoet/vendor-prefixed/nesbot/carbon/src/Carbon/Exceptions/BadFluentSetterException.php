<?php
namespace MailPoetVendor\Carbon\Exceptions;
if (!defined('ABSPATH')) exit;
use BadMethodCallException as BaseBadMethodCallException;
use Exception;
class BadFluentSetterException extends BaseBadMethodCallException implements BadMethodCallException
{
 public function __construct($method, $code = 0, Exception $previous = null)
 {
 parent::__construct(\sprintf("Unknown fluent setter '%s'", $method), $code, $previous);
 }
}
