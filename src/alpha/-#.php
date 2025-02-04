<?php namespace _\pkg\github__klude_org__example_charlie\src;

class alpha {
    const VERSION = "#__FW_PKG__VERSION__#";
    public static function _(...$args) { return new static(...$args); }
    public function prtl(){ echo static::class.": ".static::VERSION.PHP_EOL; }
}


