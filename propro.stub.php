<?php
/**
 * The "Property Proxy" extension provides a fairly transparent proxy for internal object properties hidden in custom non-zval implementations.
 * 
 * See the php\PropertyProxy class, for the user-land visible part of the implementation.
 */
namespace propro;
use propro;
namespace propro::php;
/**
 * This is the user-land visible PropertyProxy class.
 */
final class PropertyProxy  {
	/**
	 * Create a new property proxy for the property $member of $object.
	 * 
	 * @param string $member The name of the property to reference.
	 * @param php\PropertyProxy $parent Any parent property proxy.
	 */
	function __construct($member, $parent = NULL) {}
}
