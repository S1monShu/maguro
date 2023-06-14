<template>
    <div class="section-wrapper">
        <div class="decoration-image-1">
            <img src="../assets/img/pngwing.png">
        </div>
        <div class="catalog-wrapper">
            <h2>Суши</h2>
            <div class="catalog">
                <div class="item" v-for="product in sushi"><img :src="product.img">
                <div class="item-describtion">
                    <p class="name"> {{ product.name }} </p>
                    <p class="ingredients"> {{ product.ingredients }}</p>
                    <p class="price"> {{ product.price }} </p>
                    <div id="button" @click="addToCart(product)">Добавить в корзину</div>
                    <div id="button2" @click="addToCart(product)">+</div>
                </div>
                </div>
            </div>
            <h2>Классические роллы</h2>
            <div class="catalog">
                <div class="item" v-for="product in roll"><img :src="product.img">
                    <div class="item-describtion">
                        <p class="name"> {{ product.name }} </p>
                        <p class="ingredients"> {{ product.ingredients }}</p>
                        <p class="price"> {{ product.price }} </p>
                        <div id="button" @click="addToCart(product)">Добавить в корзину</div>
                        <div id="button2" @click="addToCart(product)">+</div>
                    </div>
                </div>
            </div>
            <h2>Горячие роллы</h2>
            <div class="catalog">
                <div class="item" v-for="product in hotRoll"><img :src="product.img">
                    <div class="item-describtion">
                        <p class="name"> {{ product.name }} </p>
                        <p class="ingredients"> {{ product.ingredients }}</p>
                        <p class="price"> {{ product.price }} </p>
                        <div id="button" @click="addToCart(product)">Добавить в корзину</div>
                        <div id="button2" @click="addToCart(product)">+</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
import { toRaw } from "vue";
import { mapGetters, mapActions } from 'vuex';

export default {
    name: 'catalog',
    data(){
        return {
            sushi: 'sushi',
            roll: 'roll',
            hotRoll: 'hotroll',
        }
    },
    computed: {
        ...mapGetters([
            'PRODUCTS','CART'
        ]),
    },
    methods:{
        ...mapActions([
            'GET_PRODUCTS_FROM_API',
            'ADD_TO_CART'
        ]),
        addToCart(product){
            this.ADD_TO_CART(product)
        },
    },
    async mounted(){
        await this.GET_PRODUCTS_FROM_API(),
        this.sushi = toRaw(Object.values(this.PRODUCTS(this.sushi)))
        this.roll = toRaw(Object.values(this.PRODUCTS(this.roll)))
        this.hotRoll = toRaw(Object.values(this.PRODUCTS(this.hotRoll)))
    }
}
</script>
<style>
    .section-wrapper{
        background-color: #CCCCCC;
    }
    .catalog-wrapper{
        position: relative;
        height: fit-content;
        width: 100%;
        padding-bottom: 150px;
    }
    .decoration-image-1{
        position: absolute;
        margin-top: -70px;
        z-index: 2;
    }
    h2{
        position: relative;
        width: fit-content;
        padding-top: 150px;
        margin-top: 0;
        left: 10%;
        margin-bottom: 56px;
        font-size: 36px;
    }
    .catalog{
        position: relative;
        display: grid;
        grid-template-columns: repeat(4, 350px);
        grid-row-gap: 50px;
        grid-column-gap: 40px;
        width: 1520px;
        left: 10%;
    }
    .item img{
        position: relative;
        z-index: 1;
        height: 208px;
        width: 350px;
        border-radius: 30px 30px 0 0;
    }
    .item-describtion{
        position: relative;
        background-color: #332D2D;
        height: 226px;
        width: 300px;
        z-index: 2;
        margin-top: -45px;
        border-radius: 40px;
        padding: 25px;
    }
    .item p{
        color: #FFFFFF;
        font-family: 'Alegreya Sans SC';
    }
    .name{
        font-size: 20px;
        margin: 0;
    }
    .ingredients{
        font-size: 14px;
        margin-top: 6px;
    }
    .price{
        font-size: 20px;
        margin-top: 30px;
    }
    #button{
        cursor: pointer;
        position: absolute;
        bottom: 25px;
        background-color: #AD4908;
        width: 300px;
        font-size: 16px;
        color: #FFFFFF;
        border-radius: 40px;
        padding: 8px 0 8px 0;
        text-align: center;
    }
    #button2{
        display: none;
    }
    #button:hover{
        background-color: #CB6726;
    }
    #button:active{
        background-color: #FFFFFF;
        color: #000000;
        border: 1px solid #362C2C;
    }
    @media(max-device-width:456px){
        h2{
            padding-top: 70px;
            font-size: 24px;
            margin-bottom: 36px;
        }
        .decoration-image-1{
            display: none;
        }
        .catalog{
            grid-template-columns: repeat(2, 160px)
        }
        .item img{
            width: 160px;
            height: 100px;
            border-radius: 10px 10px 0 0;
        }
        .item-describtion{
            width: 136px;
            height: 100px;
            padding: 12px;
            border-radius: 10px;
        }
        .name{
            font-size: 11px;
        }
        .ingredients{
            font-size: 9px;
        }
        .price{
            margin-top: 20px;
            font-size: 11px;
        }
        #button{
            display: none;
        }
        #button2{
            display: block;
            cursor: pointer;
            position: absolute;
            bottom: 14px;
            left: 110px;
            background-color: #AD4908;
            font-size: 16px;
            color: #FFFFFF;
            border-radius: 10px;
            padding: 8px 13px 8px 13px;
            text-align: center;
        }
    }
</style>