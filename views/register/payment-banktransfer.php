
    <div class="form-group">
      <div class="col-sm-12">
          <br>

          <p class=" text-center">
              <span class="ro_bold">Cher <?php echo $participant_data->firstname;?> <?php echo $participant_data->lastname;?></span> ,<br>
               <!-- To pay by bank transfer, kindly use the following details: -->
                Pour payer par virement bancaire, veuillez utiliser les informations suivantes:
          </p>
          <br>

          <table class="taget" style="margin: auto">
            <tr>
                <!-- <td>Reason / Payment Reference:</td> -->
                <td>Raison / reference de paiement:</td>
                <td><?php echo $participant_data->code;?></td>
            </tr>
            <tr>
                <!-- <td>Payment amount</td> -->
                <td>Montant</td>
                <td><?php echo $participant_data->amount;?></td>
            </tr>
            <tr>
                <td>Nom du compte</td>
                <!-- <td>Account Name</td> -->
                <td>The events factory</td>
            </tr>
            <tr>
                <td>Nom de banque</td>
                <!-- <td>Bank Name</td> -->
                <td>Bank of Kigali</td>
            </tr>
            <tr>
                <!-- <td>Branch name</td> -->
                <td>Nom de la filiale</td>
                <td>Headquarters, Kigali - Rwanda</td>
            </tr>
            <tr>
                <td>Swift Code</td>
                <td>BKIGRWRW</td>
            </tr>
            <tr>
                <!-- <td>USD Account No.</td> -->
                <td>USD Compte No.</td>
                <td>00040-06945615-66</td>
            </tr>
            <tr>
                <td>RWF Compte No.</td>
                <!-- <td>RWF Account No.</td> -->
                <td>00040-06945614-65</td>
            </tr>
            <tr>
                <td>Adresse de la banque</td>
                <!-- <td>Bank Address</td> -->
                <td>Bank of Kigali, Head Quarters<br> KN 4 Ave, Kigali – Rwanda</td>
            </tr>
          </table>

          <br>
          <p class="">
            <!--   Please do not forget to <span style="font-family: 'Roboto-Bold', sans-serif;">use your Registration ID as the payment reference as it is used to identify your payment</span>.

            Payment should be processed within 5 working days of submitting the registration form. Please allow 3-4 working days for bank transfer to be cleared. 

            Registration is considered complete only once the payment has been received. 


            For further information regarding the payment, contact us on <?=EMAIL1?> -->


            N'oubliez pas d'utiliser votre identifiant d'enregistrement comme moyen de paiement 
            de reference car elle est utilisee pour identifier votre paiement. Le paiement devrait etre traite 
            dans les 5 jours ouvrables suivant la soumission du formulaire d'inscription. S'il vous plait permettez 3-4 
            jours ouvrables pour que votre virement bancaire s'effectue. L'inscription est consideree 
            complete seulement une fois que le paiement a ete recu. Pour plus d'informations 
             contactez-nous sur <?=EMAIL1?>
          </p>
      </div>
    </div>

    <hr class="halfLine">

    <div class="form-group">
      <div class="col-sm-12 text-center">
          <br>
          <?php

              $participant_code = Input::get('id','get');
              $participantTablee = new \Participant();
              $participantTablee->selectQuery("SELECT `ID`,`code`,`payment_rn`,`payment_method`,`firstname`,`lastname`,`othername`,`email`,`package_type`,`category`,`pass_type`,`state`,`residence_country`,`token` FROM `events_participant` WHERE `code`=?  ORDER BY `ID` DESC LIMIT 1",array($participant_code));

              $participant_dataa = $participantTablee->first(); 
          ?>
          <a href="<?=DN?>/print-forms/<?php echo $participant_dataa->token;?>" style="color: #888" type="submit" class="submit_btn btn orange-bg btn-default btn-md"><i class="glyphicon glyphicon-print"></i> Save or print</a>
          <!-- <a href="<?=DN?>" style="color: #888" type="submit" class="submit_btn btn orange-bg btn-default btn-md"><i class="glyphicon glyphicon-share"></i> Back to home</a> -->
          <a href="http://www.poultryafrica2017.com/" style="color: #888" type="submit" class="submit_btn btn orange-bg btn-default btn-md"><i class="glyphicon glyphicon-share"></i> Back to home</a>
      </div>
    </div>