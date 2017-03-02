
#include<myconio.h>
#include<stdio.h>
#include<stdlib.h>
#include<time.h>

    // Variables nécessaire à travers les fonctions.
int tab[34][18]={1};
int difficulte[6];
int g=0;

void debut()    // Page d'ouverture.
{
    system("cls");
    textcolor(14);
    gotoxy(3,3);
    printf("****************************************************");
    gotoxy(3,4);
    printf("Bienvenue ! Vous etes sur le demineur de Mael Mayon.");
    gotoxy(3,5);
    printf("****************************************************");
    gotoxy(3,8);
    system("PAUSE");
    niveau();
}

int niveau ()  // Choisir la difficulté.
{
    system("cls");
    int lvl;
    gotoxy(3,4);
    printf("Quel niveau voulez-vous jouer ? 1-Facile  2-Moyen  3-Difficile\n\n");
    scanf("%d",&lvl);
    if (lvl!= 1 && lvl!= 2 && lvl!=3){printf("\nVous vous etes trompes de selection\n\n");
    system("PAUSE");niveau();
    } else {
    switch (lvl){   // Mines           Largeur          Longueur          Indications
        case 1 : difficulte[1]=10; difficulte[2]=11; difficulte[3]=11; difficulte[4]=15;  break;
        case 2 : difficulte[1]=40; difficulte[2]=17; difficulte[3]=17; difficulte[4]=21;  break;
        case 3 : difficulte[1]=99; difficulte[2]=17; difficulte[3]=33; difficulte[4]=37;  break;
    }
    }
}

void placeMines()   // Placement des mines.
{
    srand(time(NULL));
    int x, y, i;
    for(i=0; i<difficulte[1];i++){
    x = rand()%(difficulte[3]-1)+1;
    y = rand()%(difficulte[2]-1)+1;
    if(tab[x][y] != 9){
        tab[x][y] = 9;
        }
    else i--;
    }
}

void placeIndication()  // Place les indications (1 à 8).
{
    int i,j;
    for(i=1; i<difficulte[3]; i++)
    {
        for(j=1; j<difficulte[2]; j++)
        {
            if(tab[i][j]==9){
            if(tab[i+1][j+1]!=9 && tab[i][j]!=tab[i][difficulte[2]]) tab[i+1][j+1]++;
            if(tab[i-1][j-1]!=9) tab[i-1][j-1]++;
            if(tab[i+1][j-1]!=9) tab[i+1][j-1]++;
            if(tab[i-1][j+1]!=9 && tab[i][j]!=tab[i][difficulte[2]]) tab[i-1][j+1]++;
            if(tab[i][j-1]!=9) tab[i][j-1]++;
            if(tab[i-1][j]!=9) tab[i-1][j]++;
            if(tab[i][j+1]!=9 && tab[i][j]!=tab[i][difficulte[2]]) tab[i][j+1]++;
            if(tab[i+1][j]!=9) tab[i+1][j]++;
            }
        }
    }
}

void afficheTable()  // Ce que l'on voit à l'écran.
{
    int i, j;
    for(i=1; i<difficulte[3]; i++)
    {
        for(j=1; j<difficulte[2]; j++)
        {
            gotoxy(i,j);
            printf("-");
        }
    }
    gotoxy(difficulte[4],3);
    printf("Bienvenue, voici les regles :");
    gotoxy(difficulte[4],5);
    printf("Tapez 'D' pour placer un drapeau.");
    gotoxy(difficulte[4],6);
    printf("Tapez '-' pour enlever un drapeau.");
    gotoxy(difficulte[4],7);
    printf("Tapez 'G' pour reveler la case.");
    gotoxy(difficulte[4],9);
    printf("Tapez 'Echap' Pour quitter.");
}

