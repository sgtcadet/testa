<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    /*
    * #More Templates: https://www.template.net/web-templates/landing-page-templates/event-template/
    * #Inspiration: https://themeforest.net/item/aevent-conference-event-html-template/16437366
    http://wrapbootstrap.com/preview/WB02332JB
    * http://wp1.themexlab.com/demo_html/?theme=Aevent
    */
    ?>
    <span><small>Let’s see events up comming</small></span>
    <h2>EVENT SCHEDULES</h2>
    <span>#</span>
    <span>Sessions</span>
    <span>Speacker(s)</span>
    <span>Time</span>
    <span>Venue</span>

    <?php
        $salt = random_bytes(5);

        echo "<p>Salt is : $salt </p>";

        var_dump(bin2hex($salt));

        // $options = [
        //     'cost' => 12,
        // ];

        // $string = "mypassword";
        
        // $hashed_password = password_hash($string,PASSWORD_BCRYPT,$options);

        // echo "<h1>".$hashed_password."</h1>";
    ?>
</body>
</html>