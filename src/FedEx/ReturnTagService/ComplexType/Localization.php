<?php
namespace FedEx\ReturnTagService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The descriptive data for the local language and locale (i.e. country).
 *
 * @package     PHP FedEx API wrapper
 * @subpackage  Return Tag Service
 *
 * @property string $LanguageCode
 * @property string $LocaleCode

 */
class Localization extends AbstractComplexType
{
    /**
     * Name of this complex type
     *
     * @var string
     */
    protected $name = 'Localization';

    /**
     * Identifies the language to use for human-readable messages.
     *
     * @param string $languageCode
     * @return $this
     */
    public function setLanguageCode($languageCode)
    {
        $this->values['LanguageCode'] = $languageCode;
        return $this;
    }

    /**
     * Identifies the locale (i.e.  country code).
     *
     * @param string $localeCode
     * @return $this
     */
    public function setLocaleCode($localeCode)
    {
        $this->values['LocaleCode'] = $localeCode;
        return $this;
    }
}
