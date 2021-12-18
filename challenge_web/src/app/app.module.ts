import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { NgbModule } from '@ng-bootstrap/ng-bootstrap';
import { NavbarComponent } from './components/navbar/navbar.component';
import { FormsModule } from '@angular/forms';
import { AngularFireModule } from '@angular/fire/compat';
import { HomeComponent } from './components/home/home.component';

const firebaseConfig = {
  apiKey: "AIzaSyATsNLYgje7WWtOF7D7g1esO37wRqpmXiU",
  authDomain: "challengeweb-92bed.firebaseapp.com",
  projectId: "challengeweb-92bed",
  storageBucket: "challengeweb-92bed.appspot.com",
  messagingSenderId: "760708433641",
  appId: "1:760708433641:web:2427b8347d922b674a9278",
  measurementId: "G-Y1ED7EKREX"
};


@NgModule({
  declarations: [
    AppComponent,
    NavbarComponent,
    HomeComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    NgbModule,
    FormsModule,
    AngularFireModule.initializeApp(firebaseConfig)
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
