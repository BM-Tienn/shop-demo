<?php

namespace Pimcore\Model\DataObject\CustomerSegment;

use Pimcore\Model;
use Pimcore\Model\DataObject;

/**
 * @method DataObject\CustomerSegment|false current()
 * @method DataObject\CustomerSegment[] load()
 * @method DataObject\CustomerSegment[] getData()
 * @method DataObject\CustomerSegment[] getObjects()
 */

class Listing extends DataObject\Listing\Concrete
{
protected $classId = "2";
protected $className = "CustomerSegment";


/**
* Filter by name (Segment name)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return $this
*/
public function filterByName ($data, $operator = '='): static
{
	$this->getClass()->getFieldDefinition("name")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by group (Group)
* @param mixed $data
* @param string $operator SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return $this
*/
public function filterByGroup ($data, $operator = '='): static
{
	$this->getClass()->getFieldDefinition("group")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by reference (Reference)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return $this
*/
public function filterByReference ($data, $operator = '='): static
{
	$this->getClass()->getFieldDefinition("reference")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by calculated (calculated)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return $this
*/
public function filterByCalculated ($data, $operator = '='): static
{
	$this->getClass()->getFieldDefinition("calculated")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by useAsTargetGroup (Use As Target Group)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return $this
*/
public function filterByUseAsTargetGroup ($data, $operator = '='): static
{
	$this->getClass()->getFieldDefinition("useAsTargetGroup")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by targetGroup (Linked TargetGroup)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return $this
*/
public function filterByTargetGroup ($data, $operator = '='): static
{
	$this->getClass()->getFieldDefinition("targetGroup")->addListingFilter($this, $data, $operator);
	return $this;
}



}
