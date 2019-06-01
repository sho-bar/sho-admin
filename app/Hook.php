<?php

namespace ShoQuickPr;

use ShoQuickPr\Helper;

class Hook
{
    /**
     * @return self
     */
    public function registerVueComponent(): self
    {
        add_action('admin_bar_menu', function ($wp_admin_bar) {
            $wp_admin_bar->add_node([
                'id' => 'sho-quick-pr',
                'title' => '<template id="sho-quick-pr-vue-app"><app></app></template>',
                'meta' => [
                    'class' => 'sho-qpr-admin-bar-btn'
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

            wp_enqueue_style('sho-qpr-style', SHO_QUICK_PR_URL . $css, [],
                Helper::fileVersion($css));

            wp_register_script('sho-qpr-js', SHO_QUICK_PR_URL . $js, [],
                Helper::fileVersion($js));

            wp_enqueue_script('sho-qpr-js', SHO_QUICK_PR_URL . $js, [],
                Helper::fileVersion($js), true);
        });

        return $this;
    }
}
