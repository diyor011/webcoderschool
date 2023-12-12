<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$pageTitle?></title>
    <link rel="stylesheet" href="style/main.css">
    <link rel="icon" href="images/six.png">
</head>
<body>
    <div class="wrapper"> 
        <div class="forma">
            <form action="/form-yubor.php?edit=<?=''?>" method="post" class="form">
                <img src="images/iks.png" alt="" class="course__alert_info_exit">
                <input type="text" name="name" placeholder="Ismingiz">
                <input type="tel" name="tel" placeholder="Telefon (99 999 99 99)">
                <select name="course" id="">
                    <option value="">Kursni Tanlang:</option>
                    <option value="Front-end">Front-end</option>
                    <option value="Back-end">Back-end</option>
                    <option value="Kompyuter savodxonligi">Kompyuter savodxonligi</option>
                    <option value="Kiberxavfsizlik">Kiberxavfsizlik</option>
                    <option value="Bot yasash">Bot yasash</option>
                </select>

                <div class="button">
                    <button type="submit">Yuborish</button>
                </div>
    
    
    
            </form>

        </div>
        <div class="wrapper__item">




