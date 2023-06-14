<template>
    <header>
        <RouterLink tag="div" class="logo" :to="{name: 'main'}">
            <img src="../assets/img/Ellipse15.png" alt="">
            <h1>Maguro</h1>
        </RouterLink>

        <div class="menu">
            <li><a href="#">Меню</a></li>
            <li><a href="#">Зона доставки</a></li>
            <li><a href="#">Бронь столика</a></li>
        </div>

        <div class="shoppingCartRegistration">
            <RouterLink tag="div" :to="{name: 'mBasket'}" class="shopCart">
                <img src="../assets/img/Vector(1).png" alt="">
            </RouterLink>

            <div class="register">
                <img src="../assets/img/Vector.png" alt="">
            </div>
        </div>
    </header>
</template>
<script>
    export default{
        name: 'mheader'
    }
</script>
<style scoped>

header{
    padding: 0 5% 0 5%;
    justify-content: space-around;
    height: 80px;
    display: flex;
    background-color: #FFFFFF;
}
a{
    align-items: center;
    display: flex;
}
a img{
    width: 50px;
    height: 50px;
}
a{
    text-decoration: none;
}
a h1{
    padding-left: 20px;
    font-size: 40px;
    color: #A81B2C;
    font-family: 'Glegoo';
    font-style: normal;
    font-weight: 400;
}
div.menu{
    align-items: center;
    display: flex;
}
div.menu li {
    list-style: none;
    text-decoration: none;
    padding-left: 4vw;
    padding-right: 4vw;
}
div.menu li img{
    cursor: pointer;
    margin-left: 5px;
}
div.menu li a{
    list-style: none;
    text-decoration: none;
    font-family: 'Alegreya Sans SC';
    font-style: normal;
    font-weight: 400;
    font-size: 24px;
    color: black;
}
div.shoppingCartRegistration{
    display: flex;
    align-items: center;
}
div.shopCart{
    align-items: center;
    display: flex;
    
}
.shopCart img{
    width: 29px;
    height: 29px;
    padding-right: 20px;
}
div.circle p{
    font-family: 'Alegreya Sans SC';
    font-size: 24px;
}
@media(max-device-width:456px){
    header{
        height: 42px;
    }
    .logo img{
        height: 25px;
        width: 25px;
        margin-left: 100px;
    }
    .logo h1{
        font-size: 14px;
    }
    .menu{
        display: none;
    }
}
</style>