
<?php

use Botble\Blog\Models\Post;
use Botble\Page\Models\Page;
use Botble\Menu\Models\MenuNode;
// use Botble\Base\Forms\FormAbstract;
// use Kris\LaravelFormBuilder\FormHelper;
// use Theme\Ripple\Fields\ThemeIconField;

register_page_template([
    'no-sidebar' => __('No sidebar'),
]);

register_sidebar([
    'id'          => 'top_sidebar',
    'name'        => __('Top sidebar'),
    'description' => __('Area for widgets on the top sidebar'),
]);

register_sidebar([
    'id'          => 'footer_sidebar',
    'name'        => __('Footer sidebar'),
    'description' => __('Area for footer widgets'),
]);

RvMedia::setUploadPathAndURLToPublic();
RvMedia::addSize('featured', 565, 375)->addSize('medium', 540, 360);

remove_filter(DASHBOARD_FILTER_ADMIN_LIST);

// add_filter('form_custom_fields', function (FormAbstract $form, FormHelper $formHelper) {
//     if (!$formHelper->hasCustomField('themeIcon')) {
//         $form->addCustomField('themeIcon', ThemeIconField::class);
//     }

//     return $form;
// }, 29, 2);

add_filter(BASE_FILTER_BEFORE_RENDER_FORM, function ($form, $data) {
    switch (get_class($data)) {
        case Post::class:
        case Page::class:
            $bannerImage = MetaBox::getMetaData($data, 'banner_image', true);

            $form
                ->addAfter('image', 'banner_image', 'mediaImage', [
                    'label'      => __('Banner image (1920x170px)'),
                    'label_attr' => ['class' => 'control-label'],
                    'value'      => $bannerImage,
                ])
                ->addAfter('content', 'embedded_video', 'textarea', [
                    'label'      => __('Video'),
                    'label_attr' => ['class' => 'control-label'],
                    'value'      =>  MetaBox::getMetaData($data, 'embedded_video', true),
                ]);
            break;
    }

    return $form;
}, 124, 3);

add_action(BASE_ACTION_AFTER_CREATE_CONTENT, 'save_addition_in_form_fields', 75, 3);
add_action(BASE_ACTION_AFTER_UPDATE_CONTENT, 'save_addition_in_form_fields', 76, 3);

function save_addition_in_form_fields($type, $request, $object)
{
    switch (get_class($object)) {
        case Post::class:
        case Page::class:
            if ($request->has('banner_image')) {
                MetaBox::saveMetaBoxData($object, 'banner_image', $request->input('banner_image'));
            }
            if ($request->has('embedded_video')) {
                MetaBox::saveMetaBoxData($object, 'embedded_video', $request->input('embedded_video'));
            }
            break;
    }
}

// Form::component('themeIcon', Theme::getThemeNamespace() . '::partials.icons-field', [
//     'name',
//     'value'      => null,
//     'attributes' => [],
// ]);




// register_page_template([
//     'default' => 'Default',
// ]);

// register_sidebar([
//     'id' => 'second_sidebar',
//     'name' => 'Second sidebar',
//     'description' => 'This is a sample sidebar for demo theme',
// ]);

// RvMedia::setUploadPathAndURLToPublic();


// add_filter(BASE_FILTER_BEFORE_RENDER_FORM, function ($form, $data) {
//     if (get_class($data) == \Botble\Blog\Models\Page::class) {

//         $test = \MetaBox::getMetaData($data, 'test', true);

//         $form
//             ->add('test', 'text', [
//                 'label'      => __('Test Field'),
//                 'label_attr' => ['class' => 'control-label'],
//                 'value'      => $test,
//                 'attr'       => [
//                     'placeholder' => __('Test'),
//                 ],
//             ]);
//     }

//     return $form;
// }, 120, 3);

// add_action(BASE_ACTION_AFTER_CREATE_CONTENT, 'save_addition_fields', 120, 3);
// add_action(BASE_ACTION_AFTER_UPDATE_CONTENT, 'save_addition_fields', 120, 3);

// /**
//  * @param string $screen
//  * @param Request $request
//  * @param Model $data
//  */
// function save_addition_fields($screen, $request, $data)
// {
//     if (get_class($data) == \Botble\Blog\Models\Page::class) {
//         MetaBox::saveMetaBoxData($data, 'test', $request->input('test'));
//     }
// }
