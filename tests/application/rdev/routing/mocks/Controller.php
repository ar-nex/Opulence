<?php
/**
 * Copyright (C) 2014 David Young
 *
 * Defines a mock controller for use in testing
 */
namespace RDev\Tests\Routing\Mocks;
use RDev\Routing;
use RDev\HTTP;
use RDev\Tests\Mocks;

class Controller extends Routing\Controller
{
    /**
     * Mocks a method that takes in multiple parameters with some default values
     *
     * @param mixed $foo The first parameter
     * @param mixed $bar The second parameter
     * @param mixed $blah The optional third parameter
     * @return HTTP\Response The parameter names to their values
     */
    public function multipleParametersWithDefaultValues($foo, $bar, $blah = "724")
    {
        return new HTTP\Response("foo:$foo, bar:$bar, blah:$blah");
    }

    /**
     * Mocks a method that takes in no parameters
     *
     * @return HTTP\Response An empty string
     */
    public function noParameters()
    {
        return new HTTP\Response("noParameters");
    }

    /**
     * Mocks a method that takes in a single parameter
     *
     * @param mixed $foo The parameter
     * @return HTTP\Response The parameter name to its value
     */
    public function oneParameter($foo)
    {
        return new HTTP\Response("foo:$foo");
    }

    /**
     * Mocks a method that does not return anything
     */
    public function returnsNothing()
    {
        // Don't do anything
    }

    /**
     * Mocks a method that takes in several parameters
     *
     * @param mixed $foo The first parameter
     * @param mixed $bar The second parameter
     * @param mixed $baz The third parameter
     * @param mixed $blah The fourth parameter
     * @return HTTP\Response The parameter names to their values
     */
    public function severalParameters($foo, $bar, $baz, $blah)
    {
        return new HTTP\Response("foo:$foo, bar:$bar, baz:$baz, blah:$blah");
    }

    /**
     * {@inheritdoc}
     */
    public function showHTTPError($statusCode)
    {
        return new HTTP\Response("foo", $statusCode);
    }

    /**
     * Mocks a method that takes in two parameters
     *
     * @param mixed $foo The first parameter
     * @param mixed $bar The second parameter
     * @return HTTP\Response The parameter names to their values
     */
    public function twoParameters($foo, $bar)
    {
        return new HTTP\Response("foo:$foo, bar:$bar");
    }

    /**
     * Mocks a protected method for use in testing
     *
     * @return HTTP\Response The name of the method
     */
    protected function protectedMethod()
    {
        return new HTTP\Response("protectedMethod");
    }

    /**
     * Mocks a private method for use in testing
     *
     * @return HTTP\Response The name of the method
     */
    private function privateMethod()
    {
        return new HTTP\Response("privateMethod");
    }
} 