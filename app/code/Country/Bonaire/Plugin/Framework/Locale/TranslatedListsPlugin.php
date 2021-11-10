<?php

namespace Country\Bonaire\Plugin\Framework\Locale;

use Magento\Framework\Locale\ListsInterface;

/**
 * @inheritdoc
 */
class TranslatedListsPlugin
{
    /**
     * @inheritdoc
     */
    public function aroundGetCountryTranslation(
        ListsInterface $subject,
        callable $proceed,
        $value,
        $locale = null
    ) {
        if ($value == 'XI') {
            /* need to add $locale selector */
            return 'Bonaire';
        }
        return $proceed($value, $locale);
    }
}
