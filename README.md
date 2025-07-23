# 🌐 ViaExpressa

Este projeto é uma atualização de um site construído originalmente no ano 2000, com implementações e melhorias realizadas em 2013. O objetivo foi modernizar a presença online de uma empresa, Via Expressa, provedora de internet, adicionando funcionalidades interativas e otimizações de usabilidade.

## 📖 Histórico do Projeto

O site original foi criado no ano 2000. Em 2013, o projeto passou por uma atualização significativa, sendo meu primeiro trabalho com programação. Foram adicionadas diversas funcionalidades para melhorar a experiência do usuário e a interação com o site.

## 📌 Funcionalidades

As principais funcionalidades implementadas na atualização incluem:

  * **Slide de Serviços**: Criação de um slide em JavaScript (utilizando jQuery e Slides.js) para exibir os serviços oferecidos pela empresa, substituindo antigas imagens feitas em Flash. O slide apresenta informações como "Planos Via Rádio", "De 200Kbps a 2MEGAS", "Internet de qualidade a toda hora", "Garantia de velocidade", "Sinônimo de qualidade" e "Confira nossos planos".
  * **Busca Integrada do Google**: Implementação de uma barra de pesquisa que permite aos usuários realizar buscas diretamente no Google a partir do site.
  * **Abertura de Links em Nova Janela**: Configuração de todos os links que apontam para sites externos para abrirem em uma nova janela (`target='_blank'`) para manter o usuário no site principal.
  * **Pop-up para Webmail**: O serviço de login do webmail foi modificado para abrir em uma nova janela no formato de pop-up, melhorando a usabilidade.
  * **Novas Páginas de Conteúdo**:
      * **Página de Planos de Internet**: Uma nova página (`planos.php`) foi criada para detalhar os planos de internet oferecidos pela empresa, incluindo informações sobre velocidade (200Kbps a 2MEGAS), garantia (50%), upload máximo, limite de tráfego (ilimitado) e preço.
      * **Página de Contato**: Uma página "Fale Conosco" (`fconosco.php`) com um formulário de contato que envia o conteúdo diretamente para o e-mail do responsável da empresa utilizando PHPMailer.
      * **Páginas de Informações Úteis**: Páginas como "Agropecuária" (`agropecuaria.php`), "Educação" (`educacao.php`) e "Jornais" (`jornais.php`) foram criadas para fornecer links e informações segmentadas.
  * **Centralização da Página**: O layout foi ajustado para centralizar a página na tela do usuário, melhorando a apresentação visual.
  * **Data e Hora Dinâmicas**: Um script JavaScript exibe a data e hora atualizadas no cabeçalho do site.
  * **Acesso Rápido**: Menu lateral com dropdowns para acesso rápido a bancos, jornais, revistas, downloads, esportes, universidades, serviços públicos e classificados.
  * **Recarga de Celulares**: Links para recarga online de Claro, Vivo, Tim e Oi, abrindo em pop-ups.
  * **Notícias e Loterias**: Seções de "Últimas notícias" com links para jornais e "Loterias" com resultados, integrando widgets externos (`clicrbs.com.br`).

## 🛠️ Tecnologias Utilizadas

O projeto utiliza uma combinação de tecnologias front-end e back-end:

  * **Linguagens**: PHP, HTML, CSS, JavaScript.
  * **Bibliotecas/Frameworks**:
      * **jQuery 1.9.1**: Biblioteca JavaScript para manipulação do DOM e eventos.
      * **Slides.js**: Plugin jQuery para criação de slides de imagens.
      * **PHPMailer 5.2**: Biblioteca para envio de e-mails, suportando SMTP, com autenticação, HTML e anexos.
          * Suporta diversas codificações (8bit, 7bit, binary, base64, quoted-printable).
          * Pode ser configurado para usar SSL/TLS para conexões SMTP seguras.
          * Possui tratamento de exceções para erros.
          * Funcionalidades como DKIM, `SingleTo`, `SMTPKeepAlive` também estão presentes.
      * **html2text (via PHPMailer)**: Usado para converter conteúdo HTML em texto simples para a versão `AltBody` dos e-mails.
      * **SyntaxHighlighter 2.0.296**: Biblioteca para colorir sintaxe de código, presente nos arquivos de teste do PHPMailer.
  * **Serviços Externos**: Integração com Google Search, Facebook e widgets de notícias do ClicRBS.

