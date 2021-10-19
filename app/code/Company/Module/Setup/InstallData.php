$attributeGroup = 'Test Group';

        $attributes = [

            'attribute_code' => [

                'group'              => $attributeGroup,

                'input'              => 'select',

                'type'               => 'int',

                'label'              => 'Attribute Label',

                'visible'            => true,

                'required'           => false,

                'user_defined'               => true,

                'searchable'                 => false,

                'filterable'                 => false,

                'comparable'                 => false,

                'visible_on_front'           => false,

                'visible_in_advanced_search' => false,

                'is_html_allowed_on_front'   => false,

                'used_for_promo_rules'       => true,

                'source'                     => 'Company\Module\Model\Config\Source\Options',

                'frontend_class'             => '',

                'global'                     =>  \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,

                'unique'                     => false,

                'apply_to'                   => 'simple,grouped,configurable,downloadable,virtual,bundle'

            ],...

          ];
