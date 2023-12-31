<?php

namespace Pimcore\Model\DataObject\CustomerSegmentGroup;

use Pimcore\Model;
use Pimcore\Model\DataObject;

/**
 * @method DataObject\CustomerSegmentGroup|false current()
 * @method DataObject\CustomerSegmentGroup[] load()
 * @method DataObject\CustomerSegmentGroup[] getData()
 * @method DataObject\CustomerSegmentGroup[] getObjects()
 */

class Listing extends DataObject\Listing\Concrete
{
protected $classId = "1";
protected $className = "CustomerSegmentGroup";


/**
* Filter by name (Segment group name)
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
* Filter by showAsFilter (Show as Filter)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return $this
*/
public function filterByShowAsFilter ($data, $operator = '='): static
{
	$this->getClass()->getFieldDefinition("showAsFilter")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by filterSortOrder (Filter sort order)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return $this
*/
public function filterByFilterSortOrder ($data, $operator = '='): static
{
	$this->getClass()->getFieldDefinition("filterSortOrder")->addListingFilter($this, $data, $operator);
	return $this;
}

/**
* Filter by exportNewsletterProvider (Export to newsletter provider)
* @param string|int|float|array|Model\Element\ElementInterface $data  comparison data, can be scalar or array (if operator is e.g. "IN (?)")
* @param string $operator  SQL comparison operator, e.g. =, <, >= etc. You can use "?" as placeholder, e.g. "IN (?)"
* @return $this
*/
public function filterByExportNewsletterProvider ($data, $operator = '='): static
{
	$this->getClass()->getFieldDefinition("exportNewsletterProvider")->addListingFilter($this, $data, $operator);
	return $this;
}



}
