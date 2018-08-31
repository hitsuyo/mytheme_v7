<script type="text/javascript">

// Load more Posts on CLick
var ajaxUrl = "<?php echo admin_url('admin-ajax.php')?>";
// var page = 1; // What page we are on.
var ppp = 3; // Post per page
var _offset = 3;
jQuery("#more_posts-ID").on("click",function(){ // When btn is pressed.
        // alert('Clicked');
        // jQuery("#more_posts-ID").attr("disabled",true); // Disable the button, temp.
        // $("#more_posts-ID").prop('disabled', true);
        jQuery('#more_posts-ID').remove(); // remove button/
        jQuery.post(ajaxUrl, {
                action:"more_post_ajax",
                // offset: (page * ppp) + 1,
                offset: 3,
                // ppp: ppp
                ppp: 3
        }).success(function(posts){
                // if(posts.length > 0){
                        // page++;
                        // _offset = _offset + 3;
                        jQuery(".load_post_here").replaceWith(posts); // CHANGE THIS!
                        jQuery("#more_posts-ID").attr("disabled",false);
                // }
                // else{
                //         jQuery("#more_posts-ID").html('No More Posts');  
                // }

        });
});

// wp_count_posts()->publish

</script>
<script>
        function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
        }

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
                if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
                        document.getElementById("myBtnScrollTop").style.display = "block";
                } else {
                        document.getElementById("myBtnScrollTop").style.display = "none";
                }
        }

        var timeOut;
        function scrollToTop() {
                if (document.body.scrollTop!=0 || document.documentElement.scrollTop!=0){
                window.scrollBy(0,-95);
                timeOut=setTimeout('scrollToTop()',10);
                }
                else clearTimeout(timeOut);
        }
</script>

<script>
        // Current link CSS
        // jQuery(function() {
        //         var links = jQuery('li a.link').click(function() {
        //         links.removeClass('active');
        //         jQuery(this).addClass('active');
        //         });
        // });

        // hightlight current menu item
        jQuery("li a.link").on("click",function(){
                // alert('hello');
                var links = jQuery('li a.link').click(function() {
                links.removeClass('active');
                jQuery(this).addClass('active');
                });
        });

        //index
        jQuery("div.term_light").on("click",function(){
                // alert('hello');
                var links_term = jQuery('div.term_light').click(function() {
                links_term.removeClass('active');
                jQuery(this).addClass('active');
                });
        });


</script>

<script>
        window.onload=function(){
                jQuery('.slider').slick({
                autoplay:true,
                autoplaySpeed:1500,
                arrows:true,
                prevArrow:'<button type="button" class="slick-prev"></button>',
                nextArrow:'<button type="button" class="slick-next"></button>',
                centerMode:true,
                slidesToShow:3,
                slidesToScroll:1
                });
        };
</script>

<script>

    var slideCount = jQuery('div#slider ul li').length;
    var slideWidth = jQuery('div#slider ul li').width();
    var slideHeight = jQuery('div#slider ul li').height();
    var sliderUlWidth = slideCount * slideWidth;

//     jQuery('div#slider').css({ width: slideWidth, height: slideHeight });

//     jQuery('div#slider ul').css({ width: sliderUlWidth, marginLeft: - slideWidth });

//     $('div#slider ul li:last-child').prependTo('div#slider ul');

    function moveLeft() {
        jQuery('div#slider ul').animate({
        left: + slideWidth
    }, 150, function () {
        jQuery('div#slider ul li:last-child').prependTo('div#slider ul');
        jQuery('div#slider ul').css('left', '');
    });
    };

    function moveRight() {
        jQuery('div#slider ul').animate({
        left: - slideWidth
    }, 200, function () {
        jQuery('div#slider ul li:first-child').appendTo('div#slider ul');
        jQuery('div#slider ul').css('left', '');
    });
    };

//     jQuery('div#slider p#control_prev-ID').click(function () {
//     moveLeft();
//     });

//     jQuery('p.control_next').click(function () {
//     moveRight();
//     });

jQuery("div#slider p#control_prev-ID").on("click",function(){
        // alert('Hello');
        moveLeft(); 
});

jQuery("div#slider p#control_next-ID").on("click",function(){
        // alert('Hello');
        moveRight(); 
});

// jQuery("div#slider p#control_prev-ID").on("click",function(){
//         alert('hello');
// });


//     $('#checkbox').change(function(){
//     setInterval(function () {
//         moveRight();
//     }, 3000);
//     });

//     setInterval(function () {
//         moveRight();
//     }, 6000);
//     });

window.onload = function(){

};

setInterval(moveRight, 6000);
</script>

<!-- taxanomy -->

<script>
function term_ajax_get(termID) {
//     jQuery("a.ajax").removeClass("current");
//     jQuery("a.ajax").addClass("current"); //adds class current to the category menu item being displayed so you can style it with css
//     jQuery("#post_filtered").show();
    var ajaxurl = "<php echo admin_url('admin-ajax.php')?>";
    jQuery.ajax({
        type: 'POST',
        url: ajaxurl,
        // data: {"action": "load-filter2", term: termID },
        data: {"action": "prefix_load_term_posts", term: termID },
        success: function(response) {
            jQuery("#post_filtered").html(response);
        //     jQuery("#loading-animation").hide();
            return false;
        }
    });
}
</script>


