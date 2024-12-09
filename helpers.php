<?php

/**
 * Get the Path
 * 
 * @param string $path
 * @return string 
 * 
 */

 function basePath($path = ''){
    return __DIR__ . "/". $path;
 }