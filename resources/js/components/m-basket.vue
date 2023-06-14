<template>
    <div class="busket-container">
        <div class="section">
            <div class="cart">
                <h1 class="cart">Корзина</h1>
            </div>
        </div>
    
        <div class="items">
            <div class="item">
                <div class="img">
                    <img src="../assets/img/Rectangle454.png" alt="">
                </div>
                <div class="information">
                    <div class="item_information">
                        <div class="title"><h2>Суши еба</h2></div>
                        <div class="text"><p>Очень вкусно
                        </p></div>
                    </div>
                    <div class="delete" @click="deleteItem(product.id)">
                        <img src="../assets/img/Vector(2).png" alt="">
                    </div>
                </div>
            </div>
            <div class="item" v-for="product in cart_products" :key="product.id">
                <div class="img">
                    <img :src="product.img" alt="">
                </div>
                <div class="information">
                    <div class="item_information">
                        <div class="title"><h2>{{product.name}}</h2></div>
                        <div class="text"><p>{{product.ingredients}}</p></div>
                    </div>
                    <div class="delete" @click="deleteItem(product.id)">
                        <img src="../assets/img/Vector(2).png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <RouterLink tag="div" id="button" :to="{name: 'mOrder'}">Заказать</RouterLink>
    </div>
</template>
<script>
import { mapGetters, mapActions } from 'vuex';
import { toRaw } from 'vue';

export default {
    name: 'mBusket',
    data(){
        return {
            cart_products: []
        }
    },
    methods: {
        ...mapActions([
            'DELETE_FROM_CART'
        ]),
        deleteItem(id){
            this.DELETE_FROM_CART(id)
        }
    },
    computed: {
        ...mapGetters([
            'CART'
        ]),
    },
    mounted(){
        this.cart_products = toRaw(Object.values(this.CART))
        console.log(this.cart_products)
    }
}
</script>
<style scoped>
body{
    background-color: #FFF;
}
.busket-container{
    margin: 90px 0 150px 0;
}
div.cart{
    display: flex;
    justify-content: center;
}
h1.cart{
    font-family: 'Alegreya Sans SC bold';
    font-style: normal;
    font-weight: 700;
    margin-right: 66%;
}
div.items{
    position: relative;
    left: 13%;
    width: 1400px;
    margin-bottom: 80px;
}
.img img{
    border-radius: 15px;
    height: 212px;
}
div.item{
    display: flex;
    width: 100%;
    justify-content: center;
    margin-bottom: 30px;
}
div.information{
    display: flex;
    margin-left: 20px;
    background-color: #CCCCCC;
    width: 100%;
    border-radius: 14px;
}
div.delete{
    align-items: center;
    cursor: pointer;
    justify-content: center;
    background-color: #AD4908;
    display: flex;
    width: 90px;
    margin-right: 1px;
    height: 100%;
    border-radius: 0px 14px 14px 0;
}
.delete img{
    width: 30px;
    height: auto;
}
.title{
    width: fit-content;
}
div.title h2{
    width: fit-content;
    font-family: 'Alegreya Sans SC';
    font-size: 24px;
    margin: 20px 0 0 -14px;
    font-style: normal;
    font-weight: 400;
    padding-top: 0;
}
div.text p{
    width: 345px;
    font-family: 'Alegreya Sans SC';
    font-family: 'Alegreya Sans SC';
    font-style: normal;
    font-weight: 400;
    font-size: 16px;
    color: #000;
}
div.item_information{
    margin-left: 32px;
    width: 100%;
}
a{
    text-decoration: none;
}
#button{
    position: relative;
    z-index: 1;
    top: 20%;
    left: 62%;
    padding: 15px 200px 15px 200px;
}

@media (max-width: 820px) {
    div.item {
        display: flex;
        width: 73%;
        justify-content: center;
    }
    div.img{
        height: 100px;
    }
    div.information {
        display: flex;
        margin-left: 20px;
        background-color: #CCCCCC;
        width: 100%;
        border-radius: 14px;
    }
    div.item_information {
        margin-left: 32px;
        width: 100%;
    }
    div.delete {
        align-items: center;
        cursor: pointer;
        justify-content: center;
        background-color: #AD4908;
        display: flex;
        width: 90px;
        margin-right: 1px;
        height: 100%;
        border-radius: 0px 14px 14px 0;
    }
    @media(max-device-width:456px){
        .busket-container{
            height: 1000px;
        }
        h1.cart{
            margin-right: 53%;
            font-size: 24px;
        }
        .img img{
            border-radius: 10px;
            width: 100px;
            height: 60px;
        }
        div.items{
            margin-top: 14px;
            left: 25%;
            width: 350px;
        }
        div.item_information{
            width: 70%;
        }
        div.item{
            height: 60px;
            width: 200px;
        }
        div.title h2{
            font-size: 16px;
            margin-top: 20px;
            width: 200px;
        }
        div.text p{
            display: none;
        }
        div.delete{
            width: 40px;
        }
        div.delete img{
            width: 20px;
            height: auto;
        }
    }
}
</style>