## 🏗️ Estrutura do Projeto

A estrutura do diretório do projeto é organizada da seguinte forma:

```
ViaExpressa/
├── acessorapido.php
├── agropecuaria.php
├── cabecalho.php
├── css/
│   └── widget.css
├── dir_propaganda.php
├── educacao.php
├── fconosco.php
├── formulario.php
├── images/
│   ├── (diversas imagens como logos, barras, banners, planos)
│   └── swf/
│       └── guanabara.swf
├── img/ (imagens relacionadas aos slides)
│   ├── bg_bottom.jpg
│   ├── btns-next-prev.png
│   └── pagination.png
├── index.php
├── jornais.php
├── js/
│   ├── libs/
│   │   ├── jquery-1.9.1.min.js
│   │   └── jquery.slides.min.js
│   └── widget.js
├── menu_extrato.php
├── nbproject/ (arquivos de configuração do NetBeans)
│   ├── private/
│   │   ├── private.properties
│   │   └── private.xml
│   └── project.properties
│   └── project.xml
├── planos.php
├── rodape.php
└── class/
    ├── MAIL.class.php
    └── phpmailer/
        ├── aboutus.html
        ├── changelog.txt
        ├── class.phpmailer.php
        ├── class.pop3.php
        ├── class.smtp.php
        ├── docs/
        │   ├── Callback_function_notes.txt
        │   ├── DomainKeys_notes.txt
        │   ├── docs.ini
        │   ├── extending.html
        │   ├── faq.html
        │   ├── Note_for_SMTP_debugging.txt
        │   ├── pop3_article.txt
        │   └── use_gmail.txt
        ├── examples/
        │   ├── contents.html
        │   ├── images/
        │   │   ├── phpmailer.gif
        │   │   └── phpmailer_mini.gif
        │   ├── index.html
        │   ├── test_db_smtp_basic.php
        │   ├── test_mail_advanced.php
        │   ├── test_mail_basic.php
        │   ├── test_pop_before_smtp_advanced.php
        │   ├── test_pop_before_smtp_basic.php
        │   ├── test_sendmail_advanced.php
        │   ├── test_sendmail_basic.php
        │   ├── test_smtp_advanced.php
        │   ├── test_smtp_advanced_no_auth.php
        │   ├── test_smtp_basic.php
        │   ├── test_smtp_basic_no_auth.php
        │   ├── test_smtp_gmail_advanced.php
        │   └── test_smtp_gmail_basic.php
        ├── extras/
        │   └── htmlfilter.php
        ├── language/ (arquivos de idiomas do PHPMailer)
        │   ├── phpmailer.lang-ar.php
        │   ├── phpmailer.lang-br.php
        │   ├── phpmailer.lang-ca.php
        │   ├── phpmailer.lang-ch.php
        │   ├── phpmailer.lang-cz.php
        │   ├── phpmailer.lang-de.php
        │   ├── phpmailer.lang-dk.php
        │   ├── phpmailer.lang-es.php
        │   ├── phpmailer.lang-et.php
        │   ├── phpmailer.lang-fi.php
        │   ├── phpmailer.lang-fo.php
        │   ├── phpmailer.lang-fr.php
        │   ├── phpmailer.lang-hu.php
        │   ├── phpmailer.lang-it.php
        │   ├── phpmailer.lang-ja.php
        │   ├── phpmailer.lang-nl.php
        │   ├── phpmailer.lang-no.php
        │   ├── phpmailer.lang-pl.php
        │   ├── phpmailer.lang-ro.php
        │   ├── phpmailer.lang-ru.php
        │   ├── phpmailer.lang-se.php
        │   ├── phpmailer.lang-tr.php
        │   ├── phpmailer.lang-zh.php
        │   └── phpmailer.lang-zh_cn.php
        ├── LICENSE
        ├── README
        ├── test/
        │   ├── contents.html
        │   ├── phpmailerTest.php
        │   ├── test_callback.php
        │   └── testemail.php
        └── test_script/
            ├── contents.html
            ├── images/
            │   ├── aikido.gif
            │   ├── bkgrnd.gif
            │   └── phpmailer.gif
            ├── index.php
            ├── LGPLv3.txt
            ├── scripts/
            │   ├── clipboard.swf
            │   ├── shBrushBash.js
            │   ├── shBrushCSharp.js
            │   ├── shBrushCpp.js
            │   ├── shBrushCss.js
            │   ├── shBrushDelphi.js
            │   ├── shBrushDiff.js
            │   ├── shBrushGroovy.js
            │   ├── shBrushJava.js
            │   ├── shBrushJScript.js
            │   ├── shBrushPerl.js
            │   ├── shBrushPhp.js
            │   ├── shBrushPlain.js
            │   ├── shBrushPython.js
            │   ├── shBrushRuby.js
            │   ├── shBrushScala.js
            │   ├── shBrushSql.js
            │   ├── shBrushVb.js
            │   ├── shBrushXml.js
            │   ├── shCore.js
            │   └── shLegacy.js
            ├── src/
            │   ├── shCore.js
            │   └── shLegacy.js
            ├── styles/
            │   ├── help.png
            │   ├── magnifier.png
            │   ├── page_white_code.png
            │   ├── page_white_copy.png
            │   ├── printer.png
            │   ├── shCore.css
            │   ├── shThemeDefault.css
            │   ├── shThemeDjango.css
            │   ├── shThemeEmacs.css
            │   ├── shThemeFadeToGrey.css
            │   ├── shThemeMidnight.css
            │   ├── shThemeRDark.css
            │   └── wrapping.png
            └── test.html
```

