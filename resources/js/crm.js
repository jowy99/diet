import Alpine from 'alpinejs';
import Sidebar from './Components/Sidebar';
import 'livewire-sortable';

Alpine.data('Sidebar', Sidebar);
window.Alpine = Alpine;
Alpine.start();