<script type="text/javascript">
    jQuery(document).ready(function(){
        
        
        filter_posts_by_category('all', 1);
        
    });


        var filter_posts_by_category = function(cat_slug, paged){
        // var ajax_url = window.location.protocol + "//" + window.location.host +'/wp-admin/admin-ajax.php';
        var ajaxUrl = "<?php echo admin_url('admin-ajax.php')?>";

        var total_posts = -1; // -1 for show all posts

        var data = {
                
        //     'action'    : 'filter_posts_by_category', 
        // 'action'    : 'ajax_filter_posts_by_category',
        'action'    : 'Alert',
        // 'cat_slug'    : cat_slug,
        // 'posts'        : total_posts,
        // 'paged'        : paged,
        };

        jQuery.ajax({
        method:"POST",
        url: ajax_url,
        data: data,
        beforeSend : function(){
                // functionality to select unselect category
                // jQuery('.filter_icon').each(function(){
                //     jQuery(this).removeClass('selected_cat');
                // });
                
                // jQuery('.'+cat_slug).addClass('selected_cat');
                
                // function to set calender icon url to another location
                // setCalenderUrl(cat_slug);
                
                // jQuery('#post_filtered').html('<p style="text-align:center"><img class="img_loader" src="' + window.location.protocol + '//' + window.location.host + '/images/postloading.gif" /></p>');
                },
                success: function(result){
                        jQuery('.post_filtered').append(result);
                },
                error: function(xhr,status,error){
                        // console.log(error);
                }
                });
        }
    
</script>


<script>
        function load_taxanomy_all()
        {
                var ajaxUrl = "<?php echo admin_url('admin-ajax.php')?>";

                        jQuery('.post_taxanomy').html('<img style="" src="http://demo.smnet.vn/quangcaotaxi/wp-content/uploads/2018/08/ezgif.com-gif-maker.gif">');
                        jQuery.ajax( {
                                url: ajaxUrl,
                                type: 'post',
                                
                                data : {
                                        action: load_post_by_taxanomy_all,
                                }

                        }).success(function(posts_taxanomy_all){
                                        jQuery(".post_taxanomy").html(posts_taxanomy_all); // CHANGE THIS!
                                        

                        })
                        ;
                        
        }
        window.load_taxanomy('load_post_by_taxanomy_all');  
        // jQuery(".loading-icon").hide();


        function load_taxanomy(actionName)
        {
                var ajaxUrl = "<?php echo admin_url('admin-ajax.php')?>";
                // jQuery("button.taximailinh").on("click",function(){ // When btn is pressed.
                        // alert('Clicked');

                        jQuery('.post_taxanomy').html('<img style="margin-left: 48%;" src="http://demo.smnet.vn/quangcaotaxi/wp-content/uploads/2018/08/ezgif.com-gif-maker.gif">');
                        jQuery.ajax( {
                                url: ajaxUrl,
                                type: 'post',
                                
                                data : {
                                        action: actionName,
                                }
                        }).success(function(posts_taxanomy){
                                        jQuery(".post_taxanomy").html(posts_taxanomy); // CHANGE THIS!

                        })
                        ;
                // });
        }

</script>


<script>
        // bonus
        function read_more_tuyendung()
        {
                var ajaxUrl = "<?php echo admin_url('admin-ajax.php')?>";
                // jQuery("div.readmore_tuyendung").on("click",function(){ // When btn is pressed.
                        // alert('Clicked');

                        jQuery.ajax( {
                                url: ajaxUrl,
                                // url: init_bonus.php,
                                type: 'post',
                                
                                data : {
                                        action: 'load_tuyendung_more',
                                }
                        // }).success(function(tuyendungmore){
                        //                 jQuery("div.readmore_tuyendung").html(tuyendungmore); // CHANGE THIS!

                        // })
                        }).done(function(tuyendungmore){
                                        jQuery(".readmore_tuyendung").html(tuyendungmore); // CHANGE THIS!

                        })
                        ;
                // });
        }
        // window.read_more_tuyendung();
</script>

<script>
        jQuery(".all_term").on("click",function(){ // When btn is pressed.
                window.load_taxanomy('load_post_by_taxanomy_all');  
        });
        jQuery(".taximailinh").on("click",function(){ window.load_taxanomy('load_post_by_taxanomy_taximailinh'); });

        jQuery(".taxivinasun").on("click",function(){ window.load_taxanomy('load_post_by_taxanomy_taxivinasun'); });

        jQuery(".taxithanhcong").on("click",function(){ window.load_taxanomy('load_post_by_taxanomy_taxithanhcong'); });

        jQuery(".taxiphuquoc").on("click",function(){ window.load_taxanomy('load_post_by_taxanomy_taxiphuquoc'); });
</script>