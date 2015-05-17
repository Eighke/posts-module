<?php namespace Anomaly\PostsModule\Type\Form;

/**
 * Class TypeFormSections
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\PostsModule\Type\Form
 */
class TypeFormSections
{

    /**
     * Handle the section.
     *
     * @param TypeFormBuilder $builder
     */
    public function handle(TypeFormBuilder $builder)
    {
        $builder->setSections(
            [
                'general' => [
                    'tabs' => [
                        'general' => [
                            'title'  => 'module::tab.general',
                            'fields' => [
                                'name',
                                'slug',
                                'description'
                            ]
                        ],
                        'layout'  => [
                            'title'  => 'module::tab.layout',
                            'fields' => [
                                'theme_layout',
                                'layout'
                            ]
                        ],
                        'seo'     => [
                            'title'  => 'module::tab.seo',
                            'fields' => [
                                'meta_title',
                                'meta_keywords',
                                'meta_description'
                            ]
                        ],
                        'css'     => [
                            'title'  => 'module::tab.css',
                            'fields' => [
                                'css'
                            ]
                        ],
                        'js'      => [
                            'title'  => 'module::tab.js',
                            'fields' => [
                                'js'
                            ]
                        ]
                    ]
                ]
            ]
        );
    }
}
