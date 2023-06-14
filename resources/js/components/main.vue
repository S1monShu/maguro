<template>
    <div id="mainpage-wrapper">
        <div class="preview-wrapper">
            <div class="order-wrapper">
                <div class="order-adress">
                    <p>
                        Maguro на Ботаническом Саду, 37
                    </p>
                </div>
                <div class="order-button">
                    <p>
                        Забронировать<br>столик
                    </p>
                </div>
            </div>
        </div>
        <MCatalog></MCatalog>
    </div>
</template>
<script>
import MCatalog from './m-catalog.vue';
export default {
    name: 'mainpage',
    components: {
    MCatalog
}
}
</script>
<style>
    .preview-wrapper{
        height: 636px;
        width: 100%;
        background-image: url(../assets/img/unsplash_j3WPrwQKhXU.png);
        background-size: cover;
    }
    .order-wrapper{
        display: flex;
        justify-content: space-between;
        position: absolute;
        right: 0;
        width: 1590px;
        height: 120px;
        background-color: #FFFFFF;
        margin-top: 466px;
        border-radius: 25px 0 0 25px;
    }
    .order-adress{
        display: flex;
        align-items: center;
        font-family: 'Alegreya Sans SC';
        font-weight: 700;
        font-size: 24px;
        margin-left: 90px;
    }
    .order-button{
        cursor: pointer;
        display: flex;
        align-items: center;
        text-align: center;
        box-shadow: 8px 0px 20px rgba(0, 0, 0, 25%);
        box-shadow: -8px 0px 20px rgba(0, 0, 0, 25%);
        background-color: #332D2D;
        font-family: 'Alegreya Sans SC';
        font-weight: 700;
        font-size: 24px;
        color: #FFFFFF;
        padding: 17px 53px 17px 53px;
        margin-right: 11vw;
    }
    .order-button:hover{
        background-color: #514B4B;
    }
    .order-button p{
        margin: 0;
    }
    @media(max-device-width:456px){
        .order-wrapper{
            height: 60px;
            width: 400px;
        }
        .order-button{
            font-size: 11px;
            padding: 9px 25px 9px 25px;
        }
        .order-adress{
            font-size: 13px;
            margin-left: 25px;
        }
    }
</style>