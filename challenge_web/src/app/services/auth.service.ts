import { Injectable } from '@angular/core';
import {AngularFireAuth} from '@angular/fire/compat/auth';
import firebase from 'firebase/compat/app';

@Injectable({
  providedIn: 'root'
})
export class AuthService {

  constructor(private afauth : AngularFireAuth) { }

    async login( email: string, password: string){

      try {
        return await this.afauth.signInWithEmailAndPassword(email, password);
      } catch (error) {
        console.log("Error en LogIn: ", alert('Usuario o Contraseña Errónea'));
        return null;
      }

    }

    async register( email: string, password: string){

      try {
        return await this.afauth.createUserWithEmailAndPassword(email, password);
      } catch (error) {
        console.log("Error en Registro: ", alert('Asegúrate de ingresar un usuario adecuado, ej. usuario@hotmail.com'));
        return null;
      }

    }

    async loginWithGoogle( email: String, password: String){

      try {
        return await this.afauth.signInWithPopup(new firebase.auth.GoogleAuthProvider());
      } catch (error) {
        console.log("Error en LogIn con Google: ", error);
        return null;
      }

    }

}
