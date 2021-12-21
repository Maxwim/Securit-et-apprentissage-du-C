/*
* gcc file.c pour compiler
*
* Affichage :
*   %d : nombre entier
*   %f : nombre float
*   %c : caractères
*   %s : chaîne de caractères
*
*/
#include <stdio.h>//Minimum vital

int main(void)//Minimum vital
{
    const float noEdit = 420.421;
    //Sa ne sert plus a rien mais c'est ben de savoir
    register int registreAugmenter = 5; // Plus rapide au niveau du calcul "prioritaire"
    volatile int neverRegistre = 10; // Jamais passer dans le registre limite certain périphérique 
    //noEdit = 1.1;
    float floatS= 1.193;
    int ints = 5;
    int intS = 6; // casse a la case
    int calc = intS + ints;
    //long  helloworld ="Long char HelloWorld 2137m\n";//Décaration
    printf("Hello worl i am coder C :3\n");//stdio.h
    printf("Print int %d + %d = %d\n", intS, ints, calc);
    printf("%f\n", floatS);
    printf("%.2f\n", floatS);
    return 0;
}