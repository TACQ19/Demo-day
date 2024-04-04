<template>
  <ion-page>
    <ion-tabs>
      <ion-router-outlet></ion-router-outlet>
      <ion-tab-bar slot="bottom">
        <ion-tab-button tab="vote" href="/tabs/vote">
          <ion-icon aria-hidden="true" :icon="triangle" />
          <ion-label>Vote</ion-label>
        </ion-tab-button>

        <ion-tab-button tab="winner" href="/tabs/winner">
          <ion-icon aria-hidden="true" :icon="ellipse" />
          <ion-label>winner</ion-label>
        </ion-tab-button>

        <ion-tab-button tab="add" href="/tabs/add">
          <ion-icon aria-hidden="true" :icon="square" />
          <ion-label>Add</ion-label>
        </ion-tab-button>
      </ion-tab-bar>
    </ion-tabs>
  </ion-page>
</template>

<script setup lang="ts">
import { IonTabBar, IonTabButton, IonTabs, IonLabel, IonIcon, IonPage, IonRouterOutlet } from '@ionic/vue';
import { ellipse, square, triangle } from 'ionicons/icons';
</script>
