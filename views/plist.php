<?php 
switch($names) {
        case 'radisson':
            $suite = array(
                         'Single Rooms',
                        );
            $price = array(
                         '210 USD',
                        );
                    foreach (array_combine($suite, $price) as $suite => $price){ ?>
                        <li>
                            <span class="lr"><?=$suite; ?></span>: <span class="rl"><?=$price; ?></span>
                        </li>
               <?php };
        break;
        case 'serena':
            $suite = array(
                         'Standard Room',
                         'Deluxe Room',
                         'Superior Room',
                         'Prime',
                         'Junior Suite',
                         'Executive Suite',
                         'Presidential',
                        );
            $price = array(
                         '170 USD',
                         '200 USD',
                         '230 USD',
                         '240 USD',
                         '365 USD',
                         '360 USD',
                         '2900 USD',
                        );
                    foreach (array_combine($suite, $price) as $suite => $price){ ?>
                        <li>
                            <span class="lr"><?=$suite; ?></span>: <span class="rl"><?=$price; ?></span>
                        </li>
               <?php };
        break;
        case 'marriot':
            $suite = array(
                         'Deluxe Room - Single Occupancy',
                         'Deluxe Room - Double Occupancy',
                        );
            $price = array(
                         '165 USD',
                         '209 USD',
                        );
                    foreach (array_combine($suite, $price) as $suite => $price){ ?>
                        <li>
                            <span class="lr"><?=$suite; ?></span>: <span class="rl"><?=$price; ?></span>
                        </li>
               <?php };
        break;
        case 'collines':
            $suite = array(
                         'Classic Rooms city view Single',
                         'Classic Rooms city view Double',
                        );
            $price = array(
                         '135 USD',
                         '155 USD'
                        );
                    foreach (array_combine($suite, $price) as $suite => $price){ ?>
                        <li>
                            <span class="lr"><?=$suite; ?></span>: <span class="rl"><?=$price; ?></span>
                        </li>
               <?php };
        break;
         case 'golf':
            $suite = array(
                         'Standard Single Rooms',
                         'Standard Double Rooms',
                         'Deluxe Single Rooms',
                         'Deluxe Double Rooms',
                         'Executive Suites',
                         'Presidential Suites',
                        );
            $price = array(
                         '250 USD',
                         '280 USD',
                         '300 USD',
                         '330 USD',
                         '400 USD',
                         '1500 USD'
                        );
                    foreach (array_combine($suite, $price) as $suite => $price){ ?>
                        <li>
                            <span class="lr"><?=$suite; ?></span>: <span class="rl"><?=$price; ?></span>
                        </li>
               <?php };
        break;
        case 'portofino':
            $suite = array(
                
                         'Superior Rooms',
                         'Deluxe Rooms',
                         'Suite Rooms',
                        );
            $price = array(
                         '- USD',
                         '- USD',
                         '- USD'
                        );
                    foreach (array_combine($suite, $price) as $suite => $price){ ?>
                        <li>
                            <span class="lr"><?=$suite; ?></span>: <span class="rl"><?=$price; ?></span>
                        </li>
               <?php };
        break;
        case 'gorillas':
            $suite = array(
                
                         'Deluxe Rooms',
                         'Twin Rooms',
                        );
            $price = array(
                         '100 USD',
                         '130 USD',
                        );
                    foreach (array_combine($suite, $price) as $suite => $price){ ?>
                        <li>
                            <span class="lr"><?=$suite; ?></span>: <span class="rl"><?=$price; ?></span>
                        </li>
               <?php };
        break;
        case 'lando':
            $suite = array(
                
                         'Standard',
                         'Pavillon Single',
                         'Pavillon Twin',
                         'Bungallow',
                         'Bungallow Twin',
                        );
            $price = array(
                         '71 USD',
                         '106 USD',
                         '138 USD',
                         '106 USD',
                         '138 USD',
                        );
                    foreach (array_combine($suite, $price) as $suite => $price){ ?>
                        <li>
                            <span class="lr"><?=$suite; ?></span>: <span class="rl"><?=$price; ?></span>
                        </li>
               <?php };
        break;
        case 'legacy':
            $suite = array(
                
                         'Superior Room',
                         'Executive Suite',
                         'Superior Twin Room',
                        );
            $price = array(
                         '130 USD',
                         '320 USD',
                         '150 USD',
                        );
                    foreach (array_combine($suite, $price) as $suite => $price){ ?>
                        <li>
                            <span class="lr"><?=$suite; ?></span>: <span class="rl"><?=$price; ?></span>
                        </li>
               <?php };
        break;
        case 't2000':
            $suite = array(
                
                         'Business Twin Room',
                         'Business Double Room',
                         'Executive Suite',
                        );
            $price = array(
                         '55 USD',
                         '85 USD',
                         '169 USD',
                        );
                    foreach (array_combine($suite, $price) as $suite => $price){ ?>
                        <li>
                            <span class="lr"><?=$suite; ?></span>: <span class="rl"><?=$price; ?></span>
                        </li>
               <?php };
        break;
        case 'ubumwe':
            $suite = array(
                
                         'Single Occupancy (Starting from)',
                         // 'Apartment Rooms',
                         // 'Junior Suite',
                         // 'Deluxe Rooms',
                         // 'Classic Terrace',
                        );
            $price = array(
                         '190 USD',
                         // '- USD',
                         // '- USD',
                         // '- USD'
                        );
                    foreach (array_combine($suite, $price) as $suite => $price){ ?>
                        <li>
                            <span class="lr"><?=$suite; ?></span>: <span class="rl"><?=$price; ?></span>
                        </li>
               <?php };
        break;
        case 'karisimbi':
            $suite = array(
                         
                         'Single Room',
                         'Twin Room',
                         'Deluxe Rooms',
                         'Executive Suites',
                         // 'Superior Rooms',
                        );
            $price = array(
                         '100 USD',
                         '130 USD',
                         '130 USD',
                         '150 USD',
                         // '- USD'
                        );
                    foreach (array_combine($suite, $price) as $suite => $price){ ?>
                        <li>
                            <span class="lr"><?=$suite; ?></span>: <span class="rl"><?=$price; ?></span>
                        </li>
               <?php };
        break;
        case 'galaxy':
            $suite = array(
                         'Single Room',
                         'Deluxe Room',
                         'Deluxe single Room',
                         'Junior Suites',
                         'Executive Suites',
                        );
            $price = array(
                         '140 USD',
                         '127.50 USD',
                         '150 USD',
                         '200 USD',
                         '250 USD'
                        );
                    foreach (array_combine($suite, $price) as $suite => $price){ ?>
                        <li>
                            <span class="lr"><?=$suite; ?></span>: <span class="rl"><?=$price; ?></span>
                        </li>
               <?php };
        break;
        case 'hilltop':
            $suite = array(
                         'Single Room',
                         'Twin Room',
                         // 'Deluxe Rooms',
                         // 'Executive Suites',
                        );
            $price = array(
                         '60 USD',
                         '70 USD',
                         // '- USD',
                         // '- USD',
                        );
                    foreach (array_combine($suite, $price) as $suite => $price){ ?>
                        <li>
                            <span class="lr"><?=$suite; ?></span>: <span class="rl"><?=$price; ?></span>
                        </li>
               <?php };
        break;
        case 'mirror':
            $suite = array(
                         'Single Room',
                         'Standard Room',
                         'Deluxe Rooms',
                         'Standard Twin',
                         'Junior Suites',
                         'Executive Suites',
                        );
            $price = array(
                         '70 USD',
                         '90 USD',
                         '100 USD',
                         '140 USD',
                         '150 USD',
                         '210 USD',
                        );
                    foreach (array_combine($suite, $price) as $suite => $price){ ?>
                        <li>
                            <span class="lr"><?=$suite; ?></span>: <span class="rl"><?=$price; ?></span>
                        </li>
               <?php };
        break;
        case 'legend':
            $suite = array(
                         'Standard Room',
                         'Deluxe Rooms',
                         'Junior Suites',
                        );
            $price = array(
                         '100 USD',
                         '150 USD',
                         '200 USD',
                        );
                    foreach (array_combine($suite, $price) as $suite => $price){ ?>
                        <li>
                            <span class="lr"><?=$suite; ?></span>: <span class="rl"><?=$price; ?></span>
                        </li>
               <?php };
        break;
        case 'garr':
            $suite = array(
                         'Executive Suite',
                         'King Double Room',
                         'Double Room',
                         'Twin Room',
                         'Single Room',
                        );
            $price = array(
                         '160 USD',
                         '130 USD',
                         '110 USD',
                         '120 USD',
                         '95 USD',
                        );
                    foreach (array_combine($suite, $price) as $suite => $price){ ?>
                        <li>
                            <span class="lr"><?=$suite; ?></span>: <span class="rl"><?=$price; ?></span>
                        </li>
               <?php };
        break;
        case 'lemigo':
            $suite = array(
                         'Standard Rooms',
                        );
            $price = array(
                         '150 USD',
                        );
                    foreach (array_combine($suite, $price) as $suite => $price){ ?>
                        <li>
                            <span class="lr"><?=$suite; ?></span>: <span class="rl"><?=$price; ?></span>
                        </li>
               <?php };
        break;
        case 'orient':
            $suite = array(
                         'Single Room',
                         'Queen Room',
                         'King Room',
                         'Executive Room',
                         'Apartment',
                        );
            $price = array(
                         '80 USD',
                         '90 USD',
                         '120 USD',
                         '150 USD',
                         '200 USD',
                        );
                    foreach (array_combine($suite, $price) as $suite => $price){ ?>
                        <li>
                            <span class="lr"><?=$suite; ?></span>: <span class="rl"><?=$price; ?></span>
                        </li>
               <?php };
        break;
        case 'hillview':
            $suite = array(
                         'Suite Rooms',
                         '1 Bed Room Apartment',
                         '2 Bed Room Apartment',
                         'Double Rooms',
                         'Single Room',
                        );
            $price = array(
                         '200 USD',
                         '140 USD',
                         '160 USD',
                         '120 USD',
                         '100 USD',
                        );
                    foreach (array_combine($suite, $price) as $suite => $price){ ?>
                        <li>
                            <span class="lr"><?=$suite; ?></span>: <span class="rl"><?=$price; ?></span>
                        </li>
               <?php };
        break;
        case 'beausejour':
            $suite = array(
                         'Single occupation',
                         'Double occupation',
                        );
            $price = array(
                         '60 USD',
                         '80 USD',
                        );
                    foreach (array_combine($suite, $price) as $suite => $price){ ?>
                        <li>
                            <span class="lr"><?=$suite; ?></span>: <span class="rl"><?=$price; ?></span>
                        </li>
               <?php };
        break;
        case 'elevate':
            $suite = array(
                         'Standard Room',
                         'Deluxe Room',
                         'Junior Suite Room',
                        );
            $price = array(
                         '110 USD',
                         '130 USD',
                         '150 USD',
                        );
                    foreach (array_combine($suite, $price) as $suite => $price){ ?>
                        <li>
                            <span class="lr"><?=$suite; ?></span>: <span class="rl"><?=$price; ?></span>
                        </li>
               <?php };
        break;
        case 'parkinn':
            $suite = array(
                         // 'BedRoom Suite',
                         'Queen / King size Bed',
                        );
            $price = array(
                         // '370 USD',
                         '158 USD',
                        );
                    foreach (array_combine($suite, $price) as $suite => $price){ ?>
                        <li>
                            <span class="lr"><?=$suite; ?></span>: <span class="rl"><?=$price; ?></span>
                        </li>
               <?php };
        break;
    default:
       //
        $suite = array(
                
                         'Starting from :',
                        );
            $price = array(
                         'TBD ',
                        );
        foreach (array_combine($suite, $price) as $suite => $price){ ?>
                        <li>
                            <span class="lr"><h4 class="text-default"><?=$suite; ?> </h4></span> <span class="rl"><h4 class="text-default"> - <?=$price; ?> - </h4></span>
                        </li>
        <?php };
        
        }
?>
<style>
    .htl{
        margin-left: 0;
        height: 120px;
    }
    .htl li{
        margin-left: -10px;
        padding: 3px 0;
        text-align: left;
        font-size: 13px;
        list-style: none;
        color: #000;
    }
    .htl li .rl{
        font-size: 13px;
        margin-right: 10px;
        float: right;
    }
    .htl li .lr{
        margin-left: 6px;
        float: left;
    }
</style>