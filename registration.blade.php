<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Сторінка Регістрації</title>
</head>
<style>
*{
    background: #733026;
}
.icon1{
    width: auto;
}
.icon2{
    width: auto;
}
.icon3{
    width: auto;
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
    margin-left: 60%;
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
    margin-right: 100px;
}
.flex-container9{
    display: flex;
    flex-direction: column;
    margin-right: 100px;
    text-align: left;
    margin-left: 30%;
}
.flex-container10{
    display: flex;
    flex-direction: column;
    margin-right: 100px;
    /*text-align: center;*/
}
.flex-container11{
    display: flex;
    flex-direction: column;
    margin-right: 100px;
    /*text-align: center;*/
}
.flex-container12{
    display: flex;
    flex-direction: column;
    margin-right: 100px;
    /*text-align: center;*/
}
.flex-container13{
    display: flex;
    flex-direction: column;
    margin-right: 100px;
    /*text-align: center;*/
}
.flex-container14{
    display: flex;
    flex-direction: column;
    background: #733026;
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
.input1{
    color: #F5E9E9;
    font-family: 'Labrada', serif;
    text-align: left;
    margin-left: 4%;
}
.input2{
    color: #F5E9E9;
    font-family: 'Labrada', serif;
    text-align: left;
    margin-left: 2%;
}
.input3{
    color: #F5E9E9;
    font-family: 'Labrada', serif;
    text-align: left;
    margin-left: 5%;
}
.label1{
    color: #F5E9E9;
    font-family: 'Labrada', serif;
}
.label2{
    color: #F5E9E9;
    font-family: 'Labrada', serif;
}
.label3{
    color: #F5E9E9;
    font-family: 'Labrada', serif;
}
.header1{
    color: #F5E9E9;
    font-family: 'Labrada', serif;
    font-size: 200%;
    margin: 5% 11% 2.5% 11%;
    text-align: left;
    margin-left: 30%;
}
.submit2{
    background-color: #DCC7BE;
    border-radius: 30px;
    color: #010100;
    padding: 10px 10px;
    text-align: left;
    text-decoration: none;
    display: inline-block;
    font-size: 150%;
    width: 36%;
    margin: 6% 32% 20% 30%;
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
        margin: 6% 50% 10% 10%;
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
        font-size: 96%;
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
@media (min-width: 400px) and (max-width: 1000px) {
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
<div class="flex-container14">    
    <div class="flex-container1">
        <img src="{{ URL('images/Емблема.png')}}" width="7.3%" height="6.4%" class="im1" alt="Емблема"/>
        <div class="flex-container2" >
            <p class="p1" >Ведмежа мрія</p>
            <p class="p2">Благодійна організація з допомоги тваринам</p>
        </div>
        
        <div class="flex-container3">
            <p class="p4">Наші контакти</p>
            <p class="p5">+3809947367</p>
        </div>
    </div>
    <h1 class="header1">Регістрація</h1><br><br> 
    <div class="flex-container9">
        <form class="col-3 offset-4 border rounded" method="POST" >
            @csrf
            <div class="flex-conteiner10" text-align="center">
                <label for="email" class="label1">Ваш email</label>
                <input class="input1" id="email" name="email" type="text" value="" placeholder="Email">
                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div><br><br>   
            <div class="flex-conteiner11">
                <label for="password" class="label2">Ваш пароль</label>
                <input class="input2" id="password" name="password" type="text" value="" placeholder="Password">
                @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div><br><br>
            <div class="flex-conteiner12">
                <label for="name" class="label3">Ваше ім'я</label>
                <input class="input3" id="name" name="name" type="text" value="" placeholder="Name">
                @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div><br><br>
            <div class="flex-conteiner13">
                <button class="submit2" type="submit" name="send" value="1">Зареєструвати</button>
            </div>   
        </form>
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
</div>    
</body>
</html>
