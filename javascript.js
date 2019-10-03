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

