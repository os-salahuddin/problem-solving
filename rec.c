#include <iostream>
using namespace std;

int sumAll(int number) {
    if(number > 0) {
        cout << number << " + ";
        return number + sumAll(number - 1);
    }
    return 0;
}

int main() {
   cout << sumAll(10) << "";
}



