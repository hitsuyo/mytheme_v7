

function showMenu()

{

    // alert('Hello');

    // var hiddenMenu = document.getElementById("main-menu-ID");

    // hiddenMenu.style.display = "block";



    document.getElementById("main-menu-ID").classList.toggle("show");

}


// function data_fetch_csgh()
// {
//         // echo "Hello";
//         // alert('Cliked');
//         $('#chs-giao-hang').load('<?php echo get_template_part(); ?>/template-parts/chinh-sach-giao-hang.php');
//         // $('.content-chinh-sach').load(/chinh-sach-giao-hang.php');
// }


function hideMenuAfterClick()
{
    var menuItem = document.getElementById("menuItem");
    menuItem.style.display = "block";
}
// $(".menu-item").click(function () {
//     $("#main-menu-ID").removeClass('show');
// });

/* Menu always seen in top */
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("logo-and-nav").style.top = "0";
  } else {
    // document.getElementById("logo-and-nav").style.top = "-10px";
    document.getElementById("logo-and-nav").style.top = "0";
  }
  prevScrollpos = currentScrollPos;
}


/* Ajax load More Posts */

// (function($) {
//   $('#more_posts').click(function() {
//       alert('Hello');
//   });
// })(jQuery);






