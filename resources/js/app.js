import Alpine from 'alpinejs';
import AlpineUi from '@alpinejs/ui';
import AlpineFocus from '@alpinejs/focus';
// import AlpineMask from '@alpinejs/mask';

Alpine.plugin(AlpineUi);
Alpine.plugin(AlpineFocus);
// Alpine.plugin(AlpineMask);

window.Alpine = Alpine;

Alpine.start();
