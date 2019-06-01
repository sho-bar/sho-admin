<?php

namespace ShoAdmin;

class Ajax
{
    /**
     * @return void
     */
    public function __construct()
    {
        check_ajax_referer('sho-admin');
    }

    /**
     * @return void
     */
    public function __destruct()
    {
        wp_reset_postdata();
    }

    /**
     * @param \stdClass $params
     * @return string
     */
    public function insertReport(\stdClass $params): string
    {
        return 'error';
    }
}
