# Movile HACK-AFRO

Hackathon desenvolvido por pessoas negras, promovido pelo grupo MOVILE afim de viabilizar a "Educação/Desenvolvimento de jovens em situação de vulnerabilidade usando tecnologia."

![Carrosel da pagina home](./docs/img/header-hack-afro.png)


## EDUCA **N**AÇÃO BACKEND API

### API Routes

Retorna todo conteúdo das trilhas para download mobile.
```bash
GET: /api/content

{
  "step-1": [
    {
      "title": "Ola title 1",
      "text": "Morbi dictum id eros sit amet mattis. Aliquam quis nulla mollis, feugiat ipsum ut, euismod mauris. Sed at condimentum diam. Cras eleifend neque eu tristique porttitor. Etiam non augue ex. Praesent at ultrices mauris. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus."
    },
    {
      "image": "https://i.picsum.photos/id/99/200/300.jpg",
      "alt": "Lorem Ipsum"
    },
    {
      "audio": "http://kolber.github.io/audiojs/demos/mp3/juicy.mp3"
    }
  ],
  "step-2": [
    {
      "title": "Ola title 2",
      "text": "Morbi dictum id eros sit amet mattis. Aliquam quis nulla mollis, feugiat ipsum ut, euismod mauris. Sed at condimentum diam. Cras eleifend neque eu tristique porttitor. Etiam non augue ex. Praesent at ultrices mauris. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus."
    },
    {
      "image": "https://i.picsum.photos/id/99/200/300.jpg",
      "alt": "Lorem Ipsum"
    },
    {
      "audio": "http://kolber.github.io/audiojs/demos/mp3/juicy.mp3"
    }
  ],
  "step-3": [
    {
      "title": "Ola title 3",
      "text": "Morbi dictum id eros sit amet mattis. Aliquam quis nulla mollis, feugiat ipsum ut, euismod mauris. Sed at condimentum diam. Cras eleifend neque eu tristique porttitor. Etiam non augue ex. Praesent at ultrices mauris. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus."
    },
    {
      "image": "https://i.picsum.photos/id/99/200/300.jpg",
      "alt": "Lorem Ipsum"
    },
    {
      "audio": "http://kolber.github.io/audiojs/demos/mp3/juicy.mp3"
    }
  ],
  "step-4": [
    {
      "title": "Questionário",
      "text": "Morbi dictum id eros sit amet mattis. Aliquam quis nulla mollis, feugiat ipsum ut, euismod mauris. Sed at condimentum diam. Cras eleifend neque eu tristique porttitor. Etiam non augue ex. Praesent at ultrices mauris. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.",
      "answer-1": "resposta-1",
      "answer-2": "resposta-2",
      "answer-3": "resposta-3",
      "answer-4": "resposta-4"
    },
    {
      "image": "https://i.picsum.photos/id/99/200/300.jpg",
      "alt": "Lorem Ipsum"
    },
    {
      "audio": "http://kolber.github.io/audiojs/demos/mp3/juicy.mp3"
    }
  ]
}
```

Retorna audios dos conteúdos de trilhas.
```bash
GET: /api/audio

{
  "step-1": "/audio/step1-juicy.mp3",
  "step-2": "/audio/step2-juicy.mp3",
  "step-3": "/audio/step3-juicy.mp3",
  "step-4": "/audio/step4-juicy.mp3"
}

```

Retorna imagens das trilhas.
```bash
GET: /api/images

{
  "step-1": "https://picsum.photos/200/300",
  "step-2": "https://picsum.photos/200/300",
  "step-3": "https://picsum.photos/200/300",
  "step-4": "https://picsum.photos/200/300"
}

```