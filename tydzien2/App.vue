<script setup>
import HelloWorld from './components/HelloWorld.vue'
</script>

<template>
  <header>Zadania</header>
  <div>
      <h1>
          Galeria zdjęć
      </h1>
      <div class="image-container">
          <img v-for="(image, index) in images" 
              :key="index" :src="image" alt="Image" 
              @click="showPreview(image)">
      </div>
      <div class="modal" v-if="previewImage">
          <span class="close" 
              @click="closePreview">
              &times;
          </span>
          <img :src="previewImage" alt="Preview">
      </div>
  </div>
  <div>
      <h1>Buttony</h1>
      <button onclick="klikaj()">Button</button>
      <p id="blu">0</p>
      <button onclick="klikaj2()">Button</button>
      <p id="blu2">0</p>
      <button onclick="klikaj3()">Button</button>
      <p id="blu3">0</p>
      <button onclick="klikaj4()">Button</button>
      <p id="blu4">0</p>
      <button onclick="klikaj5()">Button</button>
      <p id="blu5">0</p>
      <button onclick="klikaj6()">Button</button>
      <p id="blu6">0</p>
      <button onclick="klikaj7()">Button</button>
      <p id="blu7">0</p>
      <button onclick="klikaj8()">Button</button>
      <p id="blu8">0</p>
      <button onclick="klikaj9()">Button</button>
      <p id="blu9">0</p>
      <button onclick="klikaj10()">Button</button>
      <p id="blu10">0</p>
      <button onclick="klikaj11()">Button</button>
      <p id="blu11">0</p>
      <button onclick="klikaj12()">Button</button>
      <p id="blu12">0</p>
      <button onclick="klikaj13()">Button</button>
      <p id="blu13">0</p>
      <button onclick="klikaj14()">Button</button>
      <p id="blu14">0</p>
      <button onclick="klikaj15()">Button</button>
      <p id="blu15">0</p>
      <button onclick="klikaj16()">Button</button>
      <p id="blu16">0</p>
      <button onclick="klikaj17()">Button</button>
      <p id="blu17">0</p>
      <button onclick="klikaj18()">Button</button>
      <p id="blu18">0</p>
      <button onclick="klikaj19()">Button</button>
      <p id="blu19">0</p>
      <button onclick="klikaj20()">Button</button>
      <p id="blu20">0</p>
  
  </div>

  <footer>Praktyki</footer>
</template>


<script>
  export default {
      data() {
          return {
              images: [
'https://www.shutterstock.com/image-photo/maldives-islands-ocean-tropical-beach-600nw-1938868960.jpg',
'https://t3.ftcdn.net/jpg/03/10/95/44/360_F_310954464_A4JiQDD6a8L0J5KboSTrrruBfC98TbYU.jpg',
'https://media.istockphoto.com/id/1296913338/photo/sonoran-sunset.jpg?s=612x612&w=0&k=20&c=lGXd-vnDmH_bCnR53BNmwxsh3qn8MBLQoh5M926QAbY='
              ],
              previewImage: ''
          };
      },
      methods: {
          showPreview(image) {
              this.previewImage = image;
          },
          closePreview() {
              this.previewImage = '';
          }
      }
  };

</script>  

<style>
  header, footer {
    background-color: #000;
    margin-left: 25%;
    margin-right: 25%;
    padding: 10px;
    border-radius: 15px;
    box-shadow: 0px 0px 15px #000;
  }
  #blu,#blu2,#blu3,#blu4,#blu5,#blu6,#blu7,#blu8,#blu9,#blu10,
  #blu11,#blu12,#blu13,#blu14,#blu15,#blu16,#blu17,#blu18,#blu19,#blu20{
      color: yellow;
      font-size: 24px;
  }
  .image-container {
      display: flex;
      flex-wrap: wrap;
  }

  .image-container img {
      width: 200px;
      height: 200px;
      margin: 10px;
      cursor: pointer;
      box-shadow: 0px 0px 15px black;
  }

  .modal {
      display: block;
      position: fixed;
      z-index: 1000;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgba(0, 0, 0, 0.8);
  }

  .modal img {
      margin: auto;
      display: block;
      max-width: 80%;
      max-height: 80%;
  }

  .close {
      color: #fff;
      position: absolute;
      top: 15px;
      right: 35px;
      font-size: 30px;
      cursor: pointer;
  }

  .close:hover,
  .close:focus {
      color: #ccc;
      text-decoration: none;
      cursor: pointer;
  }
</style>

