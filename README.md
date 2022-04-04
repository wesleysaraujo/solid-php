# Exemplos de como aplicar os princípios do SOLID usando a linguagem PHP

## S of SOLID
O S é o princípio de Single Responsibility, ou princípio da responsabilidade única. Esse princípio diz que uma classe deve ter apenas uma responsabilidade.

## O of SOLID
O O é o princípio de Open-Closed, ou princípio de Aberto-Fechado. Esse princípio diz que uma classe deve ser aberta para extensão e fechada para modificação.
Ou seja, uma classe deve ser aberta para extensão porém sempre que houver a necessidade de modificação, deve ser implementado uma nova classe extendendo a mesma classe ou implementando a mesma interface.

## L of SOLID
O L é o princípio de Liskov Substitution, ou princípio da substituição de Liskov. Esse princípio diz que uma classe deve ser substituída por outra classe sempre que possível.
Acredito que devido a ao complicado nome do princípio, costumamos atribuir uma determinada dificuldade na hora de implementa-lo, porém esse é um dos princípios mais simples do SOLID.
Mas basicamente esse princípio dita que uma classe concreta pode ser substituída pela classe base ou por uma classe irmã, desde que ambas sejam do mesmo tipo (Herdem a mesma classe base).
Quando se começa a implementar projeto baseados em Clean Architecture, esse princípio é muito importante.

## I of SOLID
O I é o princípio de Interface Segregation, ou princípio da segregação de interfaces. Esse princípio dita que é melhor ter várias interfaces pequenas que atende a distinção de cada tipo de classe, do que ter uma interface genérica que implementa métodos que não são usuados pela classe.
Uma classe só deve implementar métodos que serão usados por ela, e não métodos que não serão usados.

## D of SOLID
O D é o princípio de Dependency Inversion, ou princípio da inversão de dependência. Uma implementação concreta deve depender de abstrações, porém abstrações não deve depender de implementações concretas.
Em termos práticos, sempre que eu precisar passar um objeto para uma classe concreta ou método dessa, eu devo passar uma abstração... uma interface, pois com isso eu não preciso mudar a classe concreta sempre que ocorre uma mudança no código da classe que está sendo passada.