## 🛠️ Instalação e Uso

Para configurar e executar o projeto, siga os passos abaixo:

1.  **Ambiente PHP**: Certifique-se de ter um servidor web com PHP configurado (como Apache ou Nginx com PHP-FPM). A versão do PHPMailer utilizada (5.2) requer PHP 5.0 ou superior.
2.  **Clonar o Repositório**: Faça o download ou clone o repositório para o diretório de seu servidor web.
3.  **Configuração do PHPMailer**:
      * O arquivo `class/MAIL.class.php` contém as configurações de SMTP para envio de e-mails (Gmail no exemplo). Você precisará atualizar `Username` e `Password` com suas próprias credenciais de e-mail.
      * Certifique-se de que a extensão `php_openssl` esteja habilitada no seu `php.ini` se estiver usando SSL/TLS para SMTP.
      * Ajuste a porta SMTP (`$mail->SMTP_PORT`) e o tipo de segurança (`$mail->SMTPSecure`) conforme seu provedor de e-mail. Para Gmail, a porta 587 e TLS são comuns.
      * Ajuste o `SetFrom` e `AddAddress` no `class/MAIL.class.php` para o email de destino do formulário de contato.
4.  **Navegação**: Abra o arquivo `index.php` em seu navegador para acessar o site.

## 🤝 Contribuição

Contribuições para o projeto são bem-vindas, especialmente para aprimoramento e modernização do código PHP e das tecnologias front-end. Sinta-se à vontade para abrir issues ou pull requests.

## 📄 Licença

Este projeto é licenciado sob a [GNU Lesser General Public License (LGPL)](https://www.gnu.org/licenses/old-licenses/lgpl-2.1.en.html). Consulte o arquivo `LICENSE` para mais detalhes.
