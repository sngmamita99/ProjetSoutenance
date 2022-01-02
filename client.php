<!DOCTYPE html>  
                <html lang="en">
                    <head>
                        <meta charset="UTF-8">
                        <title>Title</title>
                        <link rel="stylesheet" href="https://paytech.sn/cdn/paytech.min.css">
                        <script
                                src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
                        <script src="https://paytech.sn/cdn/paytech.min.js"></script>
                    </head>
                    <body>
                        
                        <button class="buy" onclick="buy(this)" data-item-id="88" >Acheter iphone (450000 XOF)
                        </button>
                        
                        <script>
                        
                        
                            function buy(btn) {
                                (new PayTech({
                                    some_post_data_1          :   2, //will be sent to paiement.php page
                                    some_post_data_3          :   4,
                                })).withOption({
                                    requestTokenUrl           :   'PayTech.php',
                                    method              :   'POST',
                                    headers             :   {
                                        "Accept"          :    "text/html"
                                    },
                                    prensentationMode   :   PayTech.OPEN_IN_POPUP,
                                    willGetToken        :   function () {
                                       
                                    },
                                    didGetToken         : function (token, redirectUrl) {
                                       
                                    },
                                    didReceiveError: function (error) {
                                       
                                    },
                                    didReceiveNonSuccessResponse: function (jsonResponse) {
                                       
                                    }
                                }).send();
                        
                                //.send params are optional
                            }
                        </script>
                    </body>
                 </html>