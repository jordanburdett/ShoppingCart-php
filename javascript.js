/************
         * quick ajax request using jquery to store item to the session
         */

        function storeInfo(item) {
            $.post("storeInfo.php", {
                '0': item
            });

            $('.toast').toast({
                delay: 1000
            });
            $('.toast').toast('show');
        }

        function removeItem(item) {
            console.log("test");
            console.log(document.getElementById(item).name);
            console.log(document.getElementById(item));
            
            $.post("storeInfo.php", {
                '0': (item.id)
            });
            

            console.log("Item removed: " + item);
            
            $("#" + item.id).hide();

        }

