<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Bear_Dream_Main.css" type="text/css">
    <title>Головна Сторінка</title>
</head>
<style>
*{
    background: #733026;
}
.submit1{
    margin: 1% 35% 0.75% 20%;
    color: #F5E9E9;
    font-family: 'Labrada', serif;
}

.flex-container1{
    display: flex;
    background-size: 500px;
}
.flex-container1 img{
    margin: 1.6% 1.5% 3.5% 1.5%;
}
.flex-container2{

}
.flex-container3{
    display: flex;
    flex-direction: column;
    margin-right: 10%;
}
.flex-container4{
    display: flex;
    flex-direction: column;
}
.flex-container5{
    display: flex;
    margin-bottom: 3%;

}
.flex-container6{
    display: flex;
    flex-direction: column;
    margin-right: 45%;
}
.flex-container7{
    display: flex;

}
.flex-container8{
    display: flex;
    flex-direction: column;
    margin-right: 50px;
}
.p1{
    width: 200%;
    margin: 3% 1.5% 0.75% 1.5%;
    color: #F5E9E9;
    font-family: 'Labrada', serif;
}
.p2{
    width: 400%;
    margin: 2% 45% 3.5% 1.5%;
    color: #F5E9E9;
    font-family: 'Labrada', serif;
    font-size: 75%;
}
.p3{
    width: 300%;
    margin: 0.5% 5% 0.75% 40%;
    color: #F5E9E9;
    font-family: 'Labrada', serif;
}
.p4{
    width: 200%;
    margin: 2% 10% 0.75% 1.8%;
    color: #F5E9E9;
    font-family: 'Labrada', serif;
}
.p5{
    width: 200%;
    margin: 0.75% 10% 3.5% 25%;
    color: #F5E9E9;
    font-family: 'Labrada', serif;
    font-size: 66%;
}
.p6{
    color: #F5E9E9;
    font-family: 'Labrada', serif;
    margin-left: 11%;
    margin-right: 11%;
}
.p7{
    width: 500%;
    margin: 2% 1.5% 0.75% 38.5%;
    color: #F5E9E9;
    font-family: 'Labrada', serif;
}
.p8{
    width: 200%;
    margin: 2% 10% 0.75% 1.5%;
    color: #F5E9E9;
    font-family: 'Labrada', serif;
}
.p9{
    width: 200%;
    margin: 0.75% 5% 3.5% 25%;
    color: #F5E9E9;
    font-family: 'Labrada', serif;
    font-size: 66%;
}
.header1{
    color: #F5E9E9;
    font-family: 'Labrada', serif;
    font-size: 200%;
    margin: 5% 11% 2.5% 11%
}



.submit2{
    background-color: #DCC7BE;
    border-radius: 30px;
    color: #010100;
    padding: 10px 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 150%;
    width: 36%;
    margin: 6% 32% 3%;
    cursor: pointer;
}
.submit3{
    background-color: #DCC7BE;
    border-radius: 30px;
    color: #010100;
    padding: 8px 8px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 120%;
    width: 25%;
    margin: 3% 37.5% 6%;
    cursor: pointer;
}


@media (min-width: 1300px){
    *{
        font-size: 110%;
    }
    .submit2{
        background-color: #DCC7BE;
        border-radius: 30px;
        color: #010100;
        padding: 10px 10px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 150%;
        width: 46%;
        margin: 6% 27% 3%;
        cursor: pointer;
    }
    .submit3{
        background-color: #DCC7BE;
        border-radius: 30px;
        color: #010100;
        padding: 8px 8px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 120%;
        width: 35%;
        margin: 3% 32.5% 6%;
        cursor: pointer;
    }
    .flex-container6{
        margin-right: 70%;
    }
}
@media (min-width: 480px) and (max-width: 1024px) {
    p {
        font-size: calc(14px + (18 - 14) * ( (100vw - 480px) / ( 1024 - 480) ));
    }
    .submit2{
        font-size: 96%;
    }
    .submit3{
        font-size: 76%;
    }
   .icon1{
        width: 90%;
    }
    .icon2{
        width: 90%;
    }
    .icon3{
        width: 90%;
    }
    
}
@media (min-width: 1000px) and (max-width: 1300px) {
    .flex-container6{
        margin-right: 65%;
    }
    div {
        font-size: calc((14px + (18 - 14) * ( (100vw - 480px) / ( 1024 - 480) ))*1.3);
    }
}
@media (min-width: 700px) and (max-width: 1000px) {
    .flex-container6{
        margin-right: 60%;
    }
}
@media (max-width: 400px) {
    .flex-container6{
        margin-right: 60%;
    }
    .im1{
        width: 6.8%;
        height: 5.5%;
    }
}
</style>
<body>
<div class="flex-container1">
    <img src="{{ URL('images/Емблема.png')}}" width="68%" height="55%" class="im1" alt="Емблема"/>
    <div class="flex-container2" >
        <p class="p1" >Ведмежа мрія</p>
        <p class="p2">Благодійна організація з допомоги тваринам</p>
    </div>
    <a href="Information" class="p3">Про нас</a>
    <div class="flex-container3">
        <p class="p4">Наші контакти</p>
        <p class="p5">+3809947367</p>
    </div>
</div>
<div class="flex-container10">
<img src="./images/Бурий_Ведмідь.png" width="100%" height="" alt="Бурий ведмідь"/>
<div class="flex-container9"><div class="header1">Бурі ведмеді під загрозою вимирання</div>
<div class="p6" align="justify">Ласкаво просимо на сайт, присвячений захисту та допомоги бурим ведмедям!
    Ми зібрали тут всю необхідну інформацію про життя та проблеми цього виду тварин,
    а також пропонуємо можливість підтримати нашу місію та стати частиною команди,
    яка дбає про бурих ведмедів. Їхня чисельність скорочується через безліч загроз,
    включаючи втрату довкілля, браконьєрство, зміну кліматичних умов та інші фактори.
    Ми працюємо над тим, щоб захистити бурих ведмедів та їх місцеперебування,
    надаючи професійну допомогу в їх дослідженні, охороні та відновленні популяції.
    Якщо Ви поділяєте нашу пристрасть до захисту бурих ведмедів,
    приєднуйтесь до нас та допоможіть зберегти цих чудових тварин для майбутніх поколінь.
    Для того, щоб перевести кошти в наш фонд, натисніть “Допомогти тваринам”.
    Також Ви можете дізнатись більше про нашу організацію та куди підуть кошти,
    за допомогою кнопки “Дізнатись більше”. Бажаємо гарного дня!"</div>
</div>
<div class="flex-container4">
    <a href="Conteiner" class="submit2">Допомогти тваринам</a>
    <a href="Information" class="submit3">Дізнатись більше</a>
</div>
<div class="flex-container5">
    <div class="flex-container6">
        <p class="p7">Ми є тут</p>
        <div class="flex-container7">
        <a href="https://www.instagram.com/" class="link1">
            <img src="./images/Instagram_Icon.png" class="icon1"/></a>
        <a href="https://uk-ua.facebook.com/" class="link2">
            <img src="./images/Facebook_Icon.png" class="icon2"/></a>
        <a href="https://twitter.com" class="link3">
            <img src="./images/Twitter_Icon.png" class="icon3"/></a>
        </div>
    </div>
    <div class="flex-container8">
        <p class="p8">Наші контакти</p>
        <p class="p9">+3809947367</p>
    </div>
</div>
</body>
</html>