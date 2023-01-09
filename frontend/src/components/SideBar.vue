<template>
   <v-app id="inspire">
      <v-navigation-drawer
         class="drawer"
         app
         dark
         color="black"
         v-model="drawer"
         :mini-variant.sync="mini"
      >
         <v-list-item class="text-center mt-5">
            <v-list-item-avatar class="my-5">
               <v-img src="../../public/img/unnamed.webp"></v-img>
               
               </v-list-item-avatar>
               <v-list-item-title class="white--text">Rafael</v-list-item-title>
               <!-- <v-list-item-title class="grey--text ">Assistente de Desenvolvimento</v-list-item-title> -->
               <v-btn
          icon
          @click.stop="mini = !mini"
        >
          <v-icon>mdi-chevron-left</v-icon>
        </v-btn>
               
         </v-list-item>
         <v-divider class="mx-10 mt-3" ></v-divider>
         <v-list flat  dense class="mt-5">
               <v-list-item-group v-model="selectedItem" color="teal" >
                  <v-list-item v-for="(item, i) in items" :key="i" active-class="border">
                     <v-list-item-icon class="ml-4">
                           <v-icon v-text="item.icon" ></v-icon>
                     </v-list-item-icon>
                     <v-list-item-content>
                           <v-list-item-title v-text="item.text"></v-list-item-title>
                     </v-list-item-content>
                     </v-list-item> 
               </v-list-item-group>
         </v-list>
      </v-navigation-drawer>
      
         <v-app-bar app dark color="black">
            <v-text-field
                  label="Search ..."
                  append-icon="mdi-magnify"
                  filled
                  rounded
                  dense
                  class="mt-6"
               ></v-text-field>
            <v-spacer></v-spacer>
         <v-btn class="" fab dark small>
            <v-icon dark>
            fas fa-bell
            </v-icon>
         </v-btn>
         <v-btn class="ml-2" fab dark small>
            <v-icon dark>
            far fa-comment-dots
            </v-icon>
         </v-btn>
         <v-btn class="ml-2" fab dark small>
            <v-icon dark>
            fas fa-box
            </v-icon>
         </v-btn>
         <v-btn class="ml-2" fab dark small>
            <v-icon dark>
            fas fa-cog
            </v-icon>
         </v-btn>
         </v-app-bar>
   </v-app>
   </template>
   
   <script>
   export default {
       data: () =>({
         drawer: true,
         mini: true,
         selectedItem: 0,
         items: [
            {icon: 'fas fa-tachometer-alt', text: 'Dashboard'},
            {icon: 'fas fa-exchange-alt', text: 'Transações'},
            {icon: 'fas fa-credit-card', text: 'Cartão de Crédito'},
            {icon: 'fas fa-bank', text: 'Contas'},
            {icon: 'fas fa-pie-chart', text: 'Relatórios'},
            {icon: 'fas fa-cog', text: 'Configurações'},
            {icon: 'fas fa-password', text: 'Carteiras'},
         ],
         
      })
   }
   </script>
   
   <style>
   .drawer {
      min-width: 100px;
   }
   .border  {
       border-left: 4px solid teal
   }
   .gradient {
     background: rgb(27,31,28);
   background: linear-gradient(90deg, rgba(27,31,28,1) 0%, rgba(9,121,11,1) 35%, rgba(5,83,45,1) 100%);
   }
   </style>