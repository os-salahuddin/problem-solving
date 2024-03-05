#include <iostream>
using namespace std;
int f(int number) {
  int result[100];
  int i = 0;
  int j = number;
  while(i<=j) {
        i++;
      if(i % 2 == 1) {
        result[i] = number - j - 1;
      } else {
        result[i] = number - j + 1;
      }
       j--;
  }

  int sum = 0;
  int size = sizeof(result)/sizeof(result[0]);
  for(int i = 0; i<size;i++) {
    sum += result[i];
  }
  return sum;
}

int main() {
   cout << f(4);
   return 0;
}



