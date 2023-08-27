<?php

namespace Pimcore\Model\DataObject\Category;

use Pimcore\Model;
use Pimcore\Model\DataObject;

/**
 * @method DataObject\Category|false current()
 * @method DataObject\Category[] load()
 * @method DataObject\Category[] getData()
 * @method DataObject\Category[] getObjects()
 */

class Listing extends DataObject\Listing\Concrete
{
protected $classId = "category";
protected $className = "Category";


/**
* Filter by name (Name)
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
* Filter by description (Description)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return $this
*/
public function filterByDescription ($data, $operator = '='): static
{
	$this->getClass()->getFieldDefinition("description")->addListingFilter($this, $data, $operator);
	return $this;
}



}
