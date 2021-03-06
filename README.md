# Movile HACK-AFRO

Hackathon desenvolvido por pessoas negras, promovido pelo grupo MOVILE afim de viabilizar a "Educação/Desenvolvimento de jovens em situação de vulnerabilidade usando tecnologia."

![Carrosel da pagina home](./docs/img/header-hack-afro.png)


## EDUCA **N**AÇÃO BACKEND API

## Iniciando o Projeto 

Para rodar o projeto, execute o comando abaixo:

```sh
$ docker-compose up -d
```

Após, acesse o browser na url: [http://localhost/app_dev.php/api/](http://localhost/app_dev.php/api/)

# Stack Utilizada

* Docker - [https://www.docker.com/](https://www.docker.com/)
* PHP 7 - [https://www.php.net/](https://www.php.net/)
* Symfony Framework - [https://symfony.com/](https://symfony.com/)
* Ngrok - [https://ngrok.com/](https://ngrok.com/)


### API Routes

Retorna todo conteúdo das trilhas para download mobile.
```bash
GET: /api/content

[{
  "competencia": "História e Geografia",
  "temas": []
},
  {
    "competencia": "Ciências",
    "temas": [
      {
        "nomeTema": "Compreender conhecimentos científicos e tecnológicos a serviço da humanidade, identificando riscos e benefícios neles envolvidos.",
        "conteudo": [
          {
            "title": "Energia elétrica.",
            "text": "Aparelhos elétricos podem ser de muitos tipos, exercendo funções diferentes, por exemplo: calor, limpeza, roupa lavada, notícias, música, refrigeração etc. Podemos reescrever essas coisas de uma outra forma, procurando o que há em comum, nas funções desses aparelhos. Por exemplo, uma batedeira, um ventilador e uma furadeira todos eles, apesar de estarem executando tarefas diferentes, produzem algum movimento. Nesses três exemplos, todos possuem motores elétricos. Esse tipo de motor transforma a energia elétrica em movimento, que é uma outra forma de energia, que chamamos de energia mecânica. Assim, em todos esses aparelhos, a energia elétrica está se transformando em alguma outra forma de energia. Ao utilizá-los, estamos “consumindo” alguma energia, ou seja, transformando-a em movimento, calor, luz ou som, por exemplo.",
            "image": "/images/step-1/step-1.png",
            "alt": "Lorem Ipsum",
            "audio": "/audio/step-1/step-1.mp3",
            "pdf": "/pdf/step-1/step-1.pdf",
            "viewed": false
          },
          {
            "title": "Conservação de alimentos.",
            "text": "Ao ter que programar formas de economizar energia, muita gente tem dificuldades. O que excluir? Dá para ficar sem lâmpadas? Sem TV? Ou sem geladeira, por exemplo? A geladeira é um bom exemplo de eletrodoméstico sem o qual é difícil imaginar o mundo hoje em dia.\n Prolongar a vida de um alimento não é uma novidade. Os antigos caçadores, muitos séculos atrás, que salgavam e defumavam a carne de sua presa, já estavam fazendo isso: perceberam que a carne, coberta de sal por algum tempo, tornava-se seca (desidratada), durando muito mais, o que também ocorria quando era exposta à fumaça e ao calor (defumada).",
            "image": "/images/step-1/step-2.png",
            "alt": "Lorem Ipsum",
            "audio": "/audio/step-2/step-2.mp3",
            "pdf": "/pdf/step-2/step-2.pdf",
            "viewed": false
          },
          {
            "title": "Meios de transporte.",
            "text": "A escolha de meios de transporte envolve, muitos fatores. Em cada situação, para cada objetivo, em cada região do país e do mundo, é necessário balancear as vantagens e devantagens de se fabricar, introduzir e utilizar um dado meio de transporte, analisando os muitos aspectos envolvidos: sociais, econômicos, ambientais. Podemos nos perguntar, por exemplo, de que adiantam veículos capazes de desenvolver velocidades tão elevadas nas estradas e nas cidades, se o crescimento populacional, o crescimento urbano e a frota de veículos aumenta também tão rapidamente, causando congestionamentos “monstros” e muitos acidentes, e lançando no ar que respiramos tantas substâncias nocivas. O aumento dos transportes coletivos como ônibus, trens e metrôs é, sem dúvida, muito importante: economiza energia, reduz os congestionamentos do trânsito e pode também contribuir para a redução da poluição do ar. Mas isso depende de cada local e dos objetivos do veículo. Por exemplo, dadas as dimensões do país e o enorme volume de carga transportado entre cidades e estados pelas rodovias, o sistema ferroviário poderia ser ampliado, especialmente para o transporte de carga.",
            "image": "/images/step-1/step-3.png",
            "alt": "Lorem Ipsum",
            "audio": "/audio/step-3/step-3.mp3",
            "pdf": "/pdf/step-3/step-3.pdf",
            "viewed": false
          },
          {
            "title": "Geração de energia",
            "text": "No Brasil, a usina hidrelétrica é a forma de geração mais comum de eletricidade graças ao grande número de rios que possui. Mas também possui usinas termoelétricas e nucleares, além de outras fontes geradoras, mas em quantidades bem menores. \n Na hidrelétrica o movimento da água é transformado em energia elétrica, apesar de não produzirem gases poluentes nem radiações e de usarem uma fonte renovável de energia – a água –, também não estão isentas de problemas. As grandes hidrelétricas necessitam alagar vastas áreas para seus reservatórios, tendo que deslocar populações e plantações dessas áreas. \n Nas usinas termoelétricas e nas nucleares, também há turbinas que se movem acionando geradores do mesmo modo que nas hidrelétricas. A diferença entre elas e as hidrelétricas é que a fonte que coloca as turbinas em movimento é o calor. \n Nas termoelétricas, em geral, usam-se combustíveis fósseis: carvão mineral, óleo ou gás natural para aquecer a água. Por esse motivo, apresentam graves problemas no meio ambiente, além de depender de fontes que vêm rapidamente se esgotando. \n Nas nucleares, o aquecimento vem da energia gerada por reações que ocorrem nos núcleos de átomos radioativos. Essas reações produzem elevadas quantidades de energia na forma de calor. Um dos problemas desse tipo de usina, além do custo que é bem alto, são os seus resíduos, o chamado “lixo atômico” que sobra do seu funcionamento, e que pode continuar emitindo radiação por milhares de anos.",
            "image": "/images/step-4/step-4.png",
            "alt": "Lorem Ipsum",
            "audio": "/audio/step-4/step-4.mp3",
            "pdf": "/pdf/step-4/step-4.pdf",
            "viewed": false
          }
        ],
        "questoes": [
          {
            "title": "Selecione a alternativa com a afirmação falsa.",
            "options": [
              {
                "right": false,
                "content": "Lâmpadas, liquidificador e computador são aparelhos elétricos."
              },
              {
                "right": false,
                "content": "Aparelhos elétricos podem fornecer iluminação."
              },
              {
                "right": false,
                "content": "Guardar alimentos ainda quentes na geladeira gasta mais energia do que esperá-los esfriar."
              },
              {
                "right": true,
                "content": "Energia elétrica gera somente calor"
              }
            ]
          },
          {
            "title": "Qual das opções abaixo é uma forma aternativa de economizar energia?",
            "options": [
              {
                "right": false,
                "content": "Tomar banhos demorados."
              },
              {
                "right": true,
                "content": "Pensar em outras formas de conservar alimento e diminuir o uso da geladeira para esse fim."
              },
              {
                "right": false,
                "content": "Usar ar-condicionado mesmo em dias frios."
              },
              {
                "right": false,
                "content": "Lavar roupas em máquina de lavar mesmo em pouca quantidade."
              }
            ]
          },
          {
            "title": "Observe a tabela abaixo. Qual é o meio de transporte mais eficiente?",
            "options": [
              {
                "right": false,
                "content": "Bicicleta."
              },
              {
                "right": false,
                "content": "Pessoas caminhando."
              },
              {
                "right": false,
                "content": "Ônibus."
              },
              {
                "right": true,
                "content": "Carro com uma pessoa."
              }
            ]
          },
          {
            "title": "Quais são as principais desvantagens das usinas termoelétricas? ",
            "options": [
              {
                "right": true,
                "content": "Uso de combustíveis fósseis, não renováveis e poluição do ar."
              },
              {
                "right": false,
                "content": "Inundações que provocam deslocamento de populações e inutilizam áreas férteis."
              },
              {
                "right": false,
                "content": "Riscos de acidentes com vazamento de substâncias radioativas."
              },
              {
                "right": false,
                "content": "Riscos de acidentes em barragens."
              }
            ]
          }
        ]
      }
    ]
  },
  {
    "competencia": "LÍNGUA PORTUGUESA, LÍNGUA ESTRANGEIRA MODERNA, EDUCAÇÃO FÍSICA E EDUCAÇÃO ARTÍSTICA",
    "temas": []
  },
  {
    "competencia": "MATEMÁTICA",
    "temas": []
  },
  {
    "competencia": "Competencia4",
    "temas": []
  },
  {
    "competencia": "Competencia5",
    "temas": []
  }
]
```

Retorna audios dos conteúdos de trilhas.
```bash
GET: /api/audio

[
  {
    "step-1": "/audio/step-1.mp3",
    "title": "Lorem Ipsum"
  },
  {
    "step-2": "/audio/step-2.mp3",
    "title": "Lorem Ipsum"
  },
  {
    "step-3": "/audio/step-3.mp3",
    "title": "Lorem Ipsum"
  },
  {
    "step-4": "/audio/step-4.mp3",
    "tittle": "Lorem Ipsum"
  }
]

```

Retorna imagens das trilhas.
```bash
GET: /api/images

[
  {
    "step-1": "/images/step-1.png",
    "alt": "Lorem Ipsum"
  },
  {
    "step-2": "/images/step-2.png",
    "alt": "Lorem Ipsum"
  },
  {
    "step-3": "/images/step-3.png",
    "alt": "Lorem Ipsum"
  },
  {
    "step-4": "/images/step-4.png",
    "alt": "Lorem Ipsum"
  }
]

```