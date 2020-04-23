#include <stdlib.h>
#include <unistd.h>
#include <string.h>
#include <stdio.h>
#include <sys/types.h>

struct data {
 char name[64];
};

struct fp {
 int (*fp)();
};

void get_treat()
{
 printf("cats can have a little salami as a snacc :) \n");
}

void no_treats()
{
 printf("this kitty is hungry :( \n");
}

int main(int argc, char **argv)
{
 struct data *d;
 struct fp *f;

 d = malloc(sizeof(struct data));
 f = malloc(sizeof(struct fp));
 f->fp = nowinner;

 printf("data is at %p, fp is at %p\n", d, f);

 strcpy(d->name, argv[1]);

 f->fp();

}
