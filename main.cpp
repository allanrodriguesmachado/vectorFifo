#include <iostream>
#include "row.h"

using namespace std;

int main() {
    row rowsItems;
    int options;
    TypeItems item;

    cout << "Programa gerador de filas" << endl;

    do {
        cout << "Options" << endl;
        cout << "0: Finalizar" << endl;
        cout << "1: Inserir" << endl;
        cout << "2: Remover" << endl;
        cout << "3: Mostrar" << endl;

        cin >> options;

        if (options == 1) {
            cout << "Inserir elemento" << endl;
            cin >> item;

            rowsItems.push(item);
        }
//
//        if (options == 2) {
//            item = rowsItems.pop();
//            cout << "Elemento removido" << item << endl;
//        }
//
//        if (options == 3) {
//            rowsItems.print();
//        }

    } while (options != 0);

    return 0;

}