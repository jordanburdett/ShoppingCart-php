
/************
 * quick ajax request using jquery to store item to the session
 */
function storeInfo(item) {
    $.post("storeInfo.php", {"items[]" : item});
}