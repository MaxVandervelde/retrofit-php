<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Retrofit\Annotation;

/**
 * Defines an HTTP POST request type to a REST path relative to base URL.
 *
 * @author Nate Brunette <n@tebru.net>
 * @Annotation
 * @Target("METHOD")
 */
class POST extends HttpRequest
{
    /**
     * @return string
     */
    public function getType()
    {
        return 'post';
    }
}
