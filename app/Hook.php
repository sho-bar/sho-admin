<?php

namespace ShoQuickPr;

class Hook
{
    /**
     * @return self
     */
    public function registerFrontendPage(): self
    {
        add_action('admin_menu', function () {
            add_menu_page(...$this->getFrontendPageAttributes());
        });

        return $this;
    }

    /**
     * @return array
     */
    public function getFrontendPageAttributes(): array
    {
        return [
            'Sho Quick PR',
            'Sho Quick PR',
            'manage_options',
            'nalognl_report',
            function (): void {
                require_once SHO_QUICK_PR_PATH . 'frontend.php';
            },
            'dashicons-format-gallery',
            90
        ];
    }
}
