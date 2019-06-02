<?php

namespace ShoAdmin\Ajax;

class PhotoReportHandler
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $image;

    /**
     * @var string
     */
    private $shortcode;

    /**
     * @return void
     */
    public function __construct()
    {
        check_ajax_referer('sho-admin');

        $this->name = $_POST['name'];
        $this->image = $_FILES['image'];
        $this->shortcode = $_POST['shortcode'];
    }

    /**
     * @return void
     */
    public function __destruct()
    {
        wp_reset_postdata();
    }

    /**
     * @return string
     */
    public function insertReport(): string
    {
        // Find the id of 'photo-reports' category
        $cats = array_filter(get_categories(), function ($cat) {
            return $cat->category_nicename === 'photo-reports';
        });

        $post_id = wp_insert_post([
            'post_status' => 'publish',
            'post_author' => 1,
            'post_content' => $this->shortcode,
            'post_title' => $this->name,
            'post_category' => [current($cats)->cat_ID],
        ]);

        $thumb_id = media_handle_sideload($this->image, $post_id);
        set_post_thumbnail($post_id, $thumb_id);

        return is_int($post_id) ? 'success' : 'error';
    }
}
