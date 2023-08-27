<?php

/**
 * Inheritance: no
 * Variants: no
 *
 * Fields Summary:
 * - active [checkbox]
 * - firstname [firstname]
 * - lastname [lastname]
 * - email [email]
 * - gender [gender]
 * - phone [input]
 * - idEncoded [input]
 * - profilingConsent [consent]
 * - birthDate [date]
 * - city [input]
 * - zip [input]
 * - street [input]
 * - countryCode [country]
 * - customerLanguage [language]
 * - manualSegments [advancedManyToManyObjectRelation]
 * - calculatedSegments [advancedManyToManyObjectRelation]
 * - password [password]
 */

namespace Pimcore\Model\DataObject;

use Pimcore\Model\DataObject\Exception\InheritanceParentNotFoundException;
use Pimcore\Model\DataObject\PreGetValueHookInterface;

/**
* @method static \Pimcore\Model\DataObject\Customer\Listing getList(array $config = [])
* @method static \Pimcore\Model\DataObject\Customer\Listing|\Pimcore\Model\DataObject\Customer|null getByActive(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Customer\Listing|\Pimcore\Model\DataObject\Customer|null getByFirstname(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Customer\Listing|\Pimcore\Model\DataObject\Customer|null getByLastname(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Customer\Listing|\Pimcore\Model\DataObject\Customer|null getByEmail(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Customer\Listing|\Pimcore\Model\DataObject\Customer|null getByGender(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Customer\Listing|\Pimcore\Model\DataObject\Customer|null getByPhone(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Customer\Listing|\Pimcore\Model\DataObject\Customer|null getByIdEncoded(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Customer\Listing|\Pimcore\Model\DataObject\Customer|null getByBirthDate(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Customer\Listing|\Pimcore\Model\DataObject\Customer|null getByCity(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Customer\Listing|\Pimcore\Model\DataObject\Customer|null getByZip(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Customer\Listing|\Pimcore\Model\DataObject\Customer|null getByStreet(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Customer\Listing|\Pimcore\Model\DataObject\Customer|null getByCountryCode(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Customer\Listing|\Pimcore\Model\DataObject\Customer|null getByCustomerLanguage(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Customer\Listing|\Pimcore\Model\DataObject\Customer|null getByManualSegments(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
* @method static \Pimcore\Model\DataObject\Customer\Listing|\Pimcore\Model\DataObject\Customer|null getByCalculatedSegments(mixed $value, ?int $limit = null, int $offset = 0, ?array $objectTypes = null)
*/

