<?php

namespace ShoAdmin;

class DB
{
    /**
     * @return array|object|null Database query results
     */
    public static function getLastEnviraPost()
    {
        global $wpdb;

        $sql = <<<SQL
            select ID, post_title
            from wpvu_posts
            where post_type = 'envira'
            order by ID desc
            limit 1;
        SQL;

        return $wpdb->get_results($sql)[0];
    }
}
