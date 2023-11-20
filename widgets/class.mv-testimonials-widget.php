<?php

class MV_Testimonials_Widget extends WP_Widget
{
    public function __construct()
    {
        $widget_options = [
            'description' => __('Your most beloved testimonials', 'mv-testimonials'),
        ];

        parent::__construct(
            'mv-testimonials',
            'MV Testimonials',
            $widget_options
        );

        add_action(
            'widgets_init',
            function () {
                register_widget(
                    'MV_Testimonials_Widget'
                );
            }
        );
    }

    public function form($instance)
    {
        $title = 'Test Title';
        $number = 5;
        $image = false;
        $occupation = true;
        $company = true;
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>">
                <?php esc_html_e('Title', 'mv-testimoninals'); ?>
            </label>
            <input type="text" class="widefat" id="<?php $this->get_field_id('title'); ?>" 
                name="<?php $this->get_field_name('title'); ?>" value="<?php echo esc_attr($title); ?>">
        </p>

        <p>
            <label for="<?php echo $this->get_field_id('number'); ?>">
                <?php esc_html_e('NUmber of testimoninals to show', 'mv-testimoninals'); ?>
            </label>
            <input type="number" class="tiny-text" id="<?php $this->get_field_id('number'); ?>" 
                name="<?php $this->get_field_name('number'); ?>" step="1" min="1" size="3" value="<?php echo esc_attr($number); ?>">
        </p>

        <p>
            <input type="checkbox" class="checkbox" id="<?php $this->get_field_id('image'); ?>" 
                name="<?php $this->get_field_name('image'); ?>" <?php checked($image); ?>>
            <label for="<?php echo $this->get_field_id('image'); ?>">
                <?php esc_html_e('Display user image?', 'mv-testimoninals'); ?>
            </label>
        </p>

        <p>
            <input type="checkbox" class="checkbox" id="<?php $this->get_field_id('occupation'); ?>" 
                name="<?php $this->get_field_name('occupation'); ?>" <?php checked($image); ?>>
            <label for="<?php echo $this->get_field_id('occupation'); ?>">
                <?php esc_html_e('Display occupation?', 'mv-testimoninals'); ?>
            </label>
        </p>

        <p>
            <input type="checkbox" class="checkbox" id="<?php $this->get_field_id('company'); ?>" 
                name="<?php $this->get_field_name('company'); ?>" <?php checked($company); ?>>
            <label for="<?php echo $this->get_field_id('company'); ?>">
                <?php esc_html_e('Display company?', 'mv-testimoninals'); ?>
            </label>
        </p>
    <?php
    }

    public function widget($args, $instance)
    {
    }

    public function update($new_instance, $old_instance)
    {
    }
}
