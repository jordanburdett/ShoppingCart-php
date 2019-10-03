
//start off by checking if there is anything in the cart


/************
 * quick ajax request using jquery to store item to the session
 */
function storeInfo(item) {
    $.post("storeInfo.php", {'0': item});
}

//shows toast when item is added
$(document).ready(function() {
    $("#add").click(function() {
        $('.toast').toast('show');
    });
});