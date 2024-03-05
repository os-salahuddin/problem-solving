#include <iostream>
using namespace std;

void myFunction() {
    cout << "opel";
}

int main() {
   int i = 0;
   string car[2][4] = {{"volvo", "bmw", "ford", "mazda"}, {"A", "B", "C", "D"}};
   myFunction();
   do {
    string name = "sala";
    cout << car[0][0];
    i++;
    } while (i<5);

    for(int i = 0; i<2; i++) {
        for(int j = 0; j<2; j++) {
            cout << car[0][j] << "\n";
        }
    }
    return 0;
}



