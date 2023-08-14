#include <iostream>

typedef int TypeItems
const int maxItems = 100;

using namespace std;

class row {
private:
    int first, last;
    TypeItems *structure;

public:
    row();
    ~row();
    bool isEmpty();
    bool isFull();
    void push(TypeItems items);
    TypeItems pop();
    void print();
};