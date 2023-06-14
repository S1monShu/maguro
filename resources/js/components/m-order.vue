<template>
    <main>
        <p class="delivery-script">Доставка</p>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d44091.08790839129!2d30.25276401070611!3d59.821458008670476!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46962525dd5faf51%3A0xa4d31de5b2f53849!2sMaguro%20Sushi!5e0!3m2!1sru!2sru!4v1686745550190!5m2!1sru!2sru" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <!--We need a mapa-->
        <form action="">
        <div class="delivery-inputs__list">
            <input type="text" placeholder="Улица" required>
            <input type="number" placeholder="Номер дома" required>
            <input type="number" placeholder="Квартира" required>
            <input type="number" placeholder="Домофон">
            <input type="number" placeholder="Номер телефона" required>
        </div>
        <p class="pay-script">Способ оплаты</p>
        <p class="pay__card-script">Картой</p>
        <div class="pay__card-place">
            <input class="card-place__first" type="number" placeholder="Номер карты" required><br />
               <input style="margin-right: 1vw;" class="card-place__other" type="number" placeholder="ММ/ГГ" required>
                <input class="card-place__other" type="number" placeholder="CVC/CVV" required> 
        </div>
        <button class="pay__card-button">Оформить заказ</button>
    </form>
    </main>
</template>
<script>
export default {
    
}
</script>
<style>
main * {
    box-sizing: border-box;
    font-family: "Alegreya Sans SC";
  }
  *::placeholder{
      color: black;
  }
  main iframe{
      width: 100%;
      margin: 0;
  }
  .delivery-script {
    font-size: 40px;
    font-weight: 700; /*need Glegoo*/
    margin: 12vh 15vw 7vh 15vw;
    line-height: 72px;
  }
  .delivery-inputs__list {
    margin: 12vh 14.5vw 4vh 14.5vw;
  }
  .delivery-inputs__list input {
    margin: 0 1.2vw 0 1.2vw;
    width: 11.5vw;
    border: none;
    border-bottom: 1px solid black;
    padding: 1vh 0;
    font-size: 20px;
    outline: none;
  }
  .pay-script {
    font-size: 32px;
    font-weight: 700;
    margin: 12vh 15vw 0 15vw;
    line-height: 72px;
  }
  .pay__card-script {
    font-size: 24px;
    font-weight: 700;
    margin: 3vh 15vw 1vh 15vw;
    line-height: 72px;
  }
  .pay__card-place{
      margin: 0 15vw 0 15vw;
      width: 24vw;
      padding: 7vh 1vw 5.5vh 1vw;
      background: #D9D9D9;
  }
  .pay__card-place input{
      border: none;
      border-bottom: 1px solid black;
      padding: 1vh 0;
      font-size: 20px;
      outline: none;
      background: none;
  }
  .card-place__first{
      width: 100%;
  }
  .card-place__other{
      width: 47.3%;
      margin: 3vh 0 0 0;
  } 
  .pay__card-button{
      margin: 12vh 10vw 28vh 58.5vw;
      padding: 1.3vh 8.85vw;
      background: #CB6726;
      color: white;
      font-size: 20px;
      border: none;
      border-radius: 100px;
      cursor: pointer;
  }
  @media (max-device-width: 980px) and (min-device-width: 456px){
    .delivery-script{
      font-size: 24px;
    }
    .delivery-inputs__list input{
      font-size: 16px;
    }
    .pay-script{
      font-size: 21px;
    }
    .pay__card-script{
      font-size: 19px;
    }
    .pay__card-place{
      width: 45vw;
    }
    .pay__card-place input{
      font-size: 16px;
    }
    .pay__card-button{
      font-size: 16px;
    }
  }
  @media(max-device-width:456px){
    .delivery-script{
      font-size: 22px;
    }
    .delivery-inputs__list input{
      font-size: 14px;
      width: 70vw;
    }
    .pay-script{
      font-size: 19px;
      margin-bottom: 0.5vh;
    }
    .pay__card-script{
      font-size: 17px;
    }
    .pay__card-place{
      width: 70vw;
      margin-left: 15vw
    }
    .pay__card-place input{
      font-size: 14px;
    }
    .pay__card-button{
      font-size: 14px;
      width: 70vw;
      margin: 12vh 2vw 28vh 14.5vw;
    }
  }
</style>