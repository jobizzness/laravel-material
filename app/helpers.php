<?php

if (!function_exists('selectedRoute')) {
    function selectedRoute($path)
    {
        return Request::is($path) ? 'mdc-permanent-drawer--selected' : '';
    }
}
