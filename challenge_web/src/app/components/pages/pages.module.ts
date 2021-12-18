import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { ReactiveFormsModule } from '@angular/forms';
import { LoginComponent } from './login/login';

import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';
import { NavbarComponent } from '../../components/navbar/navbar.component';

/* AQUI VAS A DECLARAR TODAS LAS RUTAS QUE VAYAN FUERA DEL SIDEBAR QUE ES LO QUE VA DESPUES DE LOGIN O ALGUNA PAGINA 
  EXTERNA AL ADMINISTRADOR */
const routes: Routes = [
  {
    path: 'login',
    component: LoginComponent,
  },
  {
    path: '**',
    redirectTo: '/login',
  },
];

@NgModule({
  imports: [
    ReactiveFormsModule,
    CommonModule,
    RouterModule.forChild(routes),
    FormsModule,
  ],
  declarations: [LoginComponent, NavbarComponent],
  exports: [RouterModule],
})
export class PagesModule {}
