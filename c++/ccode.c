#include <iostream>


int main(int argc, char **argv){
    char buffer[1024];
    strcpy(buffer, argv[1]);
    print("buffer content= %s\n",buffer);
} 