void gagne()    // Annonce que vous avez gagné, propose de rejouer.
{
    system("cls");
    textcolor(14);
    back2_9();
    int correc;
        int i, j;
            for(i=1; i<difficulte[3]; i++)
                {
                for(j=1; j<difficulte[2]; j++)
                    {
                    if(tab[i][j]==9)textcolor(12);
                    else textcolor(14);
                    gotoxy(i,j);
                    printf("%d",tab[i][j]);
                }
                printf("\n");
            }
    printf("\n\tBravo !! Vous avez gagne !\n");
    jouer();
}

void perdu()    // Annonce que vous avez perdu, renvoi vers la correction.
{
    system("cls");
    textcolor(14);
    back2_9();
    gotoxy(12,3);
    printf("Desole vous avez perdu !");
    int correc;
    gotoxy(3,6);
    printf("Voullez vous la correction ? 0-Oui 1-Non\n\n");
    scanf("%d",&correc);
    if(correc != 0 && correc != 1){printf("\nVous vous etes trompe dans la saisie\n\n"); system("PAUSE");perdu();}
    else if(correc == 0){
        int i, j;
            for(i=1; i<difficulte[3]; i++)
                {
                for(j=1; j<difficulte[2]; j++)
                    {
                    if(tab[i][j]==9)textcolor(12);
                    else textcolor(14);
                    gotoxy(i+2,j+8);
                    printf("%d",tab[i][j]);
                }
                printf("\n");
    } jouer();
    } else jouer();
}

void pose0()    // Remplace les 11 par des 0    // GOOD
{
    int i,j;
    for(i=1;i<difficulte[3];i++){
        for(j=1;j<difficulte[2];j++){
            if(tab[i][j]==11){
                tab[i][j]=0;
                gotoxy(i,j);
                printf("%d",tab[i][j]);
            }
        }
    }
}

void pose_indice()  // Remplace les 2x par les bon indices  // GOOD
{
    int i,j;
    for(i=1;i<difficulte[3];i++){
        for(j=1;j<difficulte[2];j++){
            if(tab[i][j]==21){
                tab[i][j]=1;
                gotoxy(i,j);
                printf("%d",tab[i][j]);}
            else if(tab[i][j]==22){
                tab[i][j]=2;
                gotoxy(i,j);
                printf("%d",tab[i][j]);}
            else if(tab[i][j]==23){
                tab[i][j]=3;
                gotoxy(i,j);
                printf("%d",tab[i][j]);}
            else if(tab[i][j]==24){
                tab[i][j]=4;
                gotoxy(i,j);
                printf("%d",tab[i][j]);}
            else if(tab[i][j]==25){
                tab[i][j]=5;
                gotoxy(i,j);
                printf("%d",tab[i][j]);}
            else if(tab[i][j]==26){
                tab[i][j]=6;
                gotoxy(i,j);
                printf("%d",tab[i][j]);}
            else if(tab[i][j]==27){
                tab[i][j]=7;
                gotoxy(i,j);
                printf("%d",tab[i][j]);}
            else if(tab[i][j]==28){
                tab[i][j]=8;
                gotoxy(i,j);
                printf("%d",tab[i][j]);
            }
        }
    }
}

void back2_9 ()     // Remet les 90 en 9 avant affichage correction     // GOOD
{
        int i, j;
            for(i=1; i<difficulte[3]; i++)
                {
                for(j=1; j<difficulte[2]; j++)
                    {
                        if(tab[i][j]==96){
                            tab[i][j]=9;
                        }
                }

            }
}


int jouer()  // Recommencer     // GOOD
{
    textcolor(14);
    int recommencer=0;
    printf("\n   Voulez vous rejouer ? 0-Oui 1-Non\n\n");
    scanf("%d",&recommencer);
    if(recommencer != 0 && recommencer != 1){printf("\nVous vous etes trompe dans la saisie\n\n"); system("PAUSE");jouer();}
    else if(recommencer == 0){
        cleanTab();
        main();
    } else exit(0);

}

void cleanTab()     // Nétoi le tableau avant de recommencer    // GOOD
{
    int i,j;
    for (i=1; i<difficulte[3]; i++){
        for (j=1; j<difficulte[2]; j++)tab[i][j]=0;
    }
}

