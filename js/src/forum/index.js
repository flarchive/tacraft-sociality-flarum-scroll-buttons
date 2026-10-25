import app from 'flarum/forum/app';
import ScrollButtons from './components/ScrollButtons';

app.initializers.add('tacraft-sociality-scroll-buttons', () => {
  app.beforeMount(() => {
    const container = document.createElement('div');
    container.id = 'scroll-buttons';
    document.querySelector('.App-content').appendChild(container);
    m.mount(container, { view: () => <ScrollButtons /> });
  });
});