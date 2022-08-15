![image](https://user-images.githubusercontent.com/47927459/184676185-2e72989f-98a8-48ba-8f80-24bab2553bab.png)

## About Challange

O código abaixo precisa cadastrar uma tarifa de ônibus relacionando as entidades "Operator" e "Fare", onde "Fare" é a tarifa e "Operator" a operadora de benefício de vale-transporte. Uma "Fare" só pode ser cadastrada caso aquela operadora não possua nenhuma tarifa ativa (Fare.Status == 1) de mesmo valor dentro de um período de 6 meses. Porém o desenvolvedor que iniciou este código precisou parar o trabalho por tempo indeterminado e agora você precisa completá-lo e garantir que funcione.

## Requisitos

Composer 2.3^
PHP 7.4^

## Rodando o projeto

Assim que você baixar o projeto o primeiro passo para que ele funcione é abrir um terminal na pasta raiz e rodar o <b> composer install </b> para que as dependencias possam ser instaladas.

Apos a finalização da instalação das dependencias você já pode rodar o comando <b>php artisan serve</b> para que ele crie um servidor local na porta 8000

O Banco de dados do projeto esta hospedado na AWS então não é necessario configurar nada depois que baixar o projeto.

## Como funciona

Ao entrar na url localhost:8000 você vai se deparar com esta primeira tela
![image](https://user-images.githubusercontent.com/47927459/184673939-1e365c36-9c0d-4ff4-aea2-349aeded68b3.png)

Este é o nosso dashboard nele é possivel criar Operators ("Operadoras de benefício") e criar as Fares ("Tarifas");

Para cadastrar uma fare basta apertar sobre o botão Add New Fare.

![image](https://user-images.githubusercontent.com/47927459/184674320-ed6baf6a-af7c-4554-ac9b-78b6727cf297.png)

Na criação das fares é possivel adicionar um valor para ele e definir para qual operadora vai receber aquela fare.
![image](https://user-images.githubusercontent.com/47927459/184674440-00f32e7d-b41a-4278-9900-a097ac37c4a3.png)

Apos definir os valores e qual operadora vai receber basta apertar no botão save.

Temos agora uma fare cadastrada para o operadora PO01
![image](https://user-images.githubusercontent.com/47927459/184674623-4f5d5ee4-fc35-49b0-812d-a10eedae36e8.png)

Caso você tente adicionar uma fare de mesmo valor para esta mesma operadora não vai ser possivel. Pois esta operadora já tem uma fare ativa em um periodo menor que 6 meses <br>
![image](https://user-images.githubusercontent.com/47927459/184674875-1ca2a39b-610c-43c8-9f4b-d6bf81e07487.png)

Também é possivel desativar uma fare. Basta você apertar no botão azul escrito edit.

Nesta tela você consegue trocar a operadora que vai receber a fare, mudar o valor e ativar ou desativar esta fare.
![image](https://user-images.githubusercontent.com/47927459/184675268-233a9055-918c-4f52-a97d-3c81ef1a7c86.png)

Caso você desative a fare vai ser possivel cadastrar uma nova de mesmo valor para aquela operadora.

## Contato
 Caso tenha ficado com alguma duvida sobre o Código ou sobre a usabilidade do sistema pode me enviar um email para eduardolonghi5@gmail.com.

## Agradecimento
 Espero ter atendido as expectativas sobre o codigo escrito e sobre todos os requisitos do desafio.
 Fico no aguardo de um retorno.
 Espero que tenha um otimo dia! :D
 
## Tecnologias Utilizadas

PHP, Laravel, AWS
