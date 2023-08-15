#include <iostream>
#include "row.h"

using namespace std;

row::row() {
    first = 0;
    last = 0;

    structure = new TypeItems[maxItems];
}

row::~row() {
    delete[] structure;
}

bool row::isEmpty() {
    return (first == last);
}

bool row::isFull() {
    return (last - first == maxItems);
}

void row::push(TypeItems items) {
    if (isFull()) {
        cout << "A fila esta cheia\n";
        cout << "Esse elemento nao pode ser inserido\n";
    }

    if (!isFull()) {
        structure[last % maxItems] = items;
        last++;
    }
}

TypeItems row::pop() {
    if (isEmpty()) {
        cout << "A fila esta vazia!\n";
        cout << "Nenhum elemento foi removido!\n";
        return 0;
    }

    if (!isEmpty()) {
        first++;
        return structure[(first - 1) % maxItems];
    }
}

void row::print() {
    cout << "Fila: [ ";
    for (int i = first; i < last; i++) {
        cout << structure[i % maxItems] << " ";
    }
    cout << "\n" << endl;
}


