import { Component } from '@angular/core';
import { FormsModule } from '@angular/forms'; // 1. Importe o FormsModule aqui
import { 
  IonHeader, IonToolbar, IonTitle, IonContent, IonButton, 
  IonIcon, IonCard, IonImg, IonCardContent, IonCardTitle, 
  IonCardHeader, IonCardSubtitle, IonItem, IonLabel, 
  IonList, IonAvatar, IonItemSliding, IonItemOptions, 
  IonItemOption, IonInput, IonGrid, IonRow, IonCol, NavController 
} from '@ionic/angular/standalone';

import { addIcons } from 'ionicons';
import { star, accessibilityOutline } from 'ionicons/icons';

@Component({
  selector: 'app-home',
  templateUrl: 'home.page.html',
  styleUrls: ['home.page.scss'],
  standalone: true,
  imports: [
    FormsModule, // 2. ADICIONE AQUI para o ngModel funcionar
    IonCol, IonRow, IonGrid, IonHeader, IonToolbar, IonTitle, 
    IonContent, IonButton, IonIcon, IonCard, IonImg, 
    IonCardContent, IonCardTitle, IonCardHeader, IonCardSubtitle, 
    IonItem, IonLabel, IonList, IonAvatar, IonItemSliding, 
    IonItemOptions, IonItemOption, IonInput
  ],
})
export class HomePage {
  
  // 3. Declare a variável que você usou no [(ngModel)]
  public pesquisa: string = "";

  constructor(private navegacao: NavController) {
    addIcons({ star, 'accessibility-outline': accessibilityOutline });
  }

  // 4. Crie a função que o botão chama no (click)
  public recuperar(): void {
    console.log("Pesquisa realizada: " + this.pesquisa);
  }

  // Suas outras funções...
  abrirBotoes() { this.navegacao.navigateForward('botoes'); }
  abrirLista() { this.navegacao.navigateForward('lista'); }
}