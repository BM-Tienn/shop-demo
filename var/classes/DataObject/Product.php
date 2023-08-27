<?php

/**
 * Inheritance: no
 * Variants: no
 *
 * Fields Summary:
 * - localizedfields [localizedfields]
 * -- name [input]
 * -- description [textarea]
 * -- content [wysiwyg]
 * - price [numeric]
 * - image [image]
 * - video [video]
 * - gallery [imageGallery]
 * - categories [manyToManyObjectRelation]
 */

namespace Pimcore\Model\DataObject;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;

/**
* @method static \Pimcore\Model\DataObject\Product\Listing getList(array $config = [])
* @method static \Pimcore\Model\DataObject\Product\Listing|\Pimcore\Model\DataObject\Product|null getByLocalizedfields(string $field, mixed $value, ?string $locale = null, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Product\Listing|\Pimcore\Model\DataObject\Product|null getByName(mixed $value, ?string $locale = null, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Product\Listing|\Pimcore\Model\DataObject\Product|null getByDescription(mixed $value, ?string $locale = null, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Product\Listing|\Pimcore\Model\DataObject\Product|null getByContent(mixed $value, ?string $locale = null, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Product\Listing|\Pimcore\Model\DataObject\Product|null getByPrice(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Product\Listing|\Pimcore\Model\DataObject\Product|null getByImage(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Product\Listing|\Pimcore\Model\DataObject\Product|null getByCategories(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
*/

class Product extends \App\Model\AbstractProduct
{
public const FIELD_NAME = 'name';
public const FIELD_DESCRIPTION = 'description';
public const FIELD_CONTENT = 'content';
public const FIELD_PRICE = 'price';
public const FIELD_IMAGE = 'image';
public const FIELD_VIDEO = 'video';
public const FIELD_GALLERY = 'gallery';
public const FIELD_CATEGORIES = 'categories';

protected $classId = "product";
protected $className = "Product";
protected $localizedfields;
protected $price;
protected $image;
protected $video;
protected $gallery;
protected $categories;


/**
* @param array $values
* @return static
*/
public static function create(array $values = []): static
{
	$object = new static();
	$object->setValues($values);
	return $object;
}

/**
* Get localizedfields - 
* @return \Pimcore\Model\DataObject\Localizedfield|null
*/
public function getLocalizedfields(): ?\Pimcore\Model\DataObject\Localizedfield
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("localizedfields");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->getClass()->getFieldDefinition("localizedfields")->preGetData($this);

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Get name - Tên sản phẩm
* @return string|null
*/
public function getName(?string $language = null): ?string
{
	$data = $this->getLocalizedfields()->getLocalizedValue("name", $language);
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("name");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Get description - Description
* @return string|null
*/
public function getDescription(?string $language = null): ?string
{
	$data = $this->getLocalizedfields()->getLocalizedValue("description", $language);
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("description");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Get content - Content
* @return string|null
*/
public function getContent(?string $language = null): ?string
{
	$data = $this->getLocalizedfields()->getLocalizedValue("content", $language);
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("content");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set localizedfields - 
* @param \Pimcore\Model\DataObject\Localizedfield|null $localizedfields
* @return $this
*/
public function setLocalizedfields(?\Pimcore\Model\DataObject\Localizedfield $localizedfields): static
{
	$hideUnpublished = \Pimcore\Model\DataObject\Concrete::getHideUnpublished();
	\Pimcore\Model\DataObject\Concrete::setHideUnpublished(false);
	$currentData = $this->getLocalizedfields();
	\Pimcore\Model\DataObject\Concrete::setHideUnpublished($hideUnpublished);
	$this->markFieldDirty("localizedfields", true);
	$this->markFieldDirty("localizedfields", true);

	$this->localizedfields = $localizedfields;

	return $this;
}

/**
* Set name - Tên sản phẩm
* @param string|null $name
* @return $this
*/
public function setName (?string $name, ?string $language = null): static
{
	$isEqual = false;
	$this->getLocalizedfields()->setLocalizedValue("name", $name, $language, !$isEqual);

	return $this;
}

/**
* Set description - Description
* @param string|null $description
* @return $this
*/
public function setDescription (?string $description, ?string $language = null): static
{
	$isEqual = false;
	$this->getLocalizedfields()->setLocalizedValue("description", $description, $language, !$isEqual);

	return $this;
}

/**
* Set content - Content
* @param string|null $content
* @return $this
*/
public function setContent (?string $content, ?string $language = null): static
{
	$isEqual = false;
	$this->getLocalizedfields()->setLocalizedValue("content", $content, $language, !$isEqual);

	return $this;
}

/**
* Get price - Price
* @return float|null
*/
public function getPrice(): ?float
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("price");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->price;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set price - Price
* @param float|null $price
* @return $this
*/
public function setPrice(?float $price): static
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\Numeric $fd */
	$fd = $this->getClass()->getFieldDefinition("price");
	$this->price = $fd->preSetData($this, $price);
	return $this;
}

/**
* Get image - Image
* @return \Pimcore\Model\Asset\Image|null
*/
public function getImage(): ?\Pimcore\Model\Asset\Image
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("image");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->image;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set image - Image
* @param \Pimcore\Model\Asset\Image|null $image
* @return $this
*/
public function setImage(?\Pimcore\Model\Asset\Image $image): static
{
	$this->markFieldDirty("image", true);

	$this->image = $image;

	return $this;
}

/**
* Get video - Video
* @return \Pimcore\Model\DataObject\Data\Video|null
*/
public function getVideo(): ?\Pimcore\Model\DataObject\Data\Video
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("video");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->video;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set video - Video
* @param \Pimcore\Model\DataObject\Data\Video|null $video
* @return $this
*/
public function setVideo(?\Pimcore\Model\DataObject\Data\Video $video): static
{
	$this->markFieldDirty("video", true);

	$this->video = $video;

	return $this;
}

/**
* Get gallery - Gallery
* @return \Pimcore\Model\DataObject\Data\ImageGallery|null
*/
public function getGallery(): ?\Pimcore\Model\DataObject\Data\ImageGallery
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("gallery");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->gallery;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set gallery - Gallery
* @param \Pimcore\Model\DataObject\Data\ImageGallery|null $gallery
* @return $this
*/
public function setGallery(?\Pimcore\Model\DataObject\Data\ImageGallery $gallery): static
{
	$this->markFieldDirty("gallery", true);

	$this->gallery = $gallery;

	return $this;
}

/**
* Get categories - Categories
* @return \Pimcore\Model\DataObject\Category[]
*/
public function getCategories(): array
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("categories");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->getClass()->getFieldDefinition("categories")->preGetData($this);

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set categories - Categories
* @param \Pimcore\Model\DataObject\Category[] $categories
* @return $this
*/
public function setCategories(?array $categories): static
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\ManyToManyObjectRelation $fd */
	$fd = $this->getClass()->getFieldDefinition("categories");
	$hideUnpublished = \Pimcore\Model\DataObject\Concrete::getHideUnpublished();
	\Pimcore\Model\DataObject\Concrete::setHideUnpublished(false);
	$currentData = $this->getCategories();
	\Pimcore\Model\DataObject\Concrete::setHideUnpublished($hideUnpublished);
	$isEqual = $fd->isEqual($currentData, $categories);
	if (!$isEqual) {
		$this->markFieldDirty("categories", true);
	}
	$this->categories = $fd->preSetData($this, $categories);
	return $this;
}

}

