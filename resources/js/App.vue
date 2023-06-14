<template>
    <div id="app">
        <mHeader></mHeader>
        <RouterView></RouterView>
        <MFooter />
    </div>
</template>
<script>
import mHeader from './components/m-header.vue';
import mainpage from './components/main.vue';
import MFooter from './components/m-footer.vue';
export default{
    name: 'app',
    components:{
    mainpage,
    mHeader,
    MFooter
}
}
</script>
<style>
    body{
        overflow-x: hidden;
        margin: 0;
        padding: 0;
        width: 100%;
    }
    @font-face {
        font-family: 'Glegoo';
        src: url('../js/assets/fonts/Glegoo-Regular.ttf');
        
    }
    @font-face {
        font-family: 'Alegreya Sans SC';
        src: url('../js/assets/fonts/AlegreyaSansSC-Regular.ttf');
        
    }
</style>