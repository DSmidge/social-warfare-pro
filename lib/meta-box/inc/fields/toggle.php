<?php
/**
 * Heading field class.
 */
class SWPMB_Toggle_Field extends SWPMB_Field
{
	/**
	 * Enqueue scripts and styles
	 *
	 * @return void
	 */
	static function admin_enqueue_scripts()
	{
		wp_enqueue_style( 'swpmb-heading', SWPMB_CSS_URL . 'heading.css', array(), SWP_VERSION );
	}

	/**
	 * Show begin HTML markup for fields
	 *
	 * @param mixed $meta
	 * @param array $field
	 *
	 * @return string
	 */
	static function begin_html( $meta, $field )
	{
		$attributes = empty( $field['id'] ) ? '' : " id='{$field['id']}'";
		return sprintf( '<div><p%s>%s</p>', $attributes, $field['desc'] );
	}

	/**
	 * Show end HTML markup for fields
	 *
	 * @param mixed $meta
	 * @param array $field
	 *
	 * @return string
	 */
	static function end_html( $meta, $field )
	{
        $toggle = '<div>
            <span>ON</span>
            <span>OFF</span>
        </div>';

        return $toggle . '</div>';


		$id = $field['id'] ? " id='{$field['id']}-toggle'" : '';

		return $field['desc'] ? "<p{$id} class='toggle'>{$field['desc']}</p>" : '';
	}
}
