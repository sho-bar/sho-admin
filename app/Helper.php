<?php

namespace ShoQuickPr;

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
            return filemtime(SHO_QUICK_PR_PATH . $file);
        } catch (Exception $e) {
            return '';
        }
    }
}
