<template>
  <ion-page>
    <ion-header>
      <ion-toolbar>
        <ion-title>Add pitch</ion-title>
      </ion-toolbar>
    </ion-header>
    <ion-content :fullscreen="true">
      <ion-header collapse="condense">
        <ion-toolbar>
          <ion-title size="large">Add pitch</ion-title>
        </ion-toolbar>
      </ion-header>
      <ion-item>
        <ion-label position="floating">Nome</ion-label>
        <ion-input model="name" type="text"></ion-input>
      </ion-item>
      <ExploreContainer name="add" />
    </ion-content>
  </ion-page>
</template>

<script lang="ts">
import { IonPage, IonHeader, IonToolbar, IonTitle, IonContent, IonLabel, IonInput, IonItem } from '@ionic/vue';
import ExploreContainer from '@/components/ExploreContainer.vue';
import { defineComponent } from 'vue';

export default defineComponent({
  components: { IonLabel, IonInput, IonItem },
});
</script>