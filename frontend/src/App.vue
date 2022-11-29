<template>
   <v-app id="inspire">

      <v-navigation-drawer
      v-model="drawer"
      app
      >
         <v-list-item>
         <v-list-item-content>
            <v-list-item-title class="text-h6">
               Application
            </v-list-item-title>
            <v-list-item-subtitle>
               subtext
            </v-list-item-subtitle>
         </v-list-item-content>
         </v-list-item>

         <v-divider></v-divider>

         <v-btn
         width="100%"
            elevation="2"
         >
         <v-icon>mdi-view-dashboard</v-icon>
         <h6>Dashboard</h6>
         </v-btn>
         
         <v-expansion-panel-content>
               Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </v-expansion-panel-content>

         <v-expansion-panels>
         <v-expansion-panel
            v-for="item in items"
            :key="item.titulo"
            link
         >
            <v-expansion-panel-header>
               <v-icon>{{ item.icon }}</v-icon>
               <v-list-item-title>{{ item.title }}</v-list-item-title>
            </v-expansion-panel-header>
            <v-expansion-panel-content>
               Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </v-expansion-panel-content>
         </v-expansion-panel>
         </v-expansion-panels>


         <v-list
         dense
         nav
         >
         <v-list-item
            v-for="item in items"
            :key="item.title"
            link
         >
            <v-list-item-icon>
               <v-icon>{{ item.icon }}</v-icon>
            </v-list-item-icon>

            <v-list-item-content>
               <v-list-item-title>{{ item.title }}</v-list-item-title>
            </v-list-item-content>
         </v-list-item>
         </v-list>
      </v-navigation-drawer>

      <v-app-bar app>
         <v-app-bar-nav-icon @click="drawer = !drawer"></v-app-bar-nav-icon>

         <v-toolbar-title>Minhas Finanças</v-toolbar-title>
      </v-app-bar>

      <v-main>
         <!--  -->
      </v-main>
   </v-app>
</template>

<script>
   export default {
      data: () => ({
         drawer: null,
         items: [
            { title: 'Dashboard', icon: 'mdi-view-dashboard' },
            { title: 'Transações', icon: 'mdi-image' },
            { title: 'Cartão de Crédito', icon: 'mdi-help-box' },
            { title: 'Contas', icon: 'mdi-help-box' },
            { title: 'Relatório', icon: 'mdi-help-box' },
            { title: 'Configurações', icon: 'mdi-help-box' },
            { title: 'Mais Opições', icon: 'mdi-help-box' },
            { title: 'Sair', icon: 'mdi-help-box' },

         ],
      }),
   }
</script>