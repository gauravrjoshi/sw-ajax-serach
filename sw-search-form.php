<div id="sw-ajax-search-form-wrapper">
    <div id="toggleButton" style="cursor: pointer;" class="popup-link">
        <a href="#popup2"><i class="fas fa-search"></i></a>
    </div>

    <div id="popup2" class="popup-container popup-style-2">
        <div class="popup-content">
            <a href="#" class="close">&times;</a>
            <div class="sw_ajax_search_form_wrap box_shadow_sw">
                <form class="form-inline" action="<?php echo esc_url(site_url('/wp-admin/admin-ajax.php')); ?>" method="POST" id="filter" autocomplete="off">
                    <!-- <div class="form-group mb-2">
                        <?php
                        if ($terms = get_terms(array('taxonomy' => 'category', 'orderby' => 'name'))) :

                            echo '<select name="categoryfilter" class="categoryfilter">';
                            echo '<option value="" selected>All Categories</option>';
                            foreach ($terms as $term) :
                                $selectd = $term->term_id == 1630 ? 'selected' : '';
                                echo '<option value="' . esc_attr($term->term_id) . '" ' . esc_attr($selectd) . '>' . esc_html($term->name) . '</option>';

                            endforeach;
                            echo '</select>';
                        endif;
                        ?>
                    </div> -->
                    <!-- <div class="form-group mb-2">
                        <label style="margin: 10px;display: inline-block;">
                            <input type="radio" name="date" value="ASC" /> <i class="fa fa-arrow-circle-down" aria-hidden="true"></i>
                        </label>
                        <label style="margin: 10px;display: inline-block;">
                            <input type="radio" name="date" value="DESC" selected="selected" /> <i class="fa fa-arrow-circle-up" aria-hidden="true"></i>
                        </label>
                    </div> -->
                    <!-- <div class="row">
                        <div class="col-sm-12"> -->
                    <div class="search-input-wrapper">
                        <input type="text" name="search" id="search" value="" placeholder="">
                        <!-- <i class="fa fa-search search-icon"></i> FontAwesome search icon -->
                        <button id="clearSearch" title="Clear">✕</button>
                        <label for="search">
                            <svg class="search-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path d="M505 442.7l-99.7-99.7c28.5-34.9 45.7-79.1 45.7-127.9C451 97.9 353.1 0 225.5 0S0 97.9 0 215.5 97.9 431 225.5 431c48.8 0 93-17.2 127.9-45.7l99.7 99.7c4.5 4.5 10.6 7 16.9 7s12.4-2.5 16.9-7C513.9 467.5 513.9 451.2 505 442.7zM225.5 391c-96.5 0-175.5-79-175.5-175.5S129 40 225.5 40 401 119 401 215.5 322 391 225.5 391z" />
                            </svg>
                        </label>
                    </div>
                    <!-- </div>
                    </div> -->
                    <?php wp_nonce_field('statelyworld_post_request_action', 'statelyworld_post_request'); ?>
                    <input type="hidden" name="action" value="statelyworld_articale_filter">
                </form>
                <div id="response_wrap">
                    <?php $image_url = plugins_url('assets/img/sw-loader.gif', __FILE__);
                    echo '<img id="loder_img" src="' . esc_url($image_url) . '" alt="Description" style="display: block;margin: auto;">';
                    ?>
                    <div id="response">

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>