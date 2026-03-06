import { Routes } from '@angular/router';

export const routes: Routes = [
  {
    path: 'home',
    loadComponent: () => import('./home/home.page').then((m) => m.HomePage),
  },
  {
    path: '',
    redirectTo: 'home',
    pathMatch: 'full',
  },
  {
    path: 'botoes',
    loadComponent: () => import('./botoes/botoes.page').then( m => m.BotoesPage)
  },
  {
    path: 'lista',
    loadComponent: () => import('./lista/lista.page').then( m => m.ListaPage)
  },
];
