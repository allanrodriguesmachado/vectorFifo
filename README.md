# Implementação de Fila Utilizando Vetores em C++

Este projeto consiste em uma implementação simples de uma fila (estrutura de dados do tipo FIFO - First-In-First-Out)
utilizando arrays (vetores) na linguagem de programação C++. Uma fila é uma estrutura de dados fundamental em ciência da
computação, frequentemente usada para gerenciar itens em uma ordem específica.

## Funcionalidades

- **Enfileirar (enqueue):** Adiciona um novo elemento ao final da fila.
- **Desenfileirar (dequeue):** Remove o elemento do início da fila.
- **Verificar se a fila está vazia:** Retorna verdadeiro se a fila estiver vazia, falso caso contrário.
- **Obter o tamanho da fila:** Retorna o número de elementos na fila.

## Como Usar

1. Faça o download ou clone este repositório para sua máquina local.
2. Abra o arquivo que contém a implementação da fila utilizando vetores (por exemplo, `fila_vetor.cpp`).
3. Compile o código utilizando um compilador C++ de sua escolha. Por exemplo, no terminal, você pode usar:

```bash
g++ fila_vetor.cpp -o fila
```

4. Execute o programa compilado:

```bash
./fila
```

5. Utilize os métodos disponíveis para gerenciar sua fila da seguinte maneira:

```cpp
#include "fila_vetor.h" // Inclua o arquivo de cabeçalho com a implementação da fila

int main() {
    FilaVetor fila;

    // Enfileire elementos
    fila.enqueue(10);
    fila.enqueue(20);
    fila.enqueue(30);

    // Desenfileire elemento
    int elemento_removido = fila.dequeue();
    cout << "Elemento removido: " << elemento_removido << endl;

    // Verifique se a fila está vazia
    if (fila.is_empty()) {
        cout << "A fila está vazia" << endl;
    } else {
        cout << "A fila não está vazia" << endl;
    }

    // Obtenha o tamanho da fila
    int tamanho = fila.size();
    cout << "Tamanho da fila: " << tamanho << endl;

    return 0;
}
```

## Contribuição

Contribuições são bem-vindas! Se você encontrar algum problema, tiver sugestões de melhorias ou quiser adicionar novos
recursos, sinta-se à vontade para abrir um problema ou enviar um pull request.

## Licença

Este projeto está licenciado sob a [Licença XYZ](link-para-a-licenca), o que significa que você pode usá-lo livremente
para fins pessoais ou comerciais.

```