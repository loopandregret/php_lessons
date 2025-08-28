<?php
// typecasting to an object (stdClass) - value = array
$obj = (object) array('foo' => 'bar');
echo "{$obj->foo}\n";
var_dump($obj);

$item = (object) array('1' => 'foo');
var_dump(isset($item->{'1'}));

// typecasting to an object - any other value a member
// variable named scalar will contain the value
$a_value = (object) 'hello';
echo $a_value->scalar . "\n";

// json_decode()
$json = '{"foo": "bar"}';
var_dump(json_decode($json));

// dynamic properties
$new_obj = new stdClass();
$new_obj->foo = 42;
$new_obj->{1} = 42;
var_dump($new_obj);

// easiest and correct way to instantiate an empty generic object for further modification
// just like new_obj above
$genericObject = new stdClass();
var_dump($genericObject);

// still in php 8.* ???
$obj1 = new \stdClass; // instantiate stdClass object
$obj2 = new class {}; // instantiate anonymous class
$obj3 = (object)[]; // typecast empty array to an object

// $obj1 & $obj3 are the same type
// $obj1 !== $obj3.
var_dump(is_object($obj1)); // true
var_dump(is_object($obj2)); // true
var_dump(is_object($obj3)); // true

var_dump($obj1 === $obj3); // false
var_dump($obj2 === $obj3); // false

// same type if json_encoded
echo json_encode([$obj1, $obj2, $obj3]) . "\n"; // [{}, {}, {}]
