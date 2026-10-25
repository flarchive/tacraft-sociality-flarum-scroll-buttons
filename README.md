# Scroll Buttons for Flarum

Display floating "back to top" and "go to bottom" buttons on the page, so you can jump with one click instead of dragging the scrollbar.

## Features

- Floating buttons appear automatically after scrolling and hide when back at the top
- One-click jump back to the top or down to the bottom of the page
- Discussion-aware: jumps to the first / last post in the stream instead of a raw page scroll
- Admin settings to toggle each button independently
- Adapts to dark mode and follows the Flarum theme
- Lightweight, no extra dependencies, works out of the box with zero configuration

## Installation

```
composer require tacraft-sociality/flarum-scroll-buttons
php flarum cache:clear
```