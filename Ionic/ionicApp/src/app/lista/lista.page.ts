import { Component, OnInit } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';
// Adicionei o IonBackButton aqui embaixo também para garantir
import { 
  IonContent, 
  IonHeader, 
  IonTitle, 
  IonToolbar, 
  IonButtons, 
  IonBackButton 
} from '@ionic/angular/standalone';

@Component({
  selector: 'app-lista',
  templateUrl: './lista.page.html',
  styleUrls: ['./lista.page.scss'],
  standalone: true,
  // IMPORTANTE: Adicione IonBackButton e IonButtons aqui dentro
  imports: [
    IonContent, 
    IonHeader, 
    IonTitle, 
    IonToolbar, 
    IonButtons, 
    IonBackButton, 
    CommonModule, 
    FormsModule
  ]
})
export class ListaPage implements OnInit {
  constructor() { }

  ngOnInit() { }
}