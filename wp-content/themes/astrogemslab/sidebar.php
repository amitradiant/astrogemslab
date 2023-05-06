<div class="col-lg-3 col-md-3 filter-sidebar">
                        <div class="sidebar-container">
                           <div class="sidebar-header">
                                <h5 class=" d-flex justify-content-between mb-0">Filters <a class="btn btn-outline-prime btn-sm body-font fw500 clear-all fs11" href="javascript:void(0);">CLEAR ALL</a></h5>
                            </div>
                            <div class="sidebar-block">
                                <div class="sidebar-block-header">Price Range <i class="fa fa-angle-down"></i></div>
                                <div class="sidebar-body">
                                    
                            <?php dynamic_sidebar('price-filter'); ?>

                                </div>
                            </div>
                            <!-- ################################ -->
                        
                            <!-- ################################ -->
                            
         <?php 
                                $args = array(
                                    'post_type' => 'product',
                                    'orderby'    => 'id',
                                    'order'      => 'ASC',
                                    'hide_empty' => false,
                                    'show_count' => 0,
                                    'parent' => 0,
                                );
                    $all_watercategories = get_terms('product-types', $args );
                    if(!empty($all_watercategories)){
                    foreach ($all_watercategories as $cats){ ?>

        <div class="sidebar-block">
                                <div class="sidebar-block-header" data-parent-id="<?php echo $cats->term_id; ?>"><?php echo $cats->name; ?> <i class="fa fa-angle-down"></i></div>
                                <div class="sidebar-body">

                        <?php 
                                $child_terms = get_terms('product-types', array(
                                    'hide_empty' => false,
                                    'parent' => $cats->term_id,
                                ));
                                // echo "<pre>";
                                //         print_r($child_terms);
                                                if(!empty($child_terms)){

                                    $tax = 'product-types';
                                    foreach ($child_terms as $child_cats){ ?>
    
                                    <div class="form-check">
                                        <input class="form-check-input water-schedule" type="checkbox" data-catids="<?php echo $child_cats->term_id; ?>" data-tax="<?php echo $tax; ?>" id="schedule1-<?php echo $child_cats->term_id; ?>">
                                        <label class="form-check-label" for="schedule1"><?php echo $child_cats->name; ?> <span>(<?php echo $child_cats->count; ?>)</span></label>
                                    </div>
                                    <?php } } ?>

                                </div>
                            </div>
                            <?php //}
                        }} ?>                    
                            
                        </div>
                    </div>