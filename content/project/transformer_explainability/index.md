---
title: Transformer Explainability
summary: Introduced an explanation method for the transformer-based CodeBERT, which factors in the information flow across layers using Markov chains and integrated gradients for better insight into source code vulnerability predictions. 
tags:
  - Deep Learning
  - Transformer Models
  - Language Models
  - Software Engineering
date: '2023-10-01T00:00:00Z'

# Optional external URL for project (replaces project detail page).
external_link: ''

image:
  caption: Transformer Explainability
  focal_point: Smart

# links:
#   - icon: twitter
#     icon_pack: fab
#     name: Follow
#     url: https://twitter.com/georgecushen
url_code: 'https://github.com/mahbubcseju/TransformerExplainability'
url_pdf: '/uploads/transformer_explainability.pdf'
url_slides: ''
url_video: ''

# Slides (optional).
#   Associate this project with Markdown slides.
#   Simply enter your slide deck's filename without extension.
#   E.g. `slides = "example-slides"` references `content/slides/example-slides.md`.
#   Otherwise, set `slides = ""`.
slides: ''
---

Transformer-based models show significant performance in Natural Languages Processing (NLP) and Computer Vision (CV). CodeBERT is a recent transformer-based model that achieved state-of-the-art source code vulnerability detection performance. Although CodeBERT can predict whether an input code is vulnerable or not, there is no way to explain which features of the input source code are responsible for that prediction. Different explainability tools are proposed to compute the relevance of input tokens for the
model decisions. However, none of them considers the information flow across layers of the transformers and provides the class discriminative explanation. In this project, we propose an explanation approach that leverages the information flow across layers of the codeBERT model using the idea of the Markov chain and
the integrated gradient. Our model outperforms the baseline model by at least 2.57% top-10 accuracy.