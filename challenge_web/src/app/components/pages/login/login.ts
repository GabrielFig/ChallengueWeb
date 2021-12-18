import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { AuthService } from 'src/app/services/auth.service';

@Component({
  selector: 'app-login',
  templateUrl: './login.html',
  styleUrls: ['./login.scss'],
})
export class LoginComponent implements OnInit {
  usuario = {
    email: '',
    password: '',
  };
  constructor(private authService: AuthService, public Router: Router) {}

  ngOnInit(): void {}
  Ingresar() {
    const { email, password } = this.usuario;
    /* Utiliza esto para reedirigir dentro del ts   o pueden usar routerLink en el html */
    this.Router.navigateByUrl(`/home`);

    this.authService.login(email, password).then((res) => {
      console.log('Inició Sesión: ', res);
    });
  }

  Registrar() {
    console.log(this.usuario);
    const { email, password } = this.usuario;
    this.authService.register(email, password).then((res) => {
      console.log('Se registró: ', res);
    });
  }

  title = 'challenge_web';
}
