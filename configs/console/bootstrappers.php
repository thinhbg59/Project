<?php
/**
 * Copyright (C) 2015 David Young
 *
 * Defines the list of bootstrapper classes to load for a console application
 */
/**
 * ----------------------------------------------------------
 * List of console-specific bootstrapper classes
 * ----------------------------------------------------------
 */
return [
    /**
     * ----------------------------------------------------------
     * RDev Bootstrappers
     * ----------------------------------------------------------
     *
     * Keep these bootstrappers unless you want to customize anything that they bind
     */
    "RDev\\Framework\\HTTP\\Bootstrappers\\Views\\Template",
    "RDev\\Framework\\Console\\Bootstrappers\\Commands\\Commands",
    "RDev\\Framework\\Console\\Bootstrappers\\Requests\\Requests",
    /**
     * ----------------------------------------------------------
     * Your Bootstrappers
     * ----------------------------------------------------------
     *
     * List any console bootstrappers you'd like here
     */
];