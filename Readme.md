# WORDPRESS

Version 6.2

# Plugins

- Elementor 
- Elementor Header & Footer Builder
- Smart Slider

# Banco de dados

Maria DB 10 em container
- docker-compose.yml
- Backup na pasta sql

# PHPMyAdmin

Para acessar o banco de dados

# Administração do Wordpress

Exemplo:

- http://localhost:3000/wp-admin/

# Tamanhos de imagens

 - Banner ou slider que se estende na tela toda
    - Desktop 1920 de largura
    - Mobile 1080 de largura

# Banco de dados

    - Nome: dbwordpress

# Instalação no servidor

    - Importar o script do banco de dados
    - No banco de dados na tabela wp_options trocar o valor do siteurl e home (http://localhost:3000 para http://www.etcvirtual.se.df.gov.br/site/)  
    - sudo git clone https://github.com/profssavio/etcvirtual.se.df.gov.br.git
    - sudo mv etcvirtual.se.df.gov.br site
    - sudo chmod 777 -R site/