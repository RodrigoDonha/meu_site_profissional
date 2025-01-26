# Meu Site Profissional

## Descrição
Projeto voltado para exibir as habilidades profissionais.

1. Clone o repositório:
   ```https
   git clone https://github.com/RodrigoDonha/meu_site_profissional.git

## Instalação
Atualizando as bibliotecas e dependencias:

2. Em sua máquina local ou em seu servidor, entre no seu diretório através do terminal ou cmd, 
dentro do diretório digite: composer update

Caso em sua máquina ou servidor não esteja instaldo o composer, instale-o usando o comando: composer install

Após a atualização das dependencias, caso sua IDE de programação (exemplo VSCode Intelisense) acuse alguma imcompatibilidade 
ou função deprecada, procure atualizar o código para que não hajam falhas.

3. no diretório principal (raiz do seu projeto) crie um arquivo .env e dentro deste arquivo crie as variáveis de ambiente, sendo:
pode até copiar e colar o texto abaixo:

ADDRESS_EMAIL=digite_seu_email_aqui_exemplo_seu_email@gmail.com
PSWD_EMAIL=digite_a_senha_de_seu_email_aqui

Essa medida é para aumentar a segurança de suas informações (sensíveis) no projeto hospedado, por esse motivo que o arquivo .env 
não está disponível no repositório e deve ser criado e suas informações (sensíveis) devem ser informadas nele.

Aviso: caso você venha a publicar este seu projeto em sua conta no GitHub, não envie seu arquivo .env, pois caso você deixe
seu repositório público, assim como o meu está, você deixará suas informações sensíveis disponíveis a qualquer pessoa que venha
a acessar seu repositório.

4. No arquivo send-email.php, você precisará fazer uma ultima configuração, que são as configurações de SMTP, STMPAuth, SMTPSecure e Port. Essas configurações são adquiridas em sua conta de e-mail ou seja, com seu provedor de e-mail, então vá até o arquivo munido dessas informaçoes e faça a alteração lá.

5. Devido a questões de estruturação do projeto, os arquivos CSS (style.css), JS js (script.js) e PHP (send-email.php) estão no diretório src/more/ e o arquivo .php no src/service.

Pronto!