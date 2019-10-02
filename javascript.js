
/************
 * quick ajax request using jquery to store item to the session
 */
function storeInfo(x, item) {
    $.post("storeInfo.php", {"items[]" : item});
}