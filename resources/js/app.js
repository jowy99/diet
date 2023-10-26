import Alpine from 'alpinejs';
import AlpineUi from '@alpinejs/ui';
import AlpineFocus from '@alpinejs/focus';
// import AlpineMask from '@alpinejs/mask';
import AlpineShare from './AlpineShare.js';

Alpine.plugin(AlpineUi);
Alpine.plugin(AlpineFocus);
Alpine.plugin(AlpineShare);
// Alpine.plugin(AlpineMask);

window.Alpine = Alpine;

Alpine.start();
