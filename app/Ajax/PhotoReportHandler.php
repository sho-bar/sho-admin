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
     * @param \stdClass $request
     * @return void
     */
    public function __construct(\stdClass $request)
    {
        check_ajax_referer('sho-admin');

        $this->name = $request->name;
        $this->image = $request->image;
        $this->shortcode = $request->shortcode;
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

        $response = wp_insert_post([
            'post_status' => 'publish',
            'post_author' => 1,
            'post_content' => $this->shortcode,
            'post_title' => $this->name,
            'post_category' => [current($cats)->cat_ID],
        ]);

        return is_int($response) ? 'success' : 'error';
    }
}
