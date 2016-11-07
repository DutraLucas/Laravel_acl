# Lista de controle de acesso em Laravel

Sistema em php Laravel de Lista de controle de acesso focado em usuários, roles, e permissions. Sistema adaptado para parte back-end e na parte front-end.

## Instalação

* Download dos arquivos.
* Alterar a conexão no arquivo `.env`.
* Comentar o foreach no arquivo `app/Providers/AuthServiceProvider.php`, caso ele não estiver comentado o php artisan não funciona.
* Instalação das tabelas no banco de dados, entre no terminal até a pasta do sistema, em seguida digite a linha de código `php artisan migrate`
* Após a instalação das migrations instale as seeds
* Primeiro instale os usuários `php artisan db:seed --class=UserTableSeeder`
* Segundo instale os roles `php artisan db:seed --class=RoleTableSeeder`
* Terceiro instale os permissions `php artisan db:seed --class=PermissionTableSeeder`
* Por ultimo instale os Posts `php artisan db:seed --class=PostTableSeeder`
* Após a instalação sistema pronto acesse a tela de login `Usuário: admin@laravel.com` e `Senha: admin1234`.  

##Imagens do sistema
* Dashbord de entrada
<img src="resources/assets/img/capturas/dashbord.jpg"/>

* Tela de usuários
<img src="resources/assets/img/capturas/users.jpg"/>

* Tela de roles dos usuários
<img src="resources/assets/img/capturas/users_roles.jpg"/>

* Tela de roles
<img src="resources/assets/img/capturas/roles.jpg"/>

* Tela de permissions dos roles
<img src="resources/assets/img/capturas/roles_permissions.jpg"/>

* Tela de permissions
<img src="resources/assets/img/capturas/permissions.jpg"/>

## Considerações

Este pequeno sistema foi desenvolvido com intuito de auxiliar desenvolvedores iniciantes no Laravel a ter uma ferramenta de base com acl e que desenvolvedores experientes ajude na melhoria da mesma.
