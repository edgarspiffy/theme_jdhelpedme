<!-- SIDE NAV -->
<section class='side-nav pl-2' >
        <?php
        $pageID = get_option('page_on_front');
        //STORING PARENT ID IN A VARIABLE IF NO EXIST PARENT DEFAULTS TO 0
        $theParent = wp_get_post_parent_id(get_the_ID());
        //GETTING CHILD PAGES OF PARENT
        $childPages = get_pages(array(
          'child_of'=>get_the_ID()
        ));
        //CHECKING FOR EITHER CONDITION
        if($theParent or $childPages){?>
          <!-- Value of 0 in the function defaults to current page -->
          <?php if($theParent === $pageID){?>
            <h3 class='pl-1'>Services</h3>
         <?php }else{ ?>
             <h3 class='pl-1 '><?php echo get_the_title($theParent);?></h3>
          <?php }?>
         
            <!-- CREATING UL ELELEMENT -->
            <ul>
            <!-- DEFINING WHAT PAGES TO SHOW -->
            <?php if($theParent){
              $findChildrenOf = $theParent;
            }else{
              $findChildrenOf=get_the_ID();
            }
            // PULL LIST
            $pageId = get_the_ID();
            wp_list_pages(array(
              'title_li'=>NULL,
              'child_of'=>$findChildrenOf,
            ));?>


            </ul>
        <?php } ?>
</section>
