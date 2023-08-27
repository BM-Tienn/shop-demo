<?php

/**
 * Fields Summary:
 * - label [input]
 * - field [indexFieldSelection]
 * - scriptPath [input]
 * - excludedKeyIds [textarea]
 * - keyIdPriorityOrder [textarea]
 */

namespace Pimcore\Model\DataObject\Fieldcollection\Data;

use Pimcore\Model\DataObject;
use Pimcore\Model\DataObject\PreGetValueHookInterface;

class FilterSelectClsStoreAttributes extends \Pimcore\Bundle\EcommerceFrameworkBundle\Model\CategoryFilterDefinitionType
{
public const FIELD_LABEL = 'label';
public const FIELD_FIELD = 'field';
public const FIELD_SCRIPT_PATH = 'scriptPath';
public const FIELD_EXCLUDED_KEY_IDS = 'excludedKeyIds';
public const FIELD_KEY_ID_PRIORITY_ORDER = 'keyIdPriorityOrder';

protected string $type = "FilterSelectClsStoreAttributes";
protected $label;
protected $field;
protected $scriptPath;
protected $excludedKeyIds;
protected $keyIdPriorityOrder;


/**
* Get label - Label
* @return string|null
*/
public function getLabel(): ?string
{
	$data = $this->label;
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set label - Label
* @param string|null $label
* @return $this
*/
public function setLabel(?string $label): static
{
	$this->label = $label;

	return $this;
}

/**
* Get field - Field
* @return \Pimcore\Bundle\EcommerceFrameworkBundle\CoreExtensions\ObjectData\IndexFieldSelection|null
*/
public function getField(): ?\Pimcore\Bundle\EcommerceFrameworkBundle\CoreExtensions\ObjectData\IndexFieldSelection
{
	$data = $this->field;
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set field - Field
* @param \Pimcore\Bundle\EcommerceFrameworkBundle\CoreExtensions\ObjectData\IndexFieldSelection|null $field
* @return $this
*/
public function setField(?\Pimcore\Bundle\EcommerceFrameworkBundle\CoreExtensions\ObjectData\IndexFieldSelection $field): static
{
	$this->field = $field;

	return $this;
}

/**
* Get scriptPath - Script Path
* @return string|null
*/
public function getScriptPath(): ?string
{
	$data = $this->scriptPath;
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set scriptPath - Script Path
* @param string|null $scriptPath
* @return $this
*/
public function setScriptPath(?string $scriptPath): static
{
	$this->scriptPath = $scriptPath;

	return $this;
}

/**
* Get excludedKeyIds - Excluded KeyIDs (CSV)
* @return string|null
*/
public function getExcludedKeyIds(): ?string
{
	$data = $this->excludedKeyIds;
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set excludedKeyIds - Excluded KeyIDs (CSV)
* @param string|null $excludedKeyIds
* @return $this
*/
public function setExcludedKeyIds(?string $excludedKeyIds): static
{
	$this->excludedKeyIds = $excludedKeyIds;

	return $this;
}

/**
* Get keyIdPriorityOrder - KeyID Priority Order (CSV)
* @return string|null
*/
public function getKeyIdPriorityOrder(): ?string
{
	$data = $this->keyIdPriorityOrder;
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set keyIdPriorityOrder - KeyID Priority Order (CSV)
* @param string|null $keyIdPriorityOrder
* @return $this
*/
public function setKeyIdPriorityOrder(?string $keyIdPriorityOrder): static
{
	$this->keyIdPriorityOrder = $keyIdPriorityOrder;

	return $this;
}

}

