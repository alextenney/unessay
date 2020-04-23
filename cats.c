#include <stdio.h>
#include <stdlib.h>
#include <string.h>

struct cat {
    int priority;
    char *name;
};

void get_treat(){
    printf("Cats can have a little salami as a snack! \n");
}

int main(int argc, char **argv){
    struct cat *c1, *c2;
    c1 = malloc(sizeof(struct cat));
    c1-> priority = 1;
    c1-> name = malloc(8); 

    c2 = malloc(sizeof(struct cat));
    c2-> priority = 2;
    c2-> name = malloc(8); 

    strcpy(c1-> name, argv[1]);
    strcpy(c2-> name, argv[2]);

    printf("Give me treats! \n");
}