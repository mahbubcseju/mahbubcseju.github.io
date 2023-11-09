---
title: Slice Level Vulnerability Detection
summary: Transformer-based models for detecting software vulnerabilities are limited by their token input size, potentially missing crucial data. This project introduces a slicing method that focuses on relevant program points to improve detection accuracy, yielding better performance metrics compared to traditional function-based approaches.
tags:
  - Deep Learning
  - Transformer Models
  - Language Models
  - Software Engineering
date: '2023-10-01T00:00:00Z'

# Optional external URL for project (replaces project detail page).
external_link: ''

image:
  caption: Slice Level Vulnerability Detection
  focal_point: Smart

# links:
#   - icon: twitter
#     icon_pack: fab
#     name: Follow
#     url: https://twitter.com/georgecushen
url_code: 'https://github.com/mahbubcseju/SliceLevelVulnerabilityDetection'
url_pdf: '/uploads/slice_level_vul_det.pdf'
url_slides: ''
url_video: ''

# Slides (optional).
#   Associate this project with Markdown slides.
#   Simply enter your slide deck's filename without extension.
#   E.g. `slides = "example-slides"` references `content/slides/example-slides.md`.
#   Otherwise, set `slides = ""`.
slides: ''
---

Current transformer-based software vulnerability detection approaches consider the function as input. However, one drawback of the transformer-based model is that it processes a certain number of input tokens and discards the remaining ones. The discarded tokens may contain the root cause of vulnerabilities, and
the predictions may be inaccurate. In this project, our proposed approach makes slices based on the program points of interest where a generated slice is smaller in length than the function and includes statements from different parts of the function depending on the program point of interest. Thus, it reduces the chance
of discarding the root causes of vulnerability from the input. We classify a function as vulnerable or nonvulnerable based on the prediction of its slices. Experimental result shows that our slice-based approach performs better than the function-based approach, and gets a performance increase of 2.7%, 1%, 0.7%, and
0.4% in Recall, F1 score, Accuracy, and Precision, respectively