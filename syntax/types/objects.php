<?php
// using the new statement to instantiate a class

class foo {
    function do_foo() {
        return "Doing foo.\n";
    }
}

$bar = new foo;
echo $bar->do_foo();
