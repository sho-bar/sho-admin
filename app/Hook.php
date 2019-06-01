<?php

namespace ShoAdmin;

use ShoAdmin\Helper;

class Hook
{
    /**
     * @return self
     */
    public function registerVueComponent(): self
    {
        add_action('admin_bar_menu', function ($wp_admin_bar) {
            $wp_admin_bar->add_node([
                'id' => 'sho-admin',
                'title' => '
                    <div id="sho-admin-vue-app">
                        <div><admin-btn></admin-btn></div>
                    </div>
                ',
                'meta' => [
                    'class' => 'sho-admin-bar-btn'
                ],
            ]);
        }, 100);

        return $this;
    }

    /**
     * @return self
     */
    public function registerAssets(): self
    {
        add_action('admin_enqueue_scripts', function () {
            $css = 'assets/app.css';
            $js = 'assets/vue.js';

            wp_enqueue_style('sho-admin-style', SHO_ADMIN_URL . $css, [],
                Helper::fileVersion($css));

            wp_register_script('sho-admin-js', SHO_ADMIN_URL . $js, [],
                Helper::fileVersion($js));

            wp_enqueue_script('sho-admin-js', SHO_ADMIN_URL . $js, [],
                Helper::fileVersion($js), true);
        });

        return $this;
    }
}
