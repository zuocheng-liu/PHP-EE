<?php

namespace PHPEE\Pattern;
/**
 * Proxy
 */
class Proxy {

    private $_obj = null;

    public function __call($method, $args) {
        return call_user_func_array( array( $this->_model , $method ) , $args );
    }

    function __construct($_obj) {
        $this->_obj = $_obj;
    }

}
