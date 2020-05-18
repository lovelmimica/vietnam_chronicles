<div class="tool-box bg-white p-20p pipe-view">
    <h3 class="title"><?php _e('Export Comments in CSV Format:', 'comments-import-export-woocommerce'); ?></h3>
    <p><?php _e('Export and download your Comments in CSV format. This file can be used to import Comments back into your Woocommerce shop.', 'comments-import-export-woocommerce'); ?></p>
    <form action="<?php echo admin_url('admin.php?page=hw_cmt_csv_im_ex&action=export'); ?>" method="post">

        <table class="form-table">
            <tr>
                <th>
                    <label for="v_limit"><?php _e('Limit', 'comments-import-export-woocommerce'); ?></label>
                </th>
                <td>
                    <input type="number" min="1" name="limit" id="v_limit" placeholder="<?php _e('Unlimited', 'comments-import-export-woocommerce'); ?>" class="input-text" />
                    <p style="font-size: 12px"><?php _e('The number of Comments to return.', 'comments-import-export-woocommerce'); ?></p>
                </td>
            </tr>
            <tr>
                <th>
                    <label for="v_date"><?php _e('Date', 'comments-import-export-woocommerce'); ?></label>
                </th>
                <td>
                    <input type="date" name="cmt_date_from" id="datepicker1" placeholder="<?php _e('From date', 'comments-import-export-woocommerce'); ?>" class="input-text" /> -
                    <input type="date" name="cmt_date_to" id="datepicker2" placeholder="<?php _e('To date', 'comments-import-export-woocommerce'); ?>" class="input-text" />
                    <p style="font-size: 12px"><?php _e('The comments date.', 'comments-import-export-woocommerce'); ?></p>
                </td>
            </tr>
            <tr style="display:none;">
                <th>
                    <label for="v_limit"><?php _e('Export Woodiscuz Comments', 'comments-import-export-woocommerce'); ?></label>
                </th>
                <td>
                    <input type="checkbox"  id="wodis_enable" name="woo_enable[]" value="1" /><?php _e('Get Check to choose Product comments', 'comments-import-export-woocommerce'); ?>
                </td>
            </tr>

            <tr style="display:none;">

                <th id='p_woodis'>

                    <label for="v_prods"><?php _e('Products', 'comments-import-export-woocommerce'); ?></label>

                </th>
                <td >

                    <div id='p_woodis_body'>
                        <select id="v_prods" name="products[]" data-placeholder=" <?php _e('All Products', 'comments-import-export-woocommerce'); ?>" class="wc-enhanced-select" multiple="multiple">
                            <?php
                            $args = array(
                                'posts_per_page' => -1,
                                'post_type' => 'Product',
                                'post_status' => 'publish',
                                'suppress_filters' => true
                            );
                            $products = get_posts($args);
                            foreach ($products as $product) {
                                echo '<option value="' . $product->ID . '">' . $product->post_title . '</option>';
                            }
                            ?>
                        </select>

                        <p style="font-size: 12px"><?php _e('Comments under these Products will be exported.', 'comments-import-export-woocommerce'); ?></p>
                    </div>                    
                </td>

            </tr>
            <tr>
                <th id='a_woodis'>
                    <label for="v_prods"><?php _e('Articles', 'comments-import-export-woocommerce'); ?></label>
                </th>
                <td>
                    <div id='a_woodis_body'>
                        <?php if(function_exists('WC')){ ?>
                       <select id="v_article" name="articles[]" data-placeholder="<?php _e('All Articles', 'comments-import-export-woocommerce'); ?>" class="wc-enhanced-select" multiple="multiple">
                            <?php
                            $args = array(
                                'posts_per_page' => -1,
                                'post_type' => 'Post',
                                'post_status' => 'publish',
                                'suppress_filters' => true
                            );
                            $articles = get_posts($args);
                            foreach ($articles as $product) {
                                echo '<option value="' . $product->ID . '">' . $product->post_title . '</option>';
                            }
                            ?>
                        </select>
                        <?php } else { ?>
                        <select id="v_article" name="articles[]" data-placeholder="<?php _e('All Articles', 'comments-import-export-woocommerce'); ?>" class="comment-multiselect" style="width:50%;" multiple="">
                            <?php
                            $args = array(
                                'posts_per_page' => -1,
                                'post_type' => 'Post',
                                'post_status' => 'publish',
                                'suppress_filters' => true
                            );
                            $articles = get_posts($args);
                            foreach ($articles as $product) {
                                echo '<option value="' . $product->ID . '">' . $product->post_title . '</option>';
                            }
                            ?>
                        </select>
                        <?php } ?>
                        <p style="font-size: 12px"><?php _e('Comments under these Articles will be exported.', 'comments-import-export-woocommerce'); ?></p>
                </td>
                </div>
            </tr>
            
           <!--  <tr>
                 <th>
                     <label for="v_ratings"><?php _e('Stars', 'comments-import-export-woocommerce'); ?></label>
                 </th>
                 <td>
                     <select id="v_ratings" name="stars[]" data-placeholder="<?php _e('Any Star', 'comments-import-export-woocommerce'); ?>" class="wc-enhanced-select" multiple="multiple">
            <?php
            for ($i = 1; $i <= 5; $i++) {
                echo '<option value="' . $i . '">' . $i . ' Star</option>';
            }
            ?>
                     </select>
                                                         
                     <p style="font-size: 12px"><?php _e('Comments with these stars will be exported.', 'comments-import-export-woocommerce'); ?></p>
                 </td>
             </tr>
         <!--    <tr>
                 <th>
                     <label for="v_owner"><?php _e('Verified Owner`s Comments?', 'comments-import-export-woocommerce'); ?></label>
                 </th>
                 <td>
                     <select id="v_owner" name="owner" data-placeholder="<?php _e('Any Owner', 'comments-import-export-woocommerce'); ?>" class="wc-enhanced-select">
                         <option value="">--All Comments--</option>
                         <option value="verified">Yes</option>
                         <option value="non-verified">No</option>
                     </select>
                                                         
                     <p style="font-size: 12px"><?php _e('Comments of these users will be exported.', 'comments-import-export-woocommerce'); ?></p>
                 </td>
             </tr>
             <!-- <tr>
                 <th>
                     <label for="v_sortcolumn"><?php _e('Sort Columns', 'comments-import-export-woocommerce'); ?></label>
                 </th>
                 <td>
                     <input type="text" name="sortcolumn" id="v_sortcolumn" placeholder="<?php _e('post_parent , ID', 'comments-import-export-woocommerce'); ?>" class="input-text" />
                     <p style="font-size: 12px"><?php _e('What columns to sort pages by, comma-separated. Accepts post_author , post_date , post_title, post_name, post_modified, menu_order, post_modified_gmt , rand , comment_count.', 'comments-import-export-woocommerce'); ?> </p>
                 </td>
             </tr> -->
            <tr>
                <th>
                    <label for="v_delimiter"><?php _e('Delimiter', 'comments-import-export-woocommerce'); ?></label>
                </th>
                <td>
                    <input type="text" name="delimiter" id="v_delimiter" placeholder="<?php _e(',', 'comments-import-export-woocommerce'); ?>" class="input-text" />
                    <p style="font-size: 12px"><?php _e('Column seperator for exported file', 'comments-import-export-woocommerce'); ?></p>
                </td>
            </tr>
            <tr>
                <th>
                    <label for="v_columns"><?php _e('Columns', 'comments-import-export-woocommerce'); ?></label>
                </th>
            <table id="datagrid">
                <th style="text-align: left;">
                    <label for="v_columns"><?php _e('Column', 'comments-import-export-woocommerce'); ?></label>
                </th>
                <th style="text-align: left;">
                    <label for="v_columns_name"><?php _e('Column Name', 'comments-import-export-woocommerce'); ?></label>
                </th>

                <?php
                foreach ($post_columns as $pkey => $pcolumn) {
                    $ena = ($pkey == 'comment_alter_id') ? 'style="display:none;"' : '';
                    $readonly = (in_array($pkey, array('comment_meta')) ? 'readonly' : '');
                    ?>
                    <tr <?php echo $ena; ?> >
                        <td>

                            <input name= "columns[<?php echo $pkey; ?>]" type="checkbox"  value="<?php echo $pkey; ?>" checked>
                            <label for="columns[<?php echo $pkey; ?>]"><?php _e($pcolumn, 'comments-import-export-woocommerce'); ?></label>
                        </td>
                        <td>
                            <?php
                            $tmpkey = $pkey;
                            if (strpos($pkey, 'yoast') === false) {
                                $tmpkey = ltrim($pkey, '_');
                            }
                            ?>
                            <input type="text" name="columns_name[<?php echo $pkey; ?>]"  value="<?php echo $tmpkey; ?>" class="input-text" <?php echo $readonly ?>/>
                        </td>
                    </tr>
                <?php } ?>

            </table><br/>
            </tr>


        </table>
        <p class="submit"><input type="submit" class="button button-primary" value="<?php _e('Export Comments', 'comments-import-export-woocommerce'); ?>" /></p>
    </form>
</div>
<?php if (!class_exists('WooCommerce')) { ?>
<script>
jQuery(document).ready(function() {
    jQuery('.comment-multiselect').select2();
});</script>
<?php } ?>