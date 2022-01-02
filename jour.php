<?php
require_once("headerAgent.php");
?>
<div class="container white">
            <h4 class="center" style="color: #00695c  ;">Selectionner une date pour voir les rendez-vous</h4>
            <h5 class="row">
            <div class="col s5 m3 offset-m3 input-field">
                <input type="date" style=" margin-left: 40%;" class="date_debut" value="<?= date('Y').'-'.date('m').'-'.date('d') ?>" name="date_debut" id="date_debut" required>
                <label for="date_debut" style=" margin-left: 20%;">Date du rendez-vous</label>
            </div>
            <div class="col s2 m2 center">
               
            </h5>
            <div class="row" id="tbody">

            </div>
            
        </div>
         <script src="jquery.min.js"></script>
 <script type="text/javascript">
    $(document).ready(function() {
                function rdv() {
                    var jour_d = $('.date_debut').val();
                    
                    $.ajax({
                        type: 'POST',
                        url: 'rdv_ajax.php',
                        data: 'jour_d= ' + jour_d ,
                        success: function(html) {
                            $('#tbody').html(html);
                        }
                    });

                }
                rdv();
                 $('input').change(function()
    {
        rdv();
    });
            });
   
</script>