main()
{
    debut();
    system("cls");
    int a=1, b=1, ga=0,g=0;
    char touche;
    placeMines();
    placeIndication();
    afficheTable();
    gotoxy(a,b);

    do{             // Se déplacer et Afficcher.
      touche = getch();
      if(touche == -32)
      {
          touche = getch();
          switch(touche)
          {
              case 77 : if(a<difficulte[3]-1) gotoxy(++a, b);break;
              case 75 : if(a>1) gotoxy(--a, b);break;
              case 72 : if(b>1) gotoxy(a, --b);break;
              case 80 : if(b<difficulte[2]-1) gotoxy(a, ++b);break;
          }
      } else{  // Action en jeu.

          switch(touche)
          {
            case 100 : gotoxy(a,b); textcolor(12);printf("D"); gotoxy(a,b);  // Poser un drapeau
                if (tab[a][b]==9){g++; gotoxy(a,b);tab[a][b]=96;}
                    else if(tab[a][b]!=9)ga--;  // Pour eviter triche
                if (g == difficulte[1] && ga >= 0 )gagne();     // Condition pour gagner
                break;
 /*Majuscule */ case 68 : gotoxy(a,b); textcolor(12);printf("D"); gotoxy(a,b);  // Poser un drapeau
                if (tab[a][b]==9){g++; gotoxy(a,b);tab[a][b]=96;}
                    else if(tab[a][b]!=9)ga--;  // Pour eviter triche
                if (g == difficulte[1] && ga >= 0 )gagne();     // Condition pour gagner
                break;
            case 45 : gotoxy(a,b); textcolor(14); printf("-");if(tab[a][b]==9)g--;break;   // Enlever un drapeau
            case 103 : gotoxy(a,b); textcolor(14); printf("%d",tab[a][b]);gotoxy(a,b);     // Réveler une case
                if(tab[a][b]!=9)ga++;
                if (tab[a][b]==9||tab[a][b]==96){perdu();}     // --> Cas case est une mine
                else if (tab[a][b]==0){     // --> Cas case est 0
                    tab[a][b]=10;
                    int i,j,x;      // Découvre tous les 0 adjacent Et les indices
                    for(x=0;x<1;x++){
                        for(i=1;i<difficulte[3];i++){
                            for(j=1;j<difficulte[2];j++){
                                if(tab[i][j]==10){
                                    if(tab[i][j+1]==0){tab[i][j+1]=10;}
                                        else if (tab[i][j+1]==1){tab[i][j+1]=21;}   // Partie Indices
                                        else if (tab[i][j+1]==2){tab[i][j+1]=22;}
                                        else if (tab[i][j+1]==3){tab[i][j+1]=23;}
                                        else if (tab[i][j+1]==4){tab[i][j+1]=24;}
                                        else if (tab[i][j+1]==5){tab[i][j+1]=25;}
                                        else if (tab[i][j+1]==6){tab[i][j+1]=26;}
                                        else if (tab[i][j+1]==7){tab[i][j+1]=27;}
                                        else if (tab[i][j+1]==8){tab[i][j+1]=28;}
                                    if(tab[i+1][j]==0){tab[i+1][j]=10;}
                                        else if (tab[i+1][j]==1){tab[i+1][j]=21;}
                                        else if (tab[i+1][j]==2){tab[i+1][j]=22;}
                                        else if (tab[i+1][j]==3){tab[i+1][j]=23;}
                                        else if (tab[i+1][j]==4){tab[i+1][j]=24;}
                                        else if (tab[i+1][j]==5){tab[i+1][j]=25;}
                                        else if (tab[i+1][j]==6){tab[i+1][j]=26;}
                                        else if (tab[i+1][j]==7){tab[i+1][j]=27;}
                                        else if (tab[i+1][j]==8){tab[i+1][j]=28;}
                                    if(tab[i][j-1]==0){tab[i][j-1]=10;}
                                        else if (tab[i][j-1]==1){tab[i][j-1]=21;}
                                        else if (tab[i][j-1]==2){tab[i][j-1]=22;}
                                        else if (tab[i][j-1]==3){tab[i][j-1]=23;}
                                        else if (tab[i][j-1]==4){tab[i][j-1]=24;}
                                        else if (tab[i][j-1]==5){tab[i][j-1]=25;}
                                        else if (tab[i][j-1]==6){tab[i][j-1]=26;}
                                        else if (tab[i][j-1]==7){tab[i][j-1]=27;}
                                        else if (tab[i][j-1]==8){tab[i][j-1]=28;}
                                    if(tab[i-1][j]==0){tab[i-1][j]=10;}
                                        else if (tab[i-1][j]==1){tab[i-1][j]=21;}
                                        else if (tab[i-1][j]==2){tab[i-1][j]=22;}
                                        else if (tab[i-1][j]==3){tab[i-1][j]=23;}
                                        else if (tab[i-1][j]==4){tab[i-1][j]=24;}
                                        else if (tab[i-1][j]==5){tab[i-1][j]=25;}
                                        else if (tab[i-1][j]==6){tab[i-1][j]=26;}
                                        else if (tab[i-1][j]==7){tab[i-1][j]=27;}
                                        else if (tab[i-1][j]==8){tab[i-1][j]=28;}
                                    if(tab[i+1][j+1]==0){tab[i+1][j+1]=10;}
                                    if(tab[i-1][j+1]==0){tab[i-1][j+1]=10;}
                                    if(tab[i+1][j-1]==0){tab[i+1][j-1]=10;}
                                    if(tab[i-1][j-1]==0){tab[i-1][j-1]=10;}
                                    // Diagonales pour les indices
                                        if (tab[i-1][j+1]==1){tab[i-1][j+1]=21;}
                                        if (tab[i-1][j+1]==2){tab[i-1][j+1]=22;}
                                        if (tab[i-1][j+1]==3){tab[i-1][j+1]=23;}
                                        if (tab[i-1][j+1]==4){tab[i-1][j+1]=24;}
                                        if (tab[i-1][j+1]==5){tab[i-1][j+1]=25;}
                                        if (tab[i-1][j+1]==6){tab[i-1][j+1]=26;}
                                        if (tab[i-1][j+1]==7){tab[i-1][j+1]=27;}
                                        if (tab[i-1][j+1]==8){tab[i-1][j+1]=28;}

                                        if (tab[i+1][j+1]==1){tab[i+1][j+1]=21;}
                                        if (tab[i+1][j+1]==2){tab[i+1][j+1]=22;}
                                        if (tab[i+1][j+1]==3){tab[i+1][j+1]=23;}
                                        if (tab[i+1][j+1]==4){tab[i+1][j+1]=24;}
                                        if (tab[i+1][j+1]==5){tab[i+1][j+1]=25;}
                                        if (tab[i+1][j+1]==6){tab[i+1][j+1]=26;}
                                        if (tab[i+1][j+1]==7){tab[i+1][j+1]=27;}
                                        if (tab[i+1][j+1]==8){tab[i+1][j+1]=28;}

                                        if (tab[i+1][j-1]==1){tab[i+1][j-1]=21;}
                                        if (tab[i+1][j-1]==2){tab[i+1][j-1]=22;}
                                        if (tab[i+1][j-1]==3){tab[i+1][j-1]=23;}
                                        if (tab[i+1][j-1]==4){tab[i+1][j-1]=24;}
                                        if (tab[i+1][j-1]==5){tab[i+1][j-1]=25;}
                                        if (tab[i+1][j-1]==6){tab[i+1][j-1]=26;}
                                        if (tab[i+1][j-1]==7){tab[i+1][j-1]=27;}
                                        if (tab[i+1][j-1]==8){tab[i+1][j-1]=28;}

                                        if (tab[i-1][j-1]==1){tab[i-1][j-1]=21;}
                                        if (tab[i-1][j-1]==2){tab[i-1][j-1]=22;}
                                        if (tab[i-1][j-1]==3){tab[i-1][j-1]=23;}
                                        if (tab[i-1][j-1]==4){tab[i-1][j-1]=24;}
                                        if (tab[i-1][j-1]==5){tab[i-1][j-1]=25;}
                                        if (tab[i-1][j-1]==6){tab[i-1][j-1]=26;}
                                        if (tab[i-1][j-1]==7){tab[i-1][j-1]=27;}
                                        if (tab[i-1][j-1]==8){tab[i-1][j-1]=28;}

                                    tab[i][j]=11;
                                    x--;
                                }
                            }
                        }
                    }
                }
                pose_indice();
                pose0();
                gotoxy(a,b);
                break;
/*Majuscule */  case 71 : gotoxy(a,b); textcolor(14); printf("%d",tab[a][b]);gotoxy(a,b);     // Réveler une case
                if(tab[a][b]!=9)ga++;
                if (tab[a][b]==9||tab[a][b]==96){perdu();}     // --> Cas case est une mine
                else if (tab[a][b]==0){     // --> Cas case est 0
                    tab[a][b]=10;
                    int i,j,x;      // Découvre tous les 0 adjacent Et les indices
                    for(x=0;x<1;x++){
                        for(i=1;i<difficulte[3];i++){
                            for(j=1;j<difficulte[2];j++){
                                if(tab[i][j]==10){
                                    if(tab[i][j+1]==0){tab[i][j+1]=10;}
                                        else if (tab[i][j+1]==1){tab[i][j+1]=21;}   // Partie Indices
                                        else if (tab[i][j+1]==2){tab[i][j+1]=22;}
                                        else if (tab[i][j+1]==3){tab[i][j+1]=23;}
                                        else if (tab[i][j+1]==4){tab[i][j+1]=24;}
                                        else if (tab[i][j+1]==5){tab[i][j+1]=25;}
                                        else if (tab[i][j+1]==6){tab[i][j+1]=26;}
                                        else if (tab[i][j+1]==7){tab[i][j+1]=27;}
                                        else if (tab[i][j+1]==8){tab[i][j+1]=28;}
                                    if(tab[i+1][j]==0){tab[i+1][j]=10;}
                                        else if (tab[i+1][j]==1){tab[i+1][j]=21;}
                                        else if (tab[i+1][j]==2){tab[i+1][j]=22;}
                                        else if (tab[i+1][j]==3){tab[i+1][j]=23;}
                                        else if (tab[i+1][j]==4){tab[i+1][j]=24;}
                                        else if (tab[i+1][j]==5){tab[i+1][j]=25;}
                                        else if (tab[i+1][j]==6){tab[i+1][j]=26;}
                                        else if (tab[i+1][j]==7){tab[i+1][j]=27;}
                                        else if (tab[i+1][j]==8){tab[i+1][j]=28;}
                                    if(tab[i][j-1]==0){tab[i][j-1]=10;}
                                        else if (tab[i][j-1]==1){tab[i][j-1]=21;}
                                        else if (tab[i][j-1]==2){tab[i][j-1]=22;}
                                        else if (tab[i][j-1]==3){tab[i][j-1]=23;}
                                        else if (tab[i][j-1]==4){tab[i][j-1]=24;}
                                        else if (tab[i][j-1]==5){tab[i][j-1]=25;}
                                        else if (tab[i][j-1]==6){tab[i][j-1]=26;}
                                        else if (tab[i][j-1]==7){tab[i][j-1]=27;}
                                        else if (tab[i][j-1]==8){tab[i][j-1]=28;}
                                    if(tab[i-1][j]==0){tab[i-1][j]=10;}
                                        else if (tab[i-1][j]==1){tab[i-1][j]=21;}
                                        else if (tab[i-1][j]==2){tab[i-1][j]=22;}
                                        else if (tab[i-1][j]==3){tab[i-1][j]=23;}
                                        else if (tab[i-1][j]==4){tab[i-1][j]=24;}
                                        else if (tab[i-1][j]==5){tab[i-1][j]=25;}
                                        else if (tab[i-1][j]==6){tab[i-1][j]=26;}
                                        else if (tab[i-1][j]==7){tab[i-1][j]=27;}
                                        else if (tab[i-1][j]==8){tab[i-1][j]=28;}
                                    if(tab[i+1][j+1]==0){tab[i+1][j+1]=10;}
                                    if(tab[i-1][j+1]==0){tab[i-1][j+1]=10;}
                                    if(tab[i+1][j-1]==0){tab[i+1][j-1]=10;}
                                    if(tab[i-1][j-1]==0){tab[i-1][j-1]=10;}
                                    // Diagonales pour les indices
                                        if (tab[i-1][j+1]==1){tab[i-1][j+1]=21;}
                                        if (tab[i-1][j+1]==2){tab[i-1][j+1]=22;}
                                        if (tab[i-1][j+1]==3){tab[i-1][j+1]=23;}
                                        if (tab[i-1][j+1]==4){tab[i-1][j+1]=24;}
                                        if (tab[i-1][j+1]==5){tab[i-1][j+1]=25;}
                                        if (tab[i-1][j+1]==6){tab[i-1][j+1]=26;}
                                        if (tab[i-1][j+1]==7){tab[i-1][j+1]=27;}
                                        if (tab[i-1][j+1]==8){tab[i-1][j+1]=28;}

                                        if (tab[i+1][j+1]==1){tab[i+1][j+1]=21;}
                                        if (tab[i+1][j+1]==2){tab[i+1][j+1]=22;}
                                        if (tab[i+1][j+1]==3){tab[i+1][j+1]=23;}
                                        if (tab[i+1][j+1]==4){tab[i+1][j+1]=24;}
                                        if (tab[i+1][j+1]==5){tab[i+1][j+1]=25;}
                                        if (tab[i+1][j+1]==6){tab[i+1][j+1]=26;}
                                        if (tab[i+1][j+1]==7){tab[i+1][j+1]=27;}
                                        if (tab[i+1][j+1]==8){tab[i+1][j+1]=28;}

                                        if (tab[i+1][j-1]==1){tab[i+1][j-1]=21;}
                                        if (tab[i+1][j-1]==2){tab[i+1][j-1]=22;}
                                        if (tab[i+1][j-1]==3){tab[i+1][j-1]=23;}
                                        if (tab[i+1][j-1]==4){tab[i+1][j-1]=24;}
                                        if (tab[i+1][j-1]==5){tab[i+1][j-1]=25;}
                                        if (tab[i+1][j-1]==6){tab[i+1][j-1]=26;}
                                        if (tab[i+1][j-1]==7){tab[i+1][j-1]=27;}
                                        if (tab[i+1][j-1]==8){tab[i+1][j-1]=28;}

                                        if (tab[i-1][j-1]==1){tab[i-1][j-1]=21;}
                                        if (tab[i-1][j-1]==2){tab[i-1][j-1]=22;}
                                        if (tab[i-1][j-1]==3){tab[i-1][j-1]=23;}
                                        if (tab[i-1][j-1]==4){tab[i-1][j-1]=24;}
                                        if (tab[i-1][j-1]==5){tab[i-1][j-1]=25;}
                                        if (tab[i-1][j-1]==6){tab[i-1][j-1]=26;}
                                        if (tab[i-1][j-1]==7){tab[i-1][j-1]=27;}
                                        if (tab[i-1][j-1]==8){tab[i-1][j-1]=28;}

                                    tab[i][j]=11;
                                    x--;
                                }
                            }
                        }
                    }
                }
                pose_indice();
                pose0();
                gotoxy(a,b);
               break;
          }
    }
    }while(touche!=27);
    gotoxy(20,20); // Pour que le message de fin ne s'affiche pas par dessus autre chose.
}
