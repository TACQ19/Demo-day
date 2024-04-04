import { createRouter, createWebHistory } from '@ionic/vue-router';
import { RouteRecordRaw } from 'vue-router';
import TabsPage from '../views/TabsPage.vue'

const routes: Array<RouteRecordRaw> = [
  {
    path: '/',
    redirect: '/tabs/vote'
  },
  {
    path: '/tabs/',
    component: TabsPage,
    children: [
      {
        path: '',
        redirect: '/tabs/vote'
      },
      {
        path: 'vote',
        component: () => import('@/views/Vote.vue')
      },
      {
        path: 'winner',
        component: () => import('@/views/Winner.vue')
      },
      {
        path: 'add',
        component: () => import('@/views/Add.vue')
      }
    ]
  }
]

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes
})

export default router
