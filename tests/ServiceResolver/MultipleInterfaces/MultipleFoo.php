<?php
/*
 * Copyright (c) 2015 Nate Brunette.
 * Distributed under the MIT License (http://opensource.org/licenses/MIT)
 */

namespace Tebru\Retrofit\Test\ServiceResolver\MultipleInterfaces;

use Tebru\Retrofit\Annotation\GET;

/**
 * Interface OneFoo
 *
 * @author Nate Brunette <n@tebru.net>
 */
interface MultipleFoo
{
    /**
     * @GET()
     */
    public function get();
}
