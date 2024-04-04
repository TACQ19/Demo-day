<template>
  <ion-page>
    <ion-header>
      <ion-toolbar>
        <ion-title>Winner</ion-title>
      </ion-toolbar>
    </ion-header>
    <ion-content :fullscreen="true">
      <ion-header collapse="condense">
        <ion-toolbar>
          <ion-title size="large">Winner</ion-title>
        </ion-toolbar>
      </ion-header>
      <ion-text size="large">And the greatest winner is: XXXXX</ion-text>

      <ExploreContainer name="Winner" />
    </ion-content>
  </ion-page>
</template>

<script setup lang="ts">
import { IonPage, IonHeader, IonToolbar, IonTitle,IonText, IonContent } from '@ionic/vue';
import ExploreContainer from '@/components/ExploreContainer.vue';
</script>
