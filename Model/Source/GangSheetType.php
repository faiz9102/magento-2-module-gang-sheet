<?php

namespace MFA\GangSheet\Model\Source;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;

class GangSheetType extends AbstractSource
{
    /**
     * Retrieve All options
     *
     * @return array
     */
    public function getAllOptions(): array
    {
        return [
            ['value' => 0, 'label' => __('None')],
            ['value' => 1, 'label' => __('Simple')],
            ['value' => 2, 'label' => __('Rolling')],
        ];
    }
}
