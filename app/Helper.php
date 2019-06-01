<?php

namespace ShoAdmin;

class Helper
{
    /**
     * Adds version to link href if it was modified
     *
     * @param string $file
     * @return string
     */
    public static function fileVersion(string $file): string
    {
        try {
            return filemtime(SHO_ADMIN_PATH . $file);
        } catch (Exception $e) {
            return '';
        }
    }
}
