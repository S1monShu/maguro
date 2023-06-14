<template>
    <footer>
      <div class="footer-wrapper">
        <div class="info-wrapper">
            <div class="logo">
                <img src="../assets/img/Ellipse15.png" alt="">
                <h1>Maguro</h1>
            </div>
            <div class="websites-container">
                <img src="../assets/img/Twitter.png">
                <img src="../assets/img/Instagram.png">
                <img src="../assets/img/Facebook.png">
            </div>
        </div>
        <div class="menu-wrapper">
            <p>Меню</p>
                <div class="menu-items">
                    <p>Суши</p>
                    <p>Классические роллы</p>
                    <p>Горячие роллы</p>
                    <p>Лапша WOK</p>
                </div>
          </div>
          <div class="number-info-wrapper">
            <p class="number">8-800-000-00-00</p>
            <p class="date">Принимаем заказы<br>с 8:00 до 22:00</p>
          </div>
      </div>
      
    </footer>
</template>
<script>
export default {
    name: 'mfooter'
}
</script>
<style scoped>
    footer{
        height: 252px;
        background-color: #FFFFFF;
        padding-top: 36px;
    }
    .info-wrapper{
        width: fit-content;
    }
    .footer-wrapper{
        padding: 0 5% 0 10%;
        display: flex;
    }
    .logo{
        display: flex;
        align-items: center;
    }
    .logo h1{
        padding-left: 20px;
        font-size: 40px;
        color: #A81B2C;
        font-family: 'Glegoo';
        font-weight: 500;
        margin: 0;
    }
    .websites-container{
        width: 220px;
        display: flex;
        justify-content: space-between;
        margin-top: 46px;
    }
    .menu-wrapper{
        margin-left: 169px;
        width: fit-content;
    }
    .menu-wrapper p{
        cursor: pointer;
        margin: 0 0 12px 0;
        font-size: 20px;
        width: fit-content;
    }
    .menu-items{
        width: fit-content;
    }
    .menu-items p{
        margin: 4px 0 0 0;
        font-size: 14px;
    }
    .number-info-wrapper{
        text-align: right;
        margin-left: auto;
        width: fit-content;
    }
    .number{
        margin-top: 0;
        font-size: 26px;
    }
    @media(max-device-width:456px){
        footer{
            height: 150px;
        }
        .logo h1{
            font-size: 14px;
        }
        .logo img{
            width: 25px;
            height: 25px;
        }
        .websites-container{
            width: 100px;
            margin-top: 23px;
        }
        .websites-container img{
            width: 25px;
            height: 25px;
        }
        .menu-wrapper{
            display: none;
        }
        .number{
            font-size: 16px;
        }
        .date{
            font-size: 12px;
        }
    }
</style>