class Customer extends \CustomerManagementFrameworkBundle\Model\AbstractCustomer
{
public const FIELD_ACTIVE = 'active';
public const FIELD_FIRSTNAME = 'firstname';
public const FIELD_LASTNAME = 'lastname';
public const FIELD_EMAIL = 'email';
public const FIELD_GENDER = 'gender';
public const FIELD_PHONE = 'phone';
public const FIELD_ID_ENCODED = 'idEncoded';
public const FIELD_PROFILING_CONSENT = 'profilingConsent';
public const FIELD_BIRTH_DATE = 'birthDate';
public const FIELD_CITY = 'city';
public const FIELD_ZIP = 'zip';
public const FIELD_STREET = 'street';
public const FIELD_COUNTRY_CODE = 'countryCode';
public const FIELD_CUSTOMER_LANGUAGE = 'customerLanguage';
public const FIELD_MANUAL_SEGMENTS = 'manualSegments';
public const FIELD_CALCULATED_SEGMENTS = 'calculatedSegments';
public const FIELD_PASSWORD = 'password';

protected $classId = "customer";
protected $className = "Customer";
protected $active;
protected $firstname;
protected $lastname;
protected $email;
protected $gender;
protected $phone;
protected $idEncoded;
protected $profilingConsent;
protected $birthDate;
protected $city;
protected $zip;
protected $street;
protected $countryCode;
protected $customerLanguage;
protected $manualSegments;
protected $calculatedSegments;
protected $password;


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
* Get active - Active
* @return bool|null
*/
public function getActive(): ?bool
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("active");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->active;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set active - Active
* @param bool|null $active
* @return $this
*/
public function setActive(?bool $active): static
{
	$this->markFieldDirty("active", true);

	$this->active = $active;

	return $this;
}

/**
* Get firstname - Firstname
* @return string|null
*/
public function getFirstname(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("firstname");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->firstname;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set firstname - Firstname
* @param string|null $firstname
* @return $this
*/
public function setFirstname(?string $firstname): static
{
	$this->markFieldDirty("firstname", true);

	$this->firstname = $firstname;

	return $this;
}

/**
* Get lastname - Lastname
* @return string|null
*/
public function getLastname(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("lastname");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->lastname;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set lastname - Lastname
* @param string|null $lastname
* @return $this
*/
public function setLastname(?string $lastname): static
{
	$this->markFieldDirty("lastname", true);

	$this->lastname = $lastname;

	return $this;
}

/**
* Get email - Email
* @return string|null
*/
public function getEmail(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("email");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->email;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set email - Email
* @param string|null $email
* @return $this
*/
public function setEmail(?string $email): static
{
	$this->markFieldDirty("email", true);

	$this->email = $email;

	return $this;
}

/**
* Get gender - Gender
* @return string|null
*/
public function getGender(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("gender");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->gender;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set gender - Gender
* @param string|null $gender
* @return $this
*/
public function setGender(?string $gender): static
{
	$this->markFieldDirty("gender", true);

	$this->gender = $gender;

	return $this;
}

/**
* Get phone - Phone
* @return string|null
*/
public function getPhone(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("phone");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->phone;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set phone - Phone
* @param string|null $phone
* @return $this
*/
public function setPhone(?string $phone): static
{
	$this->markFieldDirty("phone", true);

	$this->phone = $phone;

	return $this;
}

/**
* Get idEncoded - Id Encoded
* @return string|null
*/
public function getIdEncoded(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("idEncoded");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->idEncoded;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set idEncoded - Id Encoded
* @param string|null $idEncoded
* @return $this
*/
public function setIdEncoded(?string $idEncoded): static
{
	$this->markFieldDirty("idEncoded", true);

	$this->idEncoded = $idEncoded;

	return $this;
}

/**
* Get profilingConsent - Profiling Consent
* @return \Pimcore\Model\DataObject\Data\Consent|null
*/
public function getProfilingConsent(): ?\Pimcore\Model\DataObject\Data\Consent
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("profilingConsent");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->profilingConsent;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set profilingConsent - Profiling Consent
* @param \Pimcore\Model\DataObject\Data\Consent|null $profilingConsent
* @return $this
*/
public function setProfilingConsent(?\Pimcore\Model\DataObject\Data\Consent $profilingConsent): static
{
	$this->markFieldDirty("profilingConsent", true);

	$this->profilingConsent = $profilingConsent;

	return $this;
}

/**
* Get birthDate - Birth Date
* @return \Carbon\Carbon|null
*/
public function getBirthDate(): ?\Carbon\Carbon
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("birthDate");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->birthDate;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set birthDate - Birth Date
* @param \Carbon\Carbon|null $birthDate
* @return $this
*/
public function setBirthDate(?\Carbon\Carbon $birthDate): static
{
	$this->markFieldDirty("birthDate", true);

	$this->birthDate = $birthDate;

	return $this;
}

/**
* Get city - City
* @return string|null
*/
public function getCity(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("city");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->city;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set city - City
* @param string|null $city
* @return $this
*/
public function setCity(?string $city): static
{
	$this->markFieldDirty("city", true);

	$this->city = $city;

	return $this;
}

/**
* Get zip - Zip
* @return string|null
*/
public function getZip(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("zip");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->zip;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set zip - Zip
* @param string|null $zip
* @return $this
*/
public function setZip(?string $zip): static
{
	$this->markFieldDirty("zip", true);

	$this->zip = $zip;

	return $this;
}

/**
* Get street - Street
* @return string|null
*/
public function getStreet(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("street");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->street;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set street - Street
* @param string|null $street
* @return $this
*/
public function setStreet(?string $street): static
{
	$this->markFieldDirty("street", true);

	$this->street = $street;

	return $this;
}

/**
* Get countryCode - Country Code
* @return string|null
*/
public function getCountryCode(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("countryCode");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->countryCode;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set countryCode - Country Code
* @param string|null $countryCode
* @return $this
*/
public function setCountryCode(?string $countryCode): static
{
	$this->markFieldDirty("countryCode", true);

	$this->countryCode = $countryCode;

	return $this;
}

/**
* Get customerLanguage - Customer Language
* @return string|null
*/
public function getCustomerLanguage(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("customerLanguage");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->customerLanguage;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set customerLanguage - Customer Language
* @param string|null $customerLanguage
* @return $this
*/
public function setCustomerLanguage(?string $customerLanguage): static
{
	$this->markFieldDirty("customerLanguage", true);

	$this->customerLanguage = $customerLanguage;

	return $this;
}

/**
* Get manualSegments - Manual Segments
* @return \Pimcore\Model\DataObject\Data\ObjectMetadata[]
*/
public function getManualSegments(): array
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("manualSegments");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->getClass()->getFieldDefinition("manualSegments")->preGetData($this);

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set manualSegments - Manual Segments
* @param \Pimcore\Model\DataObject\Data\ObjectMetadata[] $manualSegments
* @return $this
*/
public function setManualSegments(?array $manualSegments): static
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\AdvancedManyToManyObjectRelation $fd */
	$fd = $this->getClass()->getFieldDefinition("manualSegments");
	$hideUnpublished = \Pimcore\Model\DataObject\Concrete::getHideUnpublished();
	\Pimcore\Model\DataObject\Concrete::setHideUnpublished(false);
	$currentData = $this->getManualSegments();
	\Pimcore\Model\DataObject\Concrete::setHideUnpublished($hideUnpublished);
	$isEqual = $fd->isEqual($currentData, $manualSegments);
	if (!$isEqual) {
		$this->markFieldDirty("manualSegments", true);
	}
	$this->manualSegments = $fd->preSetData($this, $manualSegments);
	return $this;
}

/**
* Get calculatedSegments - Calculated Segments
* @return \Pimcore\Model\DataObject\Data\ObjectMetadata[]
*/
public function getCalculatedSegments(): array
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("calculatedSegments");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->getClass()->getFieldDefinition("calculatedSegments")->preGetData($this);

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set calculatedSegments - Calculated Segments
* @param \Pimcore\Model\DataObject\Data\ObjectMetadata[] $calculatedSegments
* @return $this
*/
public function setCalculatedSegments(?array $calculatedSegments): static
{
	/** @var \Pimcore\Model\DataObject\ClassDefinition\Data\AdvancedManyToManyObjectRelation $fd */
	$fd = $this->getClass()->getFieldDefinition("calculatedSegments");
	$hideUnpublished = \Pimcore\Model\DataObject\Concrete::getHideUnpublished();
	\Pimcore\Model\DataObject\Concrete::setHideUnpublished(false);
	$currentData = $this->getCalculatedSegments();
	\Pimcore\Model\DataObject\Concrete::setHideUnpublished($hideUnpublished);
	$isEqual = $fd->isEqual($currentData, $calculatedSegments);
	if (!$isEqual) {
		$this->markFieldDirty("calculatedSegments", true);
	}
	$this->calculatedSegments = $fd->preSetData($this, $calculatedSegments);
	return $this;
}

/**
* Get password - Password
* @return string|null
*/
public function getPassword(): ?string
{
	if ($this instanceof PreGetValueHookInterface && !\Pimcore::inAdmin()) {
		$preValue = $this->preGetValue("password");
		if ($preValue !== null) {
			return $preValue;
		}
	}

	$data = $this->password;

	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}

	return $data;
}

/**
* Set password - Password
* @param string|null $password
* @return $this
*/
public function setPassword(?string $password): static
{
	$this->markFieldDirty("password", true);

	$this->password = $password;

	return $this;
}

}

