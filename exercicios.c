#include <stdio.h>
#include <stdlib.h>
#include <locale.h>
#include <math.h>
#include <string.h>
#define TAM 4

int dig;
int valor;
int c=0;


int main() {
    if (c == 0) {
        c++;
        system("cls");
    }
    
while (1) {
    printf("Escolha qual exercecio deseja visualizar: \n");
    printf("Exercicio 1 [Digite 1] \n");
    printf("Exercicio 2 [Digite 2] \n");
    printf("Exercicio 3 [Digite 3] \n");
    printf("Sair [Digite 0] \n");

    scanf("%d", &dig);

    switch (dig) {
        case 0:
        exit(0);
            break;
        case 1:
        ex1();
            break;
        case 2:
        ex2();
            break;
        case 3:
        ex3();
            break;

    default:
        break;
    }
}

}

void ex1 (){
system("cls");
setlocale(LC_ALL, "");
 int numeros[TAM];
 int i, aux, contador;
printf("Informe %d numeros, e pressione enter para continuar:\n",TAM);
 for (i = 0; i < TAM; i++) {
 //comando para ler os valores que são informados
 scanf("%d", &numeros[i]);                                                  
 }
printf("Ordem dos numeros informados:\n");
for (i = 0; i < TAM; i++) {
 printf("%4d ", numeros[i]);
}
//Ordenação
 for (contador = 1; contador < TAM; contador++) {
   for (i = 0; i < TAM - 1; i++) {
     if (numeros[i] > numeros[i + 1]) {
       aux = numeros[i];
       numeros[i] = numeros[i + 1];
       numeros[i + 1] = aux;
     }
   }
 }
printf("\nOrdem crescente:\n");
for (i = 0; i < TAM; i++) {
 printf("%4d ", numeros[i]);
 //comando para somar os 3 últimos valores
 if (i < 3) {
    valor += numeros[i];
 }
}
printf("\n A soma dos tres primeiros valores e:\n %d",valor);
printf("\n\n\n");
return 0;
}

void ex2 (){
system("cls");
int ano, anobissexto, mesfevereirobissexto;
char mes[15];

printf("informe um mes tipo 'JANEIRO': \n");
scanf("%s",mes);
system("cls");

printf("informe um ano tipo 1999: \n");
scanf("%d",&ano);
system("cls");

if (ano % 4==0 ) {
mesfevereirobissexto = 29;
anobissexto = 366;
}else {
mesfevereirobissexto = 28;
anobissexto = 365;
}

if (strcmp(mes,"MARCO") == 0){
printf("DIAS = 31\n");
printf("DIAS NO ANO = %d\n",anobissexto);

} else if (strcmp(mes,"FEVEREIRO") == 0){
printf("DIAS = %d\n",mesfevereirobissexto);
printf("DIAS NO ANO = %d\n",anobissexto);

}else if (strcmp(mes,"MARCO") == 0){
printf("DIAS = 31\n");
printf("DIAS NO ANO = %d\n",anobissexto);

}else if (strcmp(mes,"ABRIL") == 0){
printf("DIAS = 30\n");
printf("DIAS NO ANO = %d\n",anobissexto);

}else if (strcmp(mes,"MAIO") == 0){
printf("DIAS = 31\n");
printf("DIAS NO ANO = %d\n",anobissexto);

}else if (strcmp(mes,"JUNHO") == 0){
printf("DIAS = 30\n");
printf("DIAS NO ANO = %d\n",anobissexto);

}else if (strcmp(mes,"JULHO") == 0){
printf("DIAS = 31\n");
printf("DIAS NO ANO = %d\n",anobissexto);

}else if (strcmp(mes,"AGOSTO") == 0){
printf("DIAS = 31\n");
printf("DIAS NO ANO = %d\n",anobissexto);

}else if (strcmp(mes,"SETEMBRO") == 0){
printf("DIAS = 30\n");
printf("DIAS NO ANO = %d\n",anobissexto);

}else if (strcmp(mes,"OUTUBRO") == 0){
printf("DIAS = 31\n");
printf("DIAS NO ANO = %d\n",anobissexto);

}else if (strcmp(mes,"NOVEMBRO") == 0){
printf("DIAS = 30\n");
printf("DIAS NO ANO = %d\n",anobissexto);

}else if (strcmp(mes,"DEZEMBRO") == 0){
printf("DIAS = 31\n");
printf("DIAS NO ANO = %d\n",anobissexto);

}
printf("\n\n\n");
return 0;
}

void ex3 (){
    int car;
    int carValor;
    char semana[15];
    system("cls");

    printf("Valor geral da diaria R$ 100\n");
    printf("Escolha um carro: \n");
    printf("[Digite 1] Carro Seda - popular  \n");
    printf("[Digite 2] Carro hatch - luxo\n");
    printf("[Digite 3] SUV - luxo\n");
    printf("[Digite 4] Picape - popular\n");
    scanf("%d", &car);
    system("cls");

    //diaria geral
    carValor = 100;

    switch (car) {
    case 2:
    carValor += carValor*0.15;
        break;
    case 3:
    carValor += carValor*0.15;
        break;
    }

    printf("Informe o dia da semana (Ex: TERCA): \n");
    scanf("%s", &semana);
    system("cls");


if (strcmp(semana,"SEGUNDA") == 0) {
    carValor -= carValor*0.4;
}else if (strcmp(semana,"TERCA") == 0) {
    carValor -= carValor*0.4;
}else if (strcmp(semana,"QUINTA") == 0) {
    carValor -= carValor*0.4;
}
    printf("No dia da semana %s o valor final sera de: %d",semana,carValor);
    printf("\n\n\n");

}