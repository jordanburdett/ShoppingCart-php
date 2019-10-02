
/************
 * quick ajax request using jquery to store item to the session
 */
function storeInfo(key, item) {
    $.post("storeInfo.php", {key: item});
}