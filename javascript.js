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
            console.log(item.id);
            console.log(item.value);
            console.log("." + item.id);

            /*
            $.post("storeInfo.php", {
                '0': item
            });
            */

            console.log("Item removed: " + item);
            
            $("#" + item.id).hide